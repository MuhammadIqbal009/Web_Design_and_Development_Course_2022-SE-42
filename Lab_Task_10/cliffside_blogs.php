<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
      integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cliffside | Blogs</title>
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#02B578" />
    <link rel="sitemap" type="application/xml" href="/sitemap.xml" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
      content="Cliffside: Honest, expert cybersecurity services for Australian businesses. Assessments, consulting, compliance, and more." />
    <meta name="keywords"
      content="cybersecurity, consulting, compliance, penetration testing, cloud security, Australia, risk management" />
    <meta name="author" content="Cliffside" />
    <meta property="og:title" content="Cliffside Cybersecurity" />
    <meta property="og:description"
      content="Brutally honest cybersecurity for Australian businesses. Get clarity, compliance, and real protection." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/BookConsulatation2.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      media="all" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      media="all" />
    <link href="./Styles/style.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/BookConsulatation2.webp" />
  </head>

  <body>

    <!-- Mobile Sidebar -->
    <?php
    require_once 'mobile_slider.php';
    ?>

    <!-- Single NavBar Display with Dropdown -->
    <?php
    require_once 'header.php';
    ?>

    <!-- Blogs Section -->
    <section class="section-padding">

      <h1 class="text-[50px] font-medium pb-[80px] text-center">
        Cliffside Blog
      </h1>

      <!-- Blogs card container -->
      <div
        class="card-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">

        <!-- Card 1 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/person-doing-ethical-hacking.webp"
              alt="Person doing ethical hacking"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Cybersecurity for Government – A Strategic Approach
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Government agencies carry immense responsibility when it comes to
              safeguarding sensitive
              information...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/two-person_conversating.webp"
              alt="Cloud Security Essentials"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Importance of A Cybersecurity Audit in The Financial Sector
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Financial institutions handle vast amounts of sensitive data from
              personal service details to
              credit card numbers...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 3 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/a-person-using-mobile.webp"
              alt="A person using mobile"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Importance of a Cybersecurity Audit for Businesses
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              There are many benefits of a cyber security audit for businesses.
              In this handy guide from the
              trusted experts...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 4 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/a-person-using-laptop.webp" alt="Incident Response"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Retail Digital Transformation and Cybersecurity – A Guide
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Our world is becoming increasingly interconnected and reliant on
              digital technology, with retail
              businesses...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 5 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/grabing-animated-cloud-in-hand.webp"
              alt="Penetration Testing"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Cyber Security Audit Checklist for Retail – An Expert Guide
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Cybersecurity is a cornerstone of any successful retail business,
              and working through...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 6 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/a-person-entering-his-card-number-in-laptop.webp"
              alt="Security Awareness"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              How to Secure Financial Data with a Cyber Security Strategy
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Effective cyber risk management and security strategies are of
              paramount importance to achieving
              data...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 7 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/a-person-using-laptop.webp"
              alt="Financial Services Security"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Understanding Types of Healthcare Phishing Attacks
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Healthcare organisations in Australia are prime targets for
              cybercriminals, and phishing attacks
              ranking among...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 8 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/grabing-animated-cloud-in-hand.webp"
              alt="Risk Assessment"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Cybersecurity Outsourcing for Small Enterprises in Australia
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Small enterprises in Australia face a myriad range of threats that
              can disrupt operations,
              compromise...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

        <!-- Card 9 -->
        <div
          class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
          <div class="w-full aspect-[16/10] overflow-hidden">
            <img src="assets/a-person-entering-his-card-number-in-laptop.webp"
              alt="Zero Trust Architecture"
              class="w-full h-full object-cover object-center rounded-lg" />
          </div>
          <div class="flex-1 flex flex-col px-1 p-5">
            <h3
              class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
              Cybersecurity Challenges for Small Businesses in Australia
            </h3>
            <p
              class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
              Small businesses are increasingly being targeted by cyber threats,
              with attacks growing in...
            </p>
            <a href="#"
              class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
              Read More
            </a>
          </div>
        </div>

      </div>

      <div class="blogs_navigation">
        <div class="separater mt-12 h-[1px] bg-gray-500"></div>
        <div class="btns flex items-center justify-between pt-8">
          <div class="btn1">
            <a href="/"
              class="flex items-center gap-2 text-gray-300 hover:text-[#02B578] transition-colors">
              <i class="fa fa-chevron-left text-xs"></i>
              <span>Old Post</span>
            </a>
          </div>
          <div class="btn2">
            <a href="/"
              class="flex items-center gap-2 text-gray-400 hover:text-[#02B578] transition-colors">
              <span>Recent Post</span>
              <i class="fa fa-chevron-right text-xs"></i>
            </a>
          </div>
        </div>
      </div>

    </section>

    <!-- Talk to expert CTA Section -->
    <section
      class="relative py-24 md:py-32 flex flex-col items-center justify-center min-h-[420px] overflow-hidden bg-gradient-to-b from-[#02B578] to-[#FFF455]">
      <!-- Background image -->
      <div class="absolute inset-0 bg-no-repeat bg-center bg-cover"
        style="background-image: url('assets/BookConsulatation2.webp'); z-index: 0;"></div>
      <div
        class="relative z-10 flex flex-col items-center justify-center w-full mx-auto px-4 text-center">
        <h2
          class="text-[50px] text-center font-medium text-black mb-6 leading-tight">Discover
          how Cliffside
          Cybersecurity can transform your cybersecurity landscape.
        </h2>
        <p
          class="text-[16px] font-light text-black/80 mb-10 max-w-2xl mx-auto">Connect
          with us today to explore a
          tailored security solution that aligns with your vision.</p>
        <a href="book_a_free_consultation.html"
          class="inline-block bg-black text-white text-lg font-semibold px-14 py-4 rounded-full button-shadow">Talk
          to
          an Expert Today</a>
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