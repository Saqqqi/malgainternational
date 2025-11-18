<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our History Timeline</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <style>
    body {
      background: #ffffff;
    }
    .timeline::-webkit-scrollbar {
      display: none;
    }
    .timeline {
      scroll-behavior: smooth;
    }
    /* Ensure swiper container has enough height */
    .swiper {
      padding: 2rem 0;
    }
    /* Card styling */
    .swiper-slide {
      height: auto;
      display: flex;
      align-items: stretch;
    }
    /* Timeline year color */
    .swiper-slide > div > div:first-child {
      color: #FF6B6B;
    }
    /* Timeline line color */
    .swiper-slide > div > div:nth-child(3) > div:first-child {
      background-color: #FF6B6B;
    }
  </style>
</head>
<body class="text-gray-800">

  <section class="py-20 text-center bg-white min-h-screen">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold mb-4 text-gray-800">Our History</h2>
      <div class="w-20 h-1 bg-orange-500 mx-auto mb-6"></div>
      <p class="max-w-3xl mx-auto text-gray-600 text-lg mb-12 px-4">
        For over a decade, we have been at the forefront of the salt manufacturing industry, consistently delivering quality and innovation. 
        Our journey reflects our commitment to excellence, sustainability, and customer satisfaction. 
        Explore our timeline to see how we've grown and the milestones we've achieved along the way.
      </p>

      <div class="swiper h-full">
        <div class="swiper-wrapper pb-12">
        <!-- Timeline Items -->
      <div class="swiper-slide">
        <div class="flex flex-col items-stretch h-full">
          <div class="text-2xl font-bold">2012</div>
          <div class="text-gray-500 text-sm mb-3">Best Performance</div>
          <div class="relative w-full flex justify-center items-center mb-8">
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#FF6B6B]/30"></div>
            <div class="relative w-6 h-6 bg-white border-4 border-[#FF6B6B] rounded-full z-10"></div>
          </div>
          <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-72 hover:scale-105 transition-transform duration-300">
            <img src="https://via.placeholder.com/300x180" alt="2012" class="w-full h-44 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg text-gray-800 mb-2">Best Performance</h3>
              <p class="text-sm text-gray-600">We did it! President of Pakistan awarded us the best performance in the Salt Industry.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="flex flex-col items-stretch h-full">
          <div class="text-orange-500 text-2xl font-bold">2013</div>
          <div class="text-gray-500 text-sm mb-3">Industrial Expansion</div>
          <div class="relative w-full flex justify-center items-center mb-8">
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#FF6B6B]/30"></div>
            <div class="relative w-6 h-6 bg-white border-4 border-[#FF6B6B] rounded-full z-10"></div>
          </div>
          <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-72 hover:scale-105 transition-transform duration-300">
            <img src="https://via.placeholder.com/300x180" alt="2013" class="w-full h-44 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg text-gray-800 mb-2">Industrial Expansion</h3>
              <p class="text-sm text-gray-600">Our new factory became functional to increase production capacity and efficiency.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="flex flex-col items-stretch h-full">
          <div class="text-orange-500 text-2xl font-bold">2014</div>
          <div class="text-gray-500 text-sm mb-3">Extended Mining – Kalabagh</div>
          <div class="relative w-full flex justify-center items-center mb-8">
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#FF6B6B]/30"></div>
            <div class="relative w-6 h-6 bg-white border-4 border-[#FF6B6B] rounded-full z-10"></div>
          </div>
          <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-72 hover:scale-105 transition-transform duration-300">
            <img src="https://via.placeholder.com/300x180" alt="2014" class="w-full h-44 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg text-gray-800 mb-2">Extended Mining</h3>
              <p class="text-sm text-gray-600">We expanded our mining to Kalabagh — the prime area of Pink Salt — to meet rising global demand.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="flex flex-col items-stretch h-full">
          <div class="text-orange-500 text-2xl font-bold">2020</div>
          <div class="text-gray-500 text-sm mb-3">Extraordinary Partnerships</div>
          <div class="relative w-full flex justify-center items-center mb-8">
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#FF6B6B]/30"></div>
            <div class="relative w-6 h-6 bg-white border-4 border-[#FF6B6B] rounded-full z-10"></div>
          </div>
          <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-72 hover:scale-105 transition-transform duration-300">
            <img src="https://via.placeholder.com/300x180" alt="2020" class="w-full h-44 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg text-gray-800 mb-2">Extraordinary Partnerships</h3>
              <p class="text-sm text-gray-600">Partnered with global brands to expand our reach and strengthen our market presence.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="flex flex-col items-stretch h-full">
          <div class="text-orange-500 text-2xl font-bold">2021</div>
          <div class="text-gray-500 text-sm mb-3">Global Expansion</div>
          <div class="relative w-full flex justify-center items-center mb-8">
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#FF6B6B]/30"></div>
            <div class="relative w-6 h-6 bg-white border-4 border-[#FF6B6B] rounded-full z-10"></div>
          </div>
          <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-72 hover:scale-105 transition-transform duration-300">
            <img src="https://via.placeholder.com/300x180" alt="2021" class="w-full h-44 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg text-gray-800 mb-2">Global Expansion</h3>
              <p class="text-sm text-gray-600">Expanded our operations to 5 new countries, bringing our products to a global audience.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="flex flex-col items-stretch h-full">
          <div class="text-orange-500 text-2xl font-bold">2022</div>
          <div class="text-gray-500 text-sm mb-3">Sustainability Milestone</div>
          <div class="relative w-full flex justify-center items-center mb-8">
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#FF6B6B]/30"></div>
            <div class="relative w-6 h-6 bg-white border-4 border-[#FF6B6B] rounded-full z-10"></div>
          </div>
          <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-72 hover:scale-105 transition-transform duration-300">
            <img src="https://via.placeholder.com/300x180" alt="2022" class="w-full h-44 object-cover">
            <div class="p-4">
              <h3 class="font-semibold text-lg text-gray-800 mb-2">Sustainability Milestone</h3>
              <p class="text-sm text-gray-600">Achieved 100% sustainable production methods across all our facilities.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  </section>

  <script>
    // Initialize Swiper
    document.addEventListener('DOMContentLoaded', function() {
      var swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 4,
            spaceBetween: 30,
          }
        }
      });
    });
  </script>

</body>
</html>
