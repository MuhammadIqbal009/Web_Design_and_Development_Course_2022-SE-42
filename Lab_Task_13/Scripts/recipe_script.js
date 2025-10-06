// Load categories and areas
document.addEventListener("DOMContentLoaded", () => {
  loadCategories();
  loadAreas();
  setupSuggestions();
});

// Show and hide loading animation
function showLoader() {
  const loader = document.getElementById("loader");
  loader.classList.remove("d-none");
  loader.classList.add("show");
}

function hideLoader() {
  const loader = document.getElementById("loader");
  loader.classList.remove("show");
  setTimeout(() => loader.classList.add("d-none"), 400); // wait for fade-out
}


// Fetch meals by ingredient
async function searchMeals() {
  const ingredient = document.getElementById("ingredientInput").value.trim();
  const resultsContainer = document.getElementById("mealResults");
  resultsContainer.innerHTML = "";

  if (!ingredient) {
    resultsContainer.innerHTML = "<p class='text-center text-danger'>⚠ Please enter an ingredient!</p>";
    return;
  }

  try {
    showLoader();
    const res = await fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?i=${ingredient}`);
    const data = await res.json();
    renderMeals(data.meals, resultsContainer);
  } catch {
    resultsContainer.innerHTML = "<p class='text-center text-danger'>Error fetching recipes!</p>";
  }finally {
    hideLoader(); // 🔴 Stop loader
  }
}

// Render cards
function renderMeals(meals, container) {
  container.innerHTML = "";
  if (!meals) {
    container.innerHTML = "<p class='text-center text-warning'>No meals found!</p>";
    return;
  }

  meals.forEach(meal => {
    container.innerHTML += `
      <div class="col-md-4">
        <div class="card meal-card glass-box h-100">
          <img src="${meal.strMealThumb}" class="card-img-top" alt="${meal.strMeal}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">${meal.strMeal}</h5>
            <div class="d-flex justify-content-between mt-auto">
              <button class="btn btn-outline-primary" onclick="getMealDetails(${meal.idMeal})">
                <i class="fa-solid fa-eye"></i> View
              </button>
              <button class="btn btn-outline-danger" onclick="saveMeal('${meal.idMeal}','${meal.strMeal}','${meal.strMealThumb}')">
                <i class="fa-solid fa-heart"></i> Save
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
  });
}

// Meal details
async function getMealDetails(mealId) {
  const res = await fetch(`https://www.themealdb.com/api/json/v1/1/lookup.php?i=${mealId}`);
  const data = await res.json();
  const meal = data.meals[0];

  document.getElementById("mealTitle").innerText = meal.strMeal;
  document.getElementById("mealImage").src = meal.strMealThumb;

  // Ingredients
  const ingredientsList = document.getElementById("mealIngredients");
  ingredientsList.innerHTML = "";
  for (let i = 1; i <= 20; i++) {
    const ingredient = meal[`strIngredient${i}`];
    const measure = meal[`strMeasure${i}`];
    if (ingredient && ingredient.trim() !== "") {
      ingredientsList.innerHTML += `<li class="list-group-item">${ingredient} <span class="text-muted">(${measure})</span></li>`;
    }
  }

  // Instructions
  document.getElementById("mealInstructions").innerText = meal.strInstructions;

  // YouTube link
  const videoDiv = document.getElementById("mealVideo");
  videoDiv.innerHTML = meal.strYoutube
    ? `<a href="${meal.strYoutube}" target="_blank" class="btn btn-danger">
         <i class="fa-brands fa-youtube"></i> Watch Tutorial
       </a>`
    : "";

  new bootstrap.Modal(document.getElementById("mealModal")).show();
}

// Categories
// Categories (Fixed for both dropdown + buttons)
async function loadCategories() {
  const loader = document.getElementById("categoryLoader");
  const container = document.getElementById("categoriesContainer");
  const errorMsg = document.getElementById("categoryError");
  const filterSelect = document.getElementById("categoryFilter"); // dropdown element

  // Initially show loader
  loader.classList.remove("d-none");
  container.classList.add("d-none");
  errorMsg.classList.add("d-none");

  try {
    // Simulate smoother UX on fast networks
    await new Promise(res => setTimeout(res, 800));

    const res = await fetch("https://www.themealdb.com/api/json/v1/1/list.php?c=list", { cache: "no-store" });
    if (!res.ok) throw new Error("Network error");

    const data = await res.json();
    if (!data.meals || data.meals.length === 0) throw new Error("No categories found");

    // ✅ 1. Populate the dropdown filter
    data.meals.forEach(c => {
      const opt = document.createElement("option");
      opt.value = c.strCategory;
      opt.textContent = c.strCategory;
      filterSelect.appendChild(opt);
    });

    // ✅ 2. Render category buttons in the Explore Categories section
    container.innerHTML = data.meals
      .map(c => `
        <button class="category-btn" onclick="getMealsByCategory('${c.strCategory}')">
          ${c.strCategory}
        </button>
      `)
      .join("");

    // ✅ 3. Show categories once loaded
    requestAnimationFrame(() => {
      loader.classList.add("d-none");
      container.classList.remove("d-none");
    });

  } catch (err) {
    console.error("Category loading failed:", err);
    loader.classList.add("d-none");
    errorMsg.classList.remove("d-none");
  }
}


// Areas
async function loadAreas() {
  const res = await fetch("https://www.themealdb.com/api/json/v1/1/list.php?a=list");
  const data = await res.json();
  const filterSelect = document.getElementById("areaFilter");

  data.meals.forEach(area => {
    filterSelect.innerHTML += `<option value="${area.strArea}">${area.strArea}</option>`;
  });
}

// Get meals by category
async function getMealsByCategory(category) {
  try {
    showLoader();
    const res = await fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?c=${category}`);
    const data = await res.json();
    renderMeals(data.meals, document.getElementById("mealResults"));
  } finally {
    hideLoader();
  }
}


// Filters
function filterByCategory() {
  const category = document.getElementById("categoryFilter").value;
  if (category) getMealsByCategory(category);
}

async function filterByArea() {
  try {
    showLoader();
  const area = document.getElementById("areaFilter").value;
  if (!area) return;
  const res = await fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?a=${area}`);
  const data = await res.json();
  renderMeals(data.meals, document.getElementById("mealResults"));
  } finally {
    hideLoader();
  }
}

// Random recipe
async function getRandomMeal() {
  try {
    showLoader();
  const res = await fetch("https://www.themealdb.com/api/json/v1/1/random.php");
  const data = await res.json();
  getMealDetails(data.meals[0].idMeal);
  } finally {
    hideLoader();
  }
}

// Save to local storage
function saveMeal(id, name, thumb) {
  let saved = JSON.parse(localStorage.getItem("savedMeals")) || [];
  if (!saved.some(m => m.id === id)) {
    saved.push({ id, name, thumb });
    localStorage.setItem("savedMeals", JSON.stringify(saved));
    alert("❤ Recipe saved!");
  } else {
    alert("Already saved!");
  }
}

// Suggestions
function setupSuggestions() {
  const input = document.getElementById("ingredientInput");
  const suggestions = document.getElementById("suggestions");
  const ingredients = ["chicken", "beef", "rice", "pasta", "fish", "potato", "onion", "egg"];

  input.addEventListener("input", () => {
    const value = input.value.toLowerCase();
    suggestions.innerHTML = "";
    if (!value) {
      suggestions.classList.add("d-none");
      return;
    }

    const matches = ingredients.filter(item => item.startsWith(value));
    if (matches.length > 0) {
      suggestions.classList.remove("d-none");
      matches.forEach(match => {
        suggestions.innerHTML += `<li class="list-group-item list-group-item-action" onclick="selectSuggestion('${match}')">${match}</li>`;
      });
    } else {
      suggestions.classList.add("d-none");
    }
  });
}

function selectSuggestion(value) {
  document.getElementById("ingredientInput").value = value;
  document.getElementById("suggestions").classList.add("d-none");
}

