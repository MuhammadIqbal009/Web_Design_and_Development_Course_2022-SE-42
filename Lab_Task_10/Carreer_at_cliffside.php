<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cliffside | Career</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./Styles/style.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/BookConsulatation2.webp" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      media="all" />
    <link rel="stylesheet"
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

    <!-- Careers At Cliffside Cybersecurity Section -->
    <section class="w-full bg-white py-8 md:py-10">
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12">
        <!-- Left: Text Content -->
        <div
          class="flex-1 w-full mb-10 md:mb-0 order-2 md:order-1 flex flex-col justify-center">
          <h1
            class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-6 sm:mb-8 leading-tight text-left">Careers
            At Cliffside<br>Cybersecurity</h1>
          <p
            class="text-gray-700 text-base sm:text-lg mb-6 sm:mb-8 max-w-xl text-left">We’re
            always scouting for emerging and seasoned talent to enhance our
            team’s strength in protecting the digital world.</p>
          <div class="mb-6 sm:mb-8 text-left">
            <p class="text-gray-900 mb-4">If you:</p>
            <ul class="space-y-4">
              <li class="flex items-start gap-3">
                <img src="assets/bullet.webp" alt="bullet"
                  class="h-5 w-5 sm:h-6 sm:w-6 mt-1" />
                <span class="text-gray-900 text-sm sm:text-base">have a passion
                  and constructive curiosity for cybersecurity,</span>
              </li>
              <li class="flex items-start gap-3">
                <img src="assets/bullet.webp" alt="bullet"
                  class="h-5 w-5 sm:h-6 sm:w-6 mt-1" />
                <span class="text-gray-900 text-sm sm:text-base">take ownership
                  in the trust bestowed to us by our clients, and;</span>
              </li>
              <li class="flex items-start gap-3">
                <img src="assets/bullet.webp" alt="bullet"
                  class="h-5 w-5 sm:h-6 sm:w-6 mt-1" />
                <span class="text-gray-900 text-sm sm:text-base">a drive to
                  excel in this dynamic field</span>
              </li>
            </ul>
            <p class="text-gray-700 mt-4 sm:mt-6">... please regularly review
              our current vacancies below!</p>
          </div>
        </div>
        <!-- Right: Featured Image -->
        <div
          class="flex-1 w-full flex justify-center items-center order-1 md:order-2">
          <img src="assets/CarreerAtCliffside.webp" alt="Careers At Cliffside"
            class="w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl object-cover" />
        </div>
      </div>
    </section>

    <!-- Jobs Section -->
    <section class="w-full bg-white py-8 md:py-10">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2
          class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-10 sm:mb-16">Join
          us in shaping a secure digital future</h2>
        <div class="space-y-0 divide-y divide-gray-200">
          <!-- Job Card 1 -->
          <div
            class="flex flex-col sm:flex-row items-center justify-between py-6 sm:py-10">
            <span class="text-base sm:text-xl font-semibold text-black"
              style="font-family: 'var(--main-font)', sans-serif;">Senior
              Security Architect</span>
            <button
              class="mt-4 sm:mt-0 bg-[#FFF455] text-black font-semibold px-8 sm:px-12 py-3 rounded-full shadow-[0_0_24px_0_rgba(255,244,85,0.7)] transition-all text-base sm:text-lg">Apply
              Now</button>
          </div>
          <!-- Job Card 2 -->
          <div
            class="flex flex-col sm:flex-row items-center justify-between py-6 sm:py-10">
            <span class="text-base sm:text-xl font-semibold text-black"
              style="font-family: 'var(--main-font)', sans-serif;">Senior
              Security Architect</span>
            <button
              class="mt-4 sm:mt-0 bg-[#FFF455] text-black font-semibold px-8 sm:px-12 py-3 rounded-full shadow-[0_0_24px_0_rgba(255,244,85,0.7)] transition-all text-base sm:text-lg">Apply
              Now</button>
          </div>
          <!-- Job Card 3 -->
          <div
            class="flex flex-col sm:flex-row items-center justify-between py-6 sm:py-10">
            <span class="text-base sm:text-xl font-semibold text-black"
              style="font-family: 'var(--main-font)', sans-serif;">Senior
              Security Architect</span>
            <button
              class="mt-4 sm:mt-0 bg-[#FFF455] text-black font-semibold px-8 sm:px-12 py-3 rounded-full shadow-[0_0_24px_0_rgba(255,244,85,0.7)] transition-all text-base sm:text-lg">Apply
              Now</button>
          </div>
        </div>
        <div class="flex justify-center mt-10 sm:mt-20">
          <button
            class="border border-gray-900 text-black font-semibold px-8 sm:px-10 py-3 rounded-full transition-all text-base sm:text-lg"
            style="font-family: 'var(--main-font)', sans-serif;">View All
            Jobs</button>
        </div>
      </div>
    </section>

    <!-- Why Choose Cliffside Section -->
      <section class="bg-white py-16 md:py-24">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Why Choose Cliffside Security?
          </h2>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
          <!-- Card 1: Cybersecurity That Ignores Business Reality -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/DynamicWork.webp"
                alt="Dynamic Work Environment icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Dynamic Work Environment
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Experience the thrill of working in a fast-paced and ever-evolving
              industry.
            </p>
          </div>

          <!-- Card 2:     Creative Solutions -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/CreativeIdeas.webp"
                alt="Creative Ideas Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Creative Solutions
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Join a team that encourages innovation and creativity to tackle
              complex security challenges.
            </p>
          </div>

          <!-- Card 3: Diversity and Inclusion -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/Diversity&inclusion.webp"
                alt="Diversity & inclusion icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Diversity and Inclusion
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Embrace diversity and collaborate with colleagues from diverse
              backgrounds and perspectives.
            </div>

            <!-- Card 4:Friendly Culture -->
            <div
              class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
              <div class="rounded-lg p-4 w-fit mb-6">
                <img
                  src="assets/FriendlyCulture.webp"
                  alt="Friendly Culture Icon"
                  class="w-12 h-12" />
              </div>
              <h3 class="text-xl font-[500] text-gray-900 mb-4">
                Friendly Culture
              </h3>
              <p class="text-gray-500 text-sm font-light leading-relaxed">
                Enjoy a supportive and inclusive work culture where teamwork and
                mutual respect are valued.
              </p>
            </div>

            <!-- Card 5: Nice Work Environment -->
            <div
              class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
              <div class="rounded-lg p-4 w-fit mb-6">
                <img
                  src="assets/NiceWork.webp"
                  alt="Nice Work Environment Icon"
                  class="w-12 h-12" />
              </div>
              <h3 class="text-xl font-[500] text-gray-900 mb-4">
                Nice Work Environment
              </h3>
              <p class="text-gray-500 text-sm font-light leading-relaxed">
                Work in modern offices with state-of-the-art facilities and
                amenities.
              </p>
            </div>

            <!-- Card 6:Professional Growth -->
            <div
              class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
              <div class="rounded-lg p-4 w-fit mb-6">
                <img
                  src="assets/ProfessionalGrowth.webp"
                  alt="Professional Growth Icon"
                  class="w-12 h-12" />
              </div>
              <h3 class="text-xl font-[500] text-gray-900 mb-4">
                Professional Growth
              </h3>
              <p class="text-gray-500 text-sm font-light leading-relaxed">
                Access opportunities for professional development and career
                advancement.
              </p>
            </div>

            <!-- Card 7: Impactful Work -->
            <div
              class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
              <div class="rounded-lg p-4 w-fit mb-6">
                <img
                  src="assets/ImpactfulWork.webp"
                  alt="Impactful Work Icon"
                  class="w-12 h-12" />
              </div>
              <h3 class="text-xl font-[500] text-gray-900 mb-4">
                Impactful Work
              </h3>
              <p class="text-gray-500 text-sm font-light leading-relaxed">
                Make a meaningful impact by contributing to the security and
                resilience of businesses worldwide.
              </p>
            </div>

            <!-- Card 8: Work-Life Balance -->
            <div
              class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
              <div class="rounded-lg p-4 w-fit mb-6">
                <img
                  src="assets/Work-life-Blance.webp"
                  alt="Work Life Balance Icon"
                  class="w-12 h-12" />
              </div>
              <h3 class="text-xl font-[500] text-gray-900 mb-4">
                Work-Life Balance
              </h3>
              <p class="text-gray-500 text-sm font-light leading-relaxed">
                Maintain a healthy work-life balance with flexible work
                arrangements and wellness programs.
              </p>
            </div>
          </div>
        </div>
      </section>

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
