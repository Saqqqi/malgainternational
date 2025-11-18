<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salt Production Process | Industrial Manufacturing</title>
  <script src="https://cdn.tailwindcss.com"></script>
     <link rel="shortcut icon" href="assets/img/icons.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #FF6B6B;
      --primary-light: #FFE6E6;
      --primary-dark: #E04F4F;
      --header-height: 64px;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background: #f8fafc;
    }
    
    .process-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2.5rem;
      padding: 2rem;
      max-width: 1400px;
      margin: 0 auto;
    }
    
    .process-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      height: 100%;
      cursor: pointer;
    }
    
    .process-card:hover {
      transform: translateY(-12px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .process-image {
      height: 250px;
      overflow: hidden;
      position: relative;
    }
    
    .process-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .process-card:hover .process-image img {
      transform: scale(1.15);
    }
    
    .process-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 40%, rgba(0,0,0,0) 60%);
      display: flex;
      align-items: flex-end;
      padding: 2rem;
    }
    
    .process-number {
      position: absolute;
      top: 1.5rem;
      left: 1.5rem;
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 8px 15px rgba(255, 107, 107, 0.3);
      z-index: 2;
    }
    
    .process-title {
      color: white;
      font-size: 1.75rem;
      font-weight: 700;
      margin: 0;
      text-shadow: 0 2px 8px rgba(0,0,0,0.4);
      line-height: 1.2;
    }
    
    .process-content {
      padding: 1.5rem;
    }
    
    .process-description {
      color: #4b5563;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-top: 0.5rem;
    }
    
    .process-icon {
      position: absolute;
      bottom: 1.5rem;
      right: 1.5rem;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.2rem;
      backdrop-filter: blur(5px);
      transition: all 0.3s ease;
    }
    
    .process-card:hover .process-icon {
      background: white;
      color: var(--primary-color);
      transform: scale(1.1);
    }
    
    .hero-banner {
      width: 100%;
      height: 70vh;
      min-height: 500px;
      overflow: hidden;
      position: relative;
      margin-top: var(--header-height);
    }
    
    .hero-banner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
         display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 0 5%;
    }
    
    .hero-title {
      color: white;
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
      max-width: 600px;
      line-height: 1.1;
    }
    
    .hero-subtitle {
      color: rgba(255, 255, 255, 0.9);
      font-size: 1.25rem;
      max-width: 500px;
      line-height: 1.6;
    }
    
    @media (max-width: 768px) {
      .process-grid {
        grid-template-columns: 1fr;
        padding: 1rem;
        gap: 2rem;
      }
      
      .process-card {
        max-width: 100%;
      }
      
      .hero-banner {
        height: 50vh;
        min-height: 400px;
      }
      
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
    }
    
    .section-title {
      position: relative;
      display: inline-block;
      margin-bottom: 3rem;
    }
    
    .section-title:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60%;
      height: 4px;
      background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
      border-radius: 2px;
    }
    
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-gray-50">
 <?php include 'header.php'; ?>
  <!-- Hero Banner Section -->
  <div class="hero-banner">
    <img src="assets/img/Hero-Banner.svg" alt="Salt Production Process">
    <div class="hero-overlay">
         </div>
  </div>

  <!-- Process Grid Section -->
  <section class="py-16 md:py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center max-w-4xl mx-auto mb-20">
        <span class="inline-block text-sm font-semibold text-[#E04F4F] mb-3">OUR PROCESS</span>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">Crafting Excellence in Every Grain</h1>
        <div class="w-24 h-1 bg-gradient-to-r from-[#FF6B6B] to-[#E04F4F] mx-auto my-6"></div>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">Discover the meticulous journey of our premium salt, from the heart of the earth to your table</p>
      </div>
      
      <!-- Process Steps Container -->
      <div class="max-w-6xl mx-auto space-y-20">
        <!-- Step 1: Mining / Extraction -->
        <div class="process-step group bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
          <div class="md:flex h-full">
            <div class="p-10 flex-1">
              <div class="flex items-center gap-6 mb-8">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-[#FF6B6B] to-[#E04F4F] flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">1</div>
                <h2 class="text-3xl font-bold text-gray-900 bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Mining / Extraction</h2>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/mining.png" alt="Salt Mining" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/khewra-salt-mine-9.jpg" alt="Mining Process" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
              </div>
                     </div>
          </div>
        </div>

        <!-- Step 2: Stock / Storage -->
        <div class="process-step group bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
          <div class="md:flex h-full">
            <div class="p-10 flex-1">
              <div class="flex items-center gap-6 mb-8">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-[#4F6BFF] to-[#4F9FFF] flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">2</div>
                <h2 class="text-3xl font-bold text-gray-900 bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Stock / Storage</h2>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/stock2.png" alt="Stock Area" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
               <div class="overflow-hidden rounded-xl h-64 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/stock1.jpg" alt="Stock Area" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
              </div>
                </div>
          </div>
        </div>

        <!-- Step 3: Transportation -->
        <div class="process-step group bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
          <div class="md:flex h-full">
            <div class="p-10 flex-1">
              <div class="flex items-center gap-6 mb-8">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-[#6B4FFF] to-[#9F4FFF] flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">3</div>
                <h2 class="text-3xl font-bold text-gray-900 bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Loading / Unloading</h2>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/Transportation.png" alt="Loading Salt" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/Transportation2.png" alt="Transporting Salt" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Step 5: Grinding & Refining -->
        <div class="process-step group bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
          <div class="md:flex h-full">
            <div class="p-10 flex-1">
              <div class="flex items-center gap-6 mb-8">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-[#FFB74D] to-[#FF9800] flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">4</div>
                <h2 class="text-3xl font-bold text-gray-900 bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Grinding & Refining</h2>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
               <div class="overflow-hidden rounded-xl h-64 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/granding1jfif.jfif" alt="Grinding Process" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
              <div class="overflow-hidden rounded-xl h-64 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/Hc41846e8ff2345beba006d264645be43l.png" alt="Grinding Process" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <!-- Step 6: Packaging -->
        <div class="process-step group bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
          <div class="md:flex h-full">
            <div class="p-10 flex-1">
              <div class="flex items-center gap-6 mb-8">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-[#9C27B0] to-[#E91E63] flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">5</div>
                <h2 class="text-3xl font-bold text-gray-900 bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Packaging</h2>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/50KG Pouch (2).png" alt="Packaging Line" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl h-80 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center shadow-inner">
                  <div class="text-center p-6">
                    <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                    <span class="text-gray-400 font-medium">Final Packaging</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 6: Factory Labels -->
        <div class="process-step group bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
          <div class="md:flex h-full">
            <div class="p-10 flex-1">
              <div class="flex items-center gap-6 mb-8">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-[#4CAF50] to-[#2E7D32] flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">6</div>
                <h2 class="text-3xl font-bold text-gray-900 bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Factory Labels</h2>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/factorylable1.jpeg" alt="Factory Label 1" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl h-80 shadow-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-1">
                  <img src="assets/img/factorylable2.jpeg" alt="Factory Label 2" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                </div>
              </div>
              <p class="mt-6 text-gray-600 leading-relaxed">Our factory labels ensure traceability and quality assurance, meeting international standards for product identification and safety.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <?php include 'footer.php'; ?>
  
  <script>
    // Scroll animation
    document.addEventListener('DOMContentLoaded', () => {
      const fadeElements = document.querySelectorAll('.fade-in');
      
      const fadeInOnScroll = () => {
        fadeElements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementVisible = 150;
          
          if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('visible');
          }
        });
      };
      
      // Initial check
      fadeInOnScroll();
      
      // Check on scroll
      window.addEventListener('scroll', fadeInOnScroll);
    });
  </script>
</body>
</html>

