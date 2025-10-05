<nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-40">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-[100px]">
          <!-- Left Section: Logo -->
          <div class="flex-shrink-0 flex items-center gap-4">
            <img
              src="assets/Group.webp"
              alt="Cliffside Icon"
              class="h-[48px] w-auto object-contain"
              loading="lazy"
            />
            <a href="index.html" class="block">
              <img
                src="assets/CliffsideLogo.webp"
                alt="Cliffside Logo"
                class="h-[25px] w-auto object-contain"
                loading="lazy"
              />
            </a>
          </div>

          <!-- Center Section: Desktop Navigation -->
          <div
            class="hidden md:flex absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
          >
            <div class="flex items-baseline space-x-8">
              <a
                href="OurWork.html"
                class="text-black hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 font-[var(--main-font)]"
              >
                How We Work
              </a>
              <!-- Services Dropdown -->
              <div class="relative group">
                <button
                  class="text-black hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 flex items-center font-[var(--main-font)]"
                >
                  Services
                  <svg
                    class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>
                <div
                  class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-200"
                >
                  <div class="py-1">
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Security Assessment</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Penetration Testing</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Compliance Consulting</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Incident Response</a
                    >
                  </div>
                </div>
              </div>
              <!-- Industries Dropdown -->
              <div class="relative group">
                <button
                  class="text-black hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 flex items-center font-[var(--main-font)]"
                >
                  Industries
                  <svg
                    class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>
                <div
                  class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-200"
                >
                  <div class="py-1">
                    <a
                      href="Carreer_at_cliffside.html"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Carreer at CliffSide</a
                    >
                    <a
                      href="our_Success_stories.html"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Our Success Stories</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Technology</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Manufacturing</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Retail</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Section: CTA and Mobile Menu Button -->
          <div class="flex items-center">
            <!-- Desktop CTA -->
            <div class="hidden md:block ml-4">
              <button
                class="bg-transparent border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white px-6 py-2 rounded-full text-sm font-medium transition-all duration-200"
              >
                <a href="book_a_free_consultation.html">Book Free Consultation</a>
              </button>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
              <button
                id="mobile-sidebar-toggle"
                class="p-2 rounded-lg text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none transition-colors"
                aria-label="Toggle mobile menu"
              >
                <svg
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>