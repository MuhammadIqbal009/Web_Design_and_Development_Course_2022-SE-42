<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#02B578" />
    <link rel="sitemap" type="application/xml" href="/sitemap.xml" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Cliffside: Honest, expert cybersecurity services for Australian businesses. Assessments, consulting, compliance, and more." />
    <meta
      name="keywords"
      content="cybersecurity, consulting, compliance, penetration testing, cloud security, Australia, risk management" />
    <meta name="author" content="Cliffside" />
    <meta property="og:title" content="Cliffside Cybersecurity" />
    <meta
      property="og:description"
      content="Brutally honest cybersecurity for Australian businesses. Get clarity, compliance, and real protection." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/BookConsulatation2.webp" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Preload critical images for performance -->
    <link rel="preload" as="image" href="assets/BookConsulatation2.webp" />
    <link rel="preload" as="image" href="assets/trustedBack.webp" />
    <link rel="preload" as="image" href="assets/Trustedbg-2.webp" />
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      media="all" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      media="all" />
    <link href="./Styles/style.css" rel="Stylesheet" />

    <title>CliffSide | Home</title>
    <!-- Favicon for branding -->
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

    <!-- Hero Section -->
    <section class="bg-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1
            class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 tracking-widest">
            Brutally Honest Cybersecurity
          </h1>
          <p class="text-md text-gray-500 mx-[1170px] mx-auto tracking-widest">
            Cliffside is where clarity meets risk. We cut through industry noise
            to deliver the high levels of cybersecurity that you actually need.
          </p>
          <p
            class="text-md text-gray-500 mx-[1170px] mx-auto mb-8 tracking-widest">
            Comprehensive assessment, honest recommendations, and cybersecurity
            guidance from experts who deeply understand Australian business
            challenges.
          </p>
          <button
            class="bg-[#FFF455] hover:bg-yellow-300 text-gray-900 font-semibold px-8 py-3 rounded-[300px] transition-all duration-300 shadow-2xl hover:shadow-2xl shadow-[#FFF455]/60 hover:shadow-[#FFF455]-300/70">
            <a href="book_a_free_consultation.html">Free Consultation</a>
          </button>
        </div>
      </div>
    </section>

    <!-- Image Cards Section -->
    <section
      class="w-full flex justify-center items-center bg-white pt-2 sm:pt-8 md:pt-12 pb-12">
      <div class="w-full flex justify-center px-2 sm:px-6">
        <img
          src="assets/herosectionframe.webp"
          alt="Cybersecurity visual grid"
          class="w-full h-full max-w-5xl md:max-w-6xl h-[220px] sm:h-[300px] md:h-auto shadow-2xl border border-gray-200 object-contain md:object-cover"
          style="aspect-ratio: 2.25/1; background: #fff"
          loading="lazy" />
      </div>
    </section>

    <!-- Our Cybersecurity Services Section (two-halves layout) -->
    <section class="relative overflow-hidden text-white">
      <!-- Upper half: standards on trustedBack background -->
      <div
        class="relative bg-no-repeat bg-center bg-cover"
        style="background-image: url('assets/trustedBack.webp')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
          <div
            class="flex flex-wrap justify-center items-center gap-6 md:gap-40 lg:gap-26 opacity-100">
            <img
              src="assets/ISO.webp"
              alt="ISO 27001 Logo"
              class="h-16 md:h-24 lg:h-28 w-auto"
              width="112"
              height="64"
              loading="lazy" />
            <img
              src="assets/NIST.webp"
              alt="NIST CSF 2.0 Logo"
              class="h-16 md:h-24 lg:h-28 w-auto"
              width="112"
              height="64"
              loading="lazy" />
            <img
              src="assets/APRA.webp"
              alt="APRA CPS 234 Logo"
              class="h-16 md:h-24 lg:h-28 w-auto"
              width="112"
              height="64"
              loading="lazy" />
            <img
              src="assets/Essential8.webp"
              alt="ACSC Essential 8 Logo"
              class="h-16 md:h-24 lg:h-28 w-auto"
              width="112"
              height="64"
              loading="lazy" />
          </div>
        </div>
        <!-- Bottom vignette to blend into lower half -->
        <div
          class="pointer-events-none absolute inset-x-0 bottom-0 h-24 md:h-32"
          style="
            background: linear-gradient(
              to bottom,
              rgba(0, 0, 0, 0) 0%,
              rgba(0, 0, 0, 0.65) 70%,
              rgba(0, 0, 0, 0.95) 100%
            );
          "></div>
      </div>

      <!-- Lower half: heading + cards on Trustedbg image -->
      <div
        class="relative bg-no-repeat bg-center bg-cover"
        style="background-image: url('assets/Trustedbg-2.webp')">
        <!-- optional subtle green glow -->
        <div
          class="pointer-events-none absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] md:w-[1000px] md:h-[1000px] rounded-full blur-3xl opacity-50"
          style="
            background: radial-gradient(
              ellipse at center,
              rgba(16, 185, 129, 0.45) 0%,
              rgba(0, 0, 0, 0) 60%
            );
          "></div>
        <!-- Top vignette to blend from upper half -->
        <div
          class="pointer-events-none absolute inset-x-0 top-0 h-24 md:h-32"
          style="
            background: linear-gradient(
              to bottom,
              rgba(0, 0, 0, 0.95) 0%,
              rgba(0, 0, 0, 0.7) 40%,
              rgba(0, 0, 0, 0) 100%
            );
          "></div>
        <div
          class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
          <div class="text-center">
            <h2
              class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-wide">
              Our Cybersecurity Services
            </h2>
          </div>

          <div
            class="mt-10 md:mt-14 grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Left column -->
            <div class="space-y-6">
              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                <div
                  class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                  <img
                    src="assets/CyberSecurityAdvisory.webp"
                    alt="Advisory"
                    class="w-6 h-6" />
                </div>
                <div>
                  <h3 class="text-base md:text-lg font-semibold">
                    Cybersecurity Advisory & Consultancy
                  </h3>
                  <p class="text-sm text-gray-200/80 mt-1 max-w-sm">
                    Honest advice about what your business actually needs.
                  </p>
                </div>
              </div>

              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                <div
                  class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                  <img
                    src="assets/SecuirtyArchitecture.webp"
                    alt="Security Architecture"
                    class="w-6 h-6" />
                </div>
                <div>
                  <h3 class="text-base md:text-lg font-semibold">
                    Security Architecture Services
                  </h3>
                  <p class="text-sm text-gray-200/80 mt-1 max-w-sm">
                    Design security systems that work for your specific
                    environment.
                  </p>
                </div>
              </div>

              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                <div
                  class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                  <img
                    src="assets/cloudSecuirty.webp"
                    alt="Cloud Security"
                    class="w-6 h-6" />
                </div>
                <div>
                  <h3 class="text-base md:text-lg font-semibold">
                    Cloud Security
                  </h3>
                  <p class="text-sm text-gray-200/80 mt-1 max-w-sm">
                    Secure your cloud infrastructure and data properly.
                  </p>
                </div>
              </div>
            </div>

            <!-- Center spacer on large screens -->
            <div class="hidden lg:block"></div>

            <!-- Right column -->
            <div class="space-y-6">
              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                <div
                  class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                  <img
                    src="assets/Compilance.webp"
                    alt="Compliance and Risk"
                    class="w-6 h-6" />
                </div>
                <div>
                  <h3 class="text-base md:text-lg font-semibold">
                    Compliance and Risk Management
                  </h3>
                  <p class="text-sm text-gray-200/80 mt-1 max-w-sm">
                    Meet regulatory requirements without wasting money on
                    unnecessary extras.
                  </p>
                </div>
              </div>

              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                <div
                  class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                  <img
                    src="assets/peneterationTesting.webp"
                    alt="Penetration Testing"
                    class="w-6 h-6" />
                </div>
                <div>
                  <h3 class="text-base md:text-lg font-semibold">
                    Penetration Testing & Assurance
                  </h3>
                  <p class="text-sm text-gray-200/80 mt-1 max-w-sm">
                    Find real security weaknesses before attackers do.
                  </p>
                </div>
              </div>

              <div
                class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                <div
                  class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                  <img
                    src="assets/securityAwareness.webp"
                    alt="Security Awareness"
                    class="w-6 h-6" />
                </div>
                <div>
                  <h3 class="text-base md:text-lg font-semibold">
                    Security Awareness
                  </h3>
                  <p class="text-sm text-gray-200/80 mt-1 max-w-sm">
                    Train your people to recognise and avoid cyber threats.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Approach Section -->
    <section class="bg-white py-16 md:py-24">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Area -->
        <div class="text-center mb-16">
          <!-- Tagline -->
          <div
            class="inline-block bg-green-100 text-[#02B578] px-4 py-2 rounded-full text-sm font-light mb-6 tracking-widest">
            Real Solutions, Clear Communication, Lasting Partnerships
          </div>

          <!-- Main Heading -->
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Our Approach
          </h2>

          <!-- Description -->
          <p
            class="text-md text-gray-400 max-w-4xl mx-auto font-light mb-8 leading-relaxed">
            Every environment is different, and every risk carries its own
            context. That's why we take the time to assess before advising. We
            help you understand what's really going on, what matters most, and
            where to focus, then deliver practical, fit-for-purpose guidance
            that supports your business goals.
          </p>

          <!-- CTA Buttons -->
          <div
            class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <button
              class="bg-[#FFF455] hover:bg-[#FFF455] text-gray-900 font-semibold px-8 py-3 rounded-[300px] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 shadow-[#FFF455]/60 hover:shadow-[#FFF455]-300/70">
              Learn More
            </button>
            <button
              class="bg-white border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
              Sign Up
            </button>
          </div>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
          <!-- Assessment First Card -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/assessment.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Assessment First, Always
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Before offering any guidance, we take the time to assess. This
              ensures that the direction we go will always reflect your context,
              and never a generic formula.
            </p>
            <a
              href="#"
              class="inline-flex items-center text-green-600 hover:text-green-700 font-medium transition-colors duration-200 group mt-3">
              Explore
              <svg
                class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>

          <!-- Partnership Integration Card -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/partnership.webp"
                alt="Partnership Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Partnership Integration
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              We become part of your team rather than replacing them. We empower
              your existing staff instead of telling you everything you do
              wrong.
            </p>
            <a
              href="#"
              class="inline-flex items-center text-green-600 hover:text-green-700 font-medium transition-colors duration-200 group mt-3">
              Explore
              <svg
                class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>

          <!-- Expert Consultants Card -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/consultant.webp"
                alt="Expert Consultant Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Expert Consultants
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              We don't just know how to secure systems. We know how to align
              security with real-world goals, pressures, and decision-making.
            </p>
            <a
              href="#"
              class="inline-flex items-center text-green-600 hover:text-green-700 font-medium transition-colors duration-200 group mt-3">
              Explore
              <svg
                class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Slider Section -->
    <?php
    require_once 'Testimonials_Slider.php';
    ?>

    <!-- Solving Real Problems Section -->
    <section class="bg-white py-16 md:py-24">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Solving Real Problems with Honest Expertise
          </h2>
        </div>

        <!-- Problem Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
          <!-- Card 1: Cybersecurity That Ignores Business Reality -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/CyberSecurityReality.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Cybersecurity That Ignores Business Reality
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Too many security programmes operate in isolation from business
              objectives. We align your cybersecurity strategy with actual
              business outcomes, ensuring every security investment drives
              measurable value.
            </p>
          </div>

          <!-- Card 2: Overwhelming Compliance Burden -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/OverwhelmingCompilance.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Overwhelming Compliance Burden
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Regulatory requirements feel endless and contradictory. We help
              you navigate complex compliance landscapes efficiently against
              critical industry compliance standards such as ISO 27001, PCI DSS,
              and APRA CPS 234.
            </p>
          </div>

          <!-- Card 3: Strategic Confusion Around Security Priorities -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/StrategicConfusion.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Strategic Confusion Around Security Priorities
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Without clear direction, security becomes a collection of
              disconnected tools and policies. We establish strategic clarity
              that guides decision-making and ensures every security effort
              supports broader organisational goals.
            </p>
          </div>

          <!-- Card 4: Security Investment Plateaus -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/SecurityInvestment.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Security Investment Plateaus
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Many organisations hit a wall after initial security investments,
              unsure where to focus next. We provide clear roadmaps for security
              maturity that build on previous efforts rather than starting from
              scratch with each new initiative.
            </p>
          </div>

          <!-- Card 5: Wasteful Security Spending -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/WasteFulSecuritySpend.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Wasteful Security Spending
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Security budgets often fund the wrong priorities or duplicate
              existing capabilities. We identify where your money should
              actually go, sometimes recommending less expensive solutions when
              they better address your real needs.
            </p>
          </div>

          <!-- Card 6: Tool Sprawl and Budget Drain -->
          <div
            class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="rounded-lg p-4 w-fit mb-6">
              <img
                src="assets/Toolsprawl.webp"
                alt="Assessment Icon"
                class="w-12 h-12" />
            </div>
            <h3 class="text-xl font-[500] text-gray-900 mb-4">
              Tool Sprawl and Budget Drain
            </h3>
            <p class="text-gray-500 text-sm font-light leading-relaxed">
              Multiple security tools that don't integrate create operational
              headaches and budget bottlenecks. We help rationalise your
              security stack, focusing on solutions that work together
              effectively rather than adding complexity.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Book Consultation Section -->
    <section
      class="bg-black text-white py-16 md:py-24 relative overflow-hidden font-[var(--main-font)]">
      <!-- Background with lighthouse graphic -->
      <div
        class="absolute inset-0 bg-no-repeat bg-center bg-cover"
        style="background-image: url('assets/BookConsulatationBg.webp')"></div>

      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl">
          <!-- Tagline -->
          <div
            class="inline-block bg-[#02B578]/20 text-[#02B578] px-4 py-2 rounded-lg text-sm font-medium mb-6">
            Comprehensive Cybersecurity Assessment
          </div>

          <!-- Main Heading -->
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6">
            Start With What You Actually Need
          </h2>

          <!-- Description -->
          <p class="text-gray-300 text-lg leading-relaxed mb-8">
            The Cliffside Lighthouse assessment provides a comprehensive
            evaluation of your current cybersecurity posture, identifying real
            risks and opportunities for improvement. We focus on what matters
            most to your business, not generic checklists.
          </p>

          <!-- Bullet Points -->
          <div class="space-y-10 mb-10">
            <h3 class="text-xl font-semibold">What you get:</h3>
            <ul class="space-y-3">
              <li class="flex items-start gap-3">
                <div
                  class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-gray-300">Honest evaluation of your actual
                  cybersecurity needs</span>
              </li>
              <li class="flex items-start gap-3">
                <div
                  class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-gray-300">Prioritised roadmap of genuine
                  security requirements</span>
              </li>
              <li class="flex items-start gap-3">
                <div
                  class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-gray-300">Real recommendations of what's right
                  for your business</span>
              </li>
              <li class="flex items-start gap-3">
                <div
                  class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-gray-300">Transferable report you can use with
                  any provider</span>
              </li>
            </ul>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4">
            <button
              class="bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
              <a href="book_a_free_consultation.html">Book Free Consultation</a>
            </button>
            <button
              class="bg-transparent border border-white text-white hover:bg-white hover:text-black font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
              Learn More
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Book Consultation Section - Part 2 -->
    <section
      class="relative overflow-hidden py-16 md:py-24 bg-no-repeat bg-center bg-cover"
      style="background-image: url('assets/BookConsulatation2.webp')">
      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
          <!-- Main Heading -->
          <h2
            class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 font-[var(--main-font)]">
            Ready for Cybersecurity That's Actually Practical?
          </h2>

          <!-- Sub-description -->
          <p
            class="text-gray-700 text-lg md:text-xl mb-8 font-[var(--main-font)]">
            Contact us for honest expertise from people who genuinely want you
            to succeed.
          </p>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button
              class="bg-black hover:bg-gray-800 text-white font-semibold px-10 py-3 rounded-[300px] transition-all duration-300 font-[var(--main-font)]">
              <a href="book_a_free_consultation.html">Book Free Consultation</a>
            </button>
            <button
              class="bg-transparent border border-black text-black hover:bg-gray-50 font-semibold px-10 py-3 rounded-[300px] transition-all duration-300 font-[var(--main-font)]">
              Learn More
            </button>
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
