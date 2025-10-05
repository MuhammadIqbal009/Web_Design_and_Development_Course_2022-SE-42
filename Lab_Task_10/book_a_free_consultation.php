<!DOCTYPE html>
<html lang="en">

  <head>

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
    <title>Cliffside | Book Consultation</title>
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

    <!-- Consultation details and form Section -->
    <section
      class="consultation gap-10 md:gap-0 grid grid-cols-1 md:grid-cols-2 p-10 md:px-[100px] pt-[80px] pb-[120px]">

      <!-- Consultation Details -->
      <div class="details-container md:pr-[48px]">
        <h2 class="text-[50px] font-medium pb-[30px]">
          Book Your Free Consultation
        </h2>
        <p class="text-[18px] font-light">
          This isn't going to be a sales pitch disguised as a consultation. We
          have only one goal: that is to
          start a genuine conversation about your cybersecurity situation.
        </p>
        <ul
          class="consultation-bullet pt-[10px] ml-[20px] flex flex-col gap-[10px] font-light">
          <li class>Honest assessment of your current security posture</li>
          <li class>Clear identification of your real priorities vs. perceived
            needs</li>
          <li class>Straight talk about what's actually putting you at risk</li>
          <li class>Discussion of whether our approach fits your situation</li>
          <li class>No pressure, no manufactured urgency</li>
        </ul>
      </div>

      <!-- Consultation Form -->
      <div class="form-container">
        <form class="flex flex-col gap-6">

          <!-- Name Fields -->
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-[18px] font-light text-black mb-1">First
                Name</label>
              <input type="text" name="first_name"
                class="w-full border border-black rounded-full px-4 py-2 " />
            </div>
            <div class="flex-1">
              <label class="block text-[18px] font-light text-black mb-1">Last
                Name</label>
              <input type="text" name="last_name"
                class="w-full border border-black rounded-full px-4 py-2" />
            </div>
          </div>

          <!-- Email & Phone Row -->
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-[18px] font-light text-black mb-1">Work
                Email</label>
              <input type="email" name="work_email"
                class="w-full border border-black rounded-full px-4 py-2 " />
            </div>
            <div class="flex-1">
              <label class="block text-[18px] font-light text-black mb-1">Phone
                Number</label>
              <input type="tel" name="phone_number"
                class="w-full border border-black rounded-full px-4 py-2 " />
            </div>
          </div>

          <!-- Full-width Phone Number -->
          <!-- <div>
                        <label class="block text-sm font-normal text-black mb-1 opacity-0 select-none">Phone
                            Number</label>
                        <input type="tel"
                            class="w-full border border-black rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#FFF455] transition"
                            placeholder="Phone Number" />
                    </div> -->

          <!-- Radio Group -->
          <div>
            <label class="block text-[18px] font-light text-black mb-2">What
              describes you best?</label>
            <div class="grid grid-cols-2 gap-y-2 gap-x-4">
              <label
                class="flex items-center gap-2 text-black text-[18px] font-light">
                <input type="radio" name="role" value="business_owner"
                  class="accent-black" />
                Business Owner
              </label>
              <label
                class="flex items-center gap-2 text-black text-[18px] font-light">
                <input type="radio" name="role" value="it_manager"
                  class="accent-black" />
                IT Manager
              </label>
              <label
                class="flex items-center gap-2 text-black text-[18px] font-light">
                <input type="radio" name="role" value="consultant"
                  class="accent-black" />
                Consultant
              </label>
              <label
                class="flex items-center gap-2 text-black text-[18px] font-light">
                <input type="radio" name="role" value="individual"
                  class="accent-black" />
                Individual
              </label>
              <label
                class="flex items-center gap-2 text-black text-[18px] font-light col-span-2">
                <input type="radio" name="role" value="other"
                  class="accent-black" />
                Other
              </label>
            </div>
          </div>

          <!-- Textarea -->
          <div>
            <label class="block text-[18px] font-normal text-black mb-2">What’s
              your biggest cybersecurity
              challenge right now?</label>
            <textarea name="cybersecurity_challenge" rows="3"
              class="w-full border border-black rounded-xl px-4 py-2 resize-none placeholder:text-gray-500"
              placeholder="Share your thoughts..."></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="mt-2 w-fit text-[18px] px-16 rounded-full bg-[#FFF455] hover:bg-[#FFF455]/90 text-black font-medium py-2 transition-all duration-200 shadow-[0_4px_24px_0_rgba(255,244,85,0.45)] focus:outline-none focus:ring-2 focus:ring-[#FFF455]">
            Submit
          </button>
        </form>
      </div>
    </section>

    <!-- Consultation Images Section -->
    <section class="consultation_images section-padding bg-[#F7F7F7]">
      <div class="grid grid-cols-1 md:grid-cols-[1.2fr_0.8fr] gap-10 px-10">
        <!-- First Image -->
        <div class="flex items-center justify-center bg-white">
          <img src="assets/person_consulting_image.webp"
            alt="Person Consulting Image"
            class="w-full h-full object-cover aspect-[1.25/0.8] rounded-none" />
        </div>

        <!-- Second Image -->
        <div class="flex items-center justify-center bg-white">
          <img src="assets/person_consulting_CliffSidelogo.webp"
            alt="CliffSide Logo"
            class="w-full h-full object-cover aspect-[1.25/0.8] rounded-none" />
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