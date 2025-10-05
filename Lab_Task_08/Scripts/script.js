/* ---------- tiny data loader (JSONPlaceholder-like) ---------- */
const API = "https://jsonplaceholder.typicode.com/posts";

/* state */
let posts = [];
let page = 1;
const perPage = 8;
let activeTag = "all";

/* DOM refs  */
const grid = document.getElementById("grid");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");
const pageInfo = document.getElementById("pageInfo");
const qInput = document.getElementById("q");
const searchForm = document.getElementById("searchForm");
const cats = document.getElementById("cats");
const authorsList = document.getElementById("authorsList"); // Featured Authors
// New Drawer elements
const detailDrawerWrap = document.getElementById("detailDrawer");
const drawerImg = document.getElementById("drawerImg");
const drawerTitle = document.getElementById("drawerTitle");
const drawerText = document.getElementById("drawerText");
const drawerTag = document.getElementById("drawerTag");
const drawerId = document.getElementById("drawerId");
const drawerAuthor = document.getElementById("drawerAuthor");
const drawerClose = document.getElementById("drawerClose");
const themeBtn = document.getElementById("toggleTheme");
const nbBanner = document.getElementById("newsletterBanner");
const nbClose = document.getElementById("nbClose");
const nbSubscribe = document.getElementById("nbSubscribe");
const nbEmail = document.getElementById("nbEmail");

/* helper: sanitize text for HTML insertion (simple) */
function esc(s){ return String(s).replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;'); }

/* helper: array of random author names */
const authorNames = ["Jane Doe", "Alex Smith", "Chris Miller", "Samira Khan", "Tom Brown", "Li Wei", "Patel Raj"];

/* --- Theme Initialization --- */
function initTheme() {
    const isDark = localStorage.getItem('mb-theme') === 'dark';
    document.body.classList.toggle('dark', isDark);
    themeBtn.setAttribute('aria-pressed', isDark);
}
initTheme();
/* ---------------------------- */


/* load posts and add tag, thumb, author, liked, and saved */
async function loadPosts(){
  const resp = await fetch(API);
  const json = await resp.json();
  
  const tags = ["dev","ux","travel","life"];
  posts = json.slice(0,60).map((p,i)=>{
    const postId = p.id;
    return {
      id: postId,
      title: p.title,
      body: p.body,
      tag: tags[i % tags.length],
      author: authorNames[i % authorNames.length],
      thumb: `https://picsum.photos/seed/mb${postId}/600/400`,
      // load states from localStorage
      liked: Boolean(localStorage.getItem(`mb-liked-${postId}`)),
      saved: Boolean(localStorage.getItem(`mb-saved-${postId}`))
    };
  });
  render();
  updateSidebarWidgets();
}

/* rendering posts with search & tag filter & pagination */
function render(){
  const q = (qInput.value||"").toLowerCase().trim();
  const filtered = posts.filter(p=>{
    const matchesTag = (activeTag==='all') || p.tag===activeTag;
    const matchesQuery = !q || p.title.toLowerCase().includes(q) || p.body.toLowerCase().includes(q) || p.tag.toLowerCase().includes(q) || p.author.toLowerCase().includes(q);
    return matchesTag && matchesQuery;
  });
  
  const total = Math.max(1, Math.ceil(filtered.length / perPage));
  if(page>total) page = total;
  
  const start = (page-1)*perPage;
  const chunk = filtered.slice(start, start+perPage);

  grid.innerHTML = chunk.map(p => postCardHtml(p)).join("") || `<div class="card-post"><p style="padding:14px">No posts. Try another search or category.</p></div>`;
  pageInfo.textContent = `Page ${page} / ${total}`;
  prevBtn.disabled = page<=1;
  nextBtn.disabled = page>=total;

  // attach listeners
  document.querySelectorAll(".js-read").forEach(btn=>btn.addEventListener("click", onRead));
  document.querySelectorAll(".js-like").forEach(btn=>btn.addEventListener("click", onLike));
  document.querySelectorAll(".js-save").forEach(btn=>btn.addEventListener("click", onSave));
}

/* small markup functions */
function postCardHtml(p){
  return `
    <article class="card-post" data-id="${p.id}">
      <img src="${p.thumb}" alt="${esc(p.title)}" loading="lazy" />
      <h4>${esc(p.title)}</h4>
      <p>${esc(p.body.substring(0,110))}...</p>
      <div class="actions">
        <button class="read-more js-read" data-id="${p.id}">View Post</button>
        <div class="action-buttons">
          <button class="like js-like" data-id="${p.id}" aria-pressed="${p.liked}" style="color: ${p.liked ? 'var(--like-color)' : '#888'}">
            <i class="fa-solid fa-heart"></i>
            <span class="count">${p.liked?1:0}</span>
          </button>
          <button class="save js-save" data-id="${p.id}" aria-pressed="${p.saved}" style="color: ${p.saved ? 'var(--save-color)' : '#888'}">
            <i class="fa-solid fa-bookmark"></i>
          </button>
        </div>
      </div>
    </article>
  `;
}

/* Sidebar Widgets: Authors List */
function updateSidebarWidgets(){
  
  // 1. Authors List
  const authorMap = posts.reduce((acc, p) => {
    acc[p.author] = (acc[p.author] || 0) + 1;
    return acc;
  }, {});

  const featuredAuthors = Object.keys(authorMap)
    .sort((a, b) => authorMap[b] - authorMap[a]) // Sort by post count (most active first)
    .slice(0, 5); // Show 5 featured authors

  authorsList.innerHTML = featuredAuthors.map(author => `
    <div class="mini-item" data-author="${esc(author)}">
      <img src="https://ui-avatars.com/api/?name=${encodeURIComponent(author)}&background=2466f2&color=fff&size=56" alt="${esc(author)} profile"/>
      <div>
        <strong>${esc(author)}</strong>
        <div class="meta">${authorMap[author]} Posts</div>
      </div>
    </div>
  `).join("");

  // Attach click listener to filter by author (search query)
  document.querySelectorAll("#authorsList .mini-item").forEach(el=>{
    el.addEventListener("click", ()=>{
      qInput.value = el.dataset.author; // Set search query to author name
      page = 1;
      render();
    });
  });
}

/* ---------- Post Interactivity Events ---------- */
function onRead(e){
  const id = Number(e.currentTarget.dataset.id);
  openDetailDrawerForId(id); // Updated call
}

function onLike(e){
  const id = Number(e.currentTarget.dataset.id);
  const p = posts.find(x=>x.id===id);
  if(!p) return;
  p.liked = !p.liked;
  localStorage.setItem(`mb-liked-${id}`, p.liked ? "1" : "");
  // update small UI piece
  const btn = e.currentTarget;
  btn.setAttribute("aria-pressed", String(p.liked));
  btn.querySelector(".count").textContent = p.liked?1:0;
  btn.style.color = p.liked ? 'var(--like-color)' : '#888';
}

function onSave(e){
  const id = Number(e.currentTarget.dataset.id);
  const p = posts.find(x=>x.id===id);
  if(!p) return;
  p.saved = !p.saved;
  localStorage.setItem(`mb-saved-${id}`, p.saved ? "1" : "");
  // update small UI piece
  const btn = e.currentTarget;
  btn.setAttribute("aria-pressed", String(p.saved));
  btn.style.color = p.saved ? 'var(--save-color)' : '#888';
}

/* open detail drawer */
function openDetailDrawerForId(id){
  const p = posts.find(x=>x.id===id);
  if(!p) return;
  drawerImg.src = p.thumb;
  drawerTitle.textContent = p.title;
  drawerText.textContent = p.body;
  drawerTag.textContent = p.tag;
  drawerId.textContent = p.id;
  drawerAuthor.textContent = `By ${p.author}`;
  detailDrawerWrap.setAttribute("aria-hidden","false");
  document.body.style.overflow = "hidden"; // Prevents body scroll when drawer is open
}

/* detail drawer close */
drawerClose.addEventListener("click", closeDetailDrawer);
detailDrawerWrap.addEventListener("click", (e)=>{ 
  // Close only if click is directly on the wrap (the darkened backdrop)
  if(e.target===detailDrawerWrap) { closeDetailDrawer(); } 
});

function closeDetailDrawer() {
  detailDrawerWrap.setAttribute("aria-hidden","true");
  document.body.style.overflow = "";
}

/* pagination */
prevBtn.addEventListener("click", ()=>{ if(page>1){ page--; render(); } });
nextBtn.addEventListener("click", ()=>{ page++; render(); });

/* search form */
searchForm.addEventListener("submit", (ev)=>{
  ev.preventDefault();
  page = 1;
  render();
});

/* category clicks (event delegation on UL) */
cats.addEventListener("click", (ev)=>{
  const li = ev.target.closest("li");
  if(!li) return;
  document.querySelectorAll("#cats li").forEach(x=>x.classList.remove("active"));
  li.classList.add("active");
  activeTag = li.dataset.cat || "all";
  page = 1; render();
});

/* theme toggle (FIXED: saves state to localStorage) */
themeBtn.addEventListener("click", ()=>{
  const isDark = !document.body.classList.contains("dark");
  document.body.classList.toggle("dark", isDark);
  themeBtn.setAttribute("aria-pressed", String(isDark));
  localStorage.setItem("mb-theme", isDark ? "dark" : "light");
});

/* newsletter: dismiss & subscribe */
nbClose.addEventListener("click", ()=>{ nbBanner.style.display="none"; localStorage.setItem("mb-nb-hide","1"); });
if(localStorage.getItem("mb-nb-hide")) nbBanner.style.display="none";

nbSubscribe.addEventListener("click", ()=>{
  const v = (nbEmail.value||"").trim();
  if(!v || !v.includes("@")){ nbEmail.style.border="1px solid #ffcc00"; return; }
  // simple success behavior
  nbBanner.innerHTML = `<div style="padding:12px;color:white">Thanks — we sent confirmation to ${esc(v)}</div>`;
  localStorage.setItem("mb-subscribed", v);
});

/* start */
loadPosts();