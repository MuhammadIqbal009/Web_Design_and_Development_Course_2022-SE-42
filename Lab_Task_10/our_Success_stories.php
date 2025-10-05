<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cliffside | Success Stories</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./Styles/style.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/BookConsulatation2.webp" />
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      media="all" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      media="all" />
  </head>
  <body class="bg-white">

    <!-- Mobile Sidebar -->
    <?php
    require_once 'mobile_slider.php';
    ?>

    <!-- Single NavBar Display with Dropdown -->
    <?php
    require_once 'header.php';
    ?>

    <!-- Hero Section -->
    <section
      class="relative w-full min-h-[320px] md:min-h-[400px] flex flex-col justify-center items-center text-center"
      style="
        background: url('assets/OurSucesssHero.webp') center center / cover
          no-repeat;
      ">
      <div
        class="relative z-10 w-full flex flex-col items-center justify-center py-10 sm:py-16 md:py-24">
        <h1
          class="text-white text-2xl sm:text-3xl md:text-5xl font-bold mb-4 sm:mb-6 drop-shadow-lg leading-tight max-w-2xl sm:max-w-3xl md:max-w-4xl mx-auto">
          Trusted by companies<br class="md:hidden" />
          across Australia
        </h1>
        <div
          class="flex flex-wrap justify-center items-center gap-8 sm:gap-14 md:gap-20 mt-6 sm:mt-8 w-full px-2 sm:px-6">
          <!-- Responsive company logos -->
          <img
            src="assets/amp.webp"
            alt="AMP"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
          <img
            src="assets/arm_hub.webp"
            alt="ARM HUB"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
          <img
            src="assets/great_soutern_bank.webp"
            alt="Great Southern Bank"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
          <img
            src="assets/hourigan.webp"
            alt="Housman International"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
          <img
            src="assets/wesFarmer.webp"
            alt="Wesfarmers"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
          <img
            src="assets/NSW.webp"
            alt="NSW Government"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
          <img
            src="assets/WesternAustraliaUni.webp"
            alt="Western Sydney"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain" />
        </div>
      </div>
    </section>

    <!-- Cybersecurity success story-1 Section with contact button -->
    <section class="w-full bg-white py-12 md:py-20">
      <div
        class="max-w-6xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16">
        <!-- Left: Text Content -->
        <div
          class="flex-1 w-full mb-10 md:mb-0 order-1 md:order-none flex flex-col">
          <div class="mb-4">
            <span
              class="inline-block bg-[#E6FAF2] text-[#02B578] px-5 py-2 rounded-full text-sm font-medium">Business
              Name Success Story</span>
          </div>
          <h2
            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
            Lorem Ipsum<br />Headline Placeholder
          </h2>
          <p class="text-gray-500 text-base sm:text-lg mb-4 max-w-lg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
          <p class="text-gray-500 text-sm sm:text-base mb-8 max-w-lg">
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
          <!-- Image: mobile only, after paragraphs, before cards/button -->
          <div class="block md:hidden mb-8">
            <img
              src="assets/cybersecurity.webp"
              alt="Cybersecurity"
              class="w-full max-w-xs sm:max-w-sm rounded-xl shadow-lg object-cover mx-auto" />
          </div>
          <div class="flex flex-col sm:flex-row gap-4 mb-8">
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center">
              <div class="text-2xl font-bold text-gray-900 mb-1">100%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Compliance lorem ipsum
              </div>
            </div>
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center">
              <div class="text-2xl font-bold text-gray-900 mb-1">75%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Reduced Cost lorem ipsum
              </div>
            </div>
          </div>
          <div class="mb-8">
            <a
              href="book_a_free_consultation.html"
              class="inline-block bg-[#FFF455] hover:bg-[#FFE066] text-black font-semibold px-10 py-2 rounded-full shadow-lg transition-all duration-300">Contact
              Us</a>
          </div>
        </div>
        <!-- Right: Image (desktop only) -->
        <div
          class="flex-1 w-full flex justify-center items-center order-2 md:order-none hidden md:flex">
          <img
            src="assets/cybersecurity.webp"
            alt="Cybersecurity"
            class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-xl shadow-lg object-cover" />
        </div>
      </div>
    </section>

    <!-- Testimonials Slider Section -->
    <?php
    require_once 'Testimonials_Slider.php';
    ?>

    <!-- Cybersecurity success story-2 Section with contact button -->
    <section class="w-full bg-white py-12 md:py-20">
      <div
        class="max-w-6xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16">
        <!-- left part: Image (desktop only) -->
        <div
          class="flex-1 w-full flex justify-center items-center order-2 md:order-none hidden md:flex">
          <img
            src="assets/cybericon2.webp"
            alt="Cybersecurity"
            class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-xl shadow-lg object-cover" />
        </div>
        <!-- right part: Text Content -->
        <div
          class="flex-1 w-full mb-10 md:mb-0 order-1 md:order-none flex flex-col">
          <div class="mb-4">
            <span
              class="inline-block bg-[#E6FAF2] text-[#02B578] px-5 py-2 rounded-full text-sm font-medium">Business
              Name Success Story</span>
          </div>
          <h2
            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
            Lorem Ipsum<br />Headline Placeholder
          </h2>
          <p class="text-gray-500 text-base sm:text-lg mb-4 max-w-lg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
          <p class="text-gray-500 text-sm sm:text-base mb-8 max-w-lg">
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
          <!-- Image: mobile only, after paragraphs, before cards/button -->
          <div class="block md:hidden mb-8">
            <img
              src="assets/cybericon2.webp"
              alt="Cybersecurity"
              class="w-full max-w-xs sm:max-w-sm rounded-xl shadow-lg object-cover mx-auto" />
          </div>
          <div class="flex flex-col sm:flex-row gap-4 mb-8">
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center">
              <div class="text-2xl font-bold text-gray-900 mb-1">100%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Compliance lorem ipsum
              </div>
            </div>
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center">
              <div class="text-2xl font-bold text-gray-900 mb-1">75%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Reduced Cost lorem ipsum
              </div>
            </div>
          </div>
          <div class="mb-8">
            <a
              href="book_a_free_consultation.html"
              class="inline-block bg-[#FFF455] hover:bg-[#FFE066] text-black font-semibold px-10 py-2 rounded-full shadow-lg transition-all duration-300">Contact
              Us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Slider Section -->
    <?php
    require_once 'Testimonials_Slider.php';
    ?>

    <!-- Footer -->
    <?php
    require_once 'footer.php';
    ?>

    <!-- jQuery + Owl Carousel (CDN) -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      defer></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      defer></script>
    <script src="./Scripts/script.js" defer></script>

  </body>
</html>
