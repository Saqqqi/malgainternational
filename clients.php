<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salt Production & Global Delivery | Industrial Manufacturing</title>
  <script src="https://cdn.tailwindcss.com"></script>
   <link rel="shortcut icon" href="assets/img/icons.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #FF6B6B;
      --primary-light: #FFE6E6;
      --primary-dark: #E04F4F;
    }
    
    body {
      font-family: 'Inter', sans-serif;
    }
    
    .step-number {
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-weight: 700;
      margin-right: 16px;
      background-color: var(--primary-color);
      color: white;
      box-shadow: 0 4px 8px rgba(255, 107, 107, 0.3);
    }
    
    .process-line {
      position: absolute;
      left: 25px;
      top: 0;
      bottom: 0;
      width: 3px;
      background-color: var(--primary-color);
      z-index: 0;
    }
    
    .process-step {
      position: relative;
      z-index: 1;
    }
    
    .image-gallery {
      display: grid;
      gap: 20px;
    }
    
    .gallery-1 {
      grid-template-columns: 1fr;
    }
    
    .gallery-2 {
      grid-template-columns: repeat(2, 1fr);
    }
    
    .gallery-3 {
      grid-template-columns: repeat(3, 1fr);
    }
    
    @media (max-width: 768px) {
      .gallery-2, .gallery-3 {
        grid-template-columns: 1fr;
      }
    }
    
    .image-container {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      transition: all 0.4s ease;
      height: 320px;
    }
    
    .image-container:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    }
    
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    
    .image-container:hover img {
      transform: scale(1.08);
    }
    
    .image-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
      color: white;
      padding: 16px 20px;
      font-size: 1rem;
      font-weight: 500;
    }
    
    .info-box {
      background: linear-gradient(to right, var(--primary-light), #FFF);
      border-left: 5px solid var(--primary-color);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    .process-card {
      background: linear-gradient(to bottom, var(--primary-light), #FFF);
      border: 1px solid #FFD1D1;
      transition: all 0.3s ease;
    }
    
    .process-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(255, 107, 107, 0.1);
    }
    
    .section-title {
      position: relative;
      display: inline-block;
      margin-bottom: 10px;
    }
    
    .section-title:after {
      display: none;
    }
    
    .floating-action {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: var(--primary-color);
      color: white;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 6px 15px rgba(255, 107, 107, 0.4);
      cursor: pointer;
      z-index: 100;
      transition: all 0.3s ease;
    }
    
    .floating-action:hover {
      transform: scale(1.1);
      box-shadow: 0 8px 20px rgba(255, 107, 107, 0.5);
    }
    
    .nav-dots {
      position: fixed;
      right: 30px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 15px;
      z-index: 90;
    }
    
    .nav-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: rgba(255, 107, 107, 0.3);
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .nav-dot.active {
      background-color: var(--primary-color);
      transform: scale(1.3);
    }
    
    .progress-bar {
      position: fixed;
      top: 0;
      left: 0;
      height: 4px;
      background-color: var(--primary-color);
      z-index: 100;
      transition: width 0.3s ease;
    }
    
    /* Enhanced Country Card Styles */
    .country-card {
      transition: all 0.4s ease;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      background: white;
      position: relative;
    }
    
    .country-card:hover {
      transform: translateY(-12px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .country-flag {
      height: 180px;
      background-size: cover;
      background-position: center;
      position: relative;
    }
    
    .country-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.4));
    }
    
    .country-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: rgba(255, 255, 255, 0.9);
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      color: var(--primary-color);
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .country-stats {
      display: flex;
      justify-content: space-between;
      padding: 15px 0;
      border-top: 1px solid #f0f0f0;
      border-bottom: 1px solid #f0f0f0;
      margin: 15px 0;
    }
    
    .stat-item {
      text-align: center;
      flex: 1;
    }
    
    .stat-value {
      font-weight: 700;
      font-size: 1.3rem;
      color: var(--primary-color);
    }
    
    .stat-label {
      font-size: 0.8rem;
      color: #666;
      margin-top: 4px;
    }
    
    .satisfaction-bar {
      height: 6px;
      background-color: #e0e0e0;
      border-radius: 3px;
      overflow: hidden;
      margin-top: 8px;
    }
    
    .satisfaction-fill {
      height: 100%;
      background-color: var(--primary-color);
      border-radius: 3px;
    }
    
    .view-details-btn {
      width: 100%;
      background: var(--primary-color);
      color: white;
      border: none;
      padding: 14px;
      border-radius: 10px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
    }
    
    .view-details-btn:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(255, 107, 107, 0.4);
    }
    
    .global-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }
    
    .global-stat-card {
      background: white;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: transform 0.3s ease;
    }
    
    .global-stat-card:hover {
      transform: translateY(-5px);
    }
    
    .global-stat-value {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary-color);
      margin: 10px 0;
    }
    
    .global-stat-label {
      color: #666;
      font-size: 0.9rem;
    }
    
    .countries-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }
    
    @media (max-width: 768px) {
      .countries-grid {
        grid-template-columns: 1fr;
      }
      
      .global-stats {
        grid-template-columns: 1fr;
      }
    }
    
    .delivery-step {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      position: relative;
    }
    
    .delivery-step:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }
    
    .delivery-step:not(:last-child):after {
      content: '';
      position: absolute;
      bottom: -30px;
      left: 50%;
      transform: translateX(-50%);
      width: 2px;
      height: 30px;
      background-color: var(--primary-color);
    }
    
    .delivery-icon {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background-color: var(--primary-light);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      color: var(--primary-color);
      font-size: 28px;
    }
  </style>
</head>
<body class="bg-gray-50">
  <!-- Progress Bar -->
  <div class="progress-bar" id="progressBar"></div>

  <!-- Floating Action Button -->
  <div class="floating-action" id="scrollToTop">
    <i class="fas fa-arrow-up text-xl"></i>
  </div>

  <!-- Navigation Dots -->
  <div class="nav-dots" id="navDots">
    <!-- Dots will be added by JavaScript -->
  </div>

 <?php include 'header.php'; ?>

  <!-- Compact Hero Banner -->
  <section class="relative bg-gradient-to-br from-[#FF6B6B] via-[#FF8E8E] to-[#FF5252] text-white py-12 md:py-16 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 z-0 opacity-10">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"2\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-4 left-10 w-6 h-6 bg-white/20 rounded-full animate-pulse"></div>
    <div class="absolute bottom-8 right-16 w-4 h-4 bg-white/30 rounded-full animate-bounce"></div>
    <div class="absolute top-12 right-20 w-3 h-3 bg-white/25 rounded-full animate-pulse delay-300"></div>
    
    <!-- Main Content -->
    <div class="relative z-10 max-w-6xl mx-auto px-4">
      <div class="text-center">
        <!-- Main Heading -->
        <h1 class="text-3xl md:text-4xl text-white  font-bold leading-tight mb-3 drop-shadow-lg">
          Premium Salt Solutions 
          <span class="block text-yellow-100 mt-1 bg-white/10 px-4 py-1 rounded-full inline-block">
            Worldwide Excellence
          </span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-white/90 text-base md:text-lg max-w-2xl mx-auto mb-6 leading-relaxed">
          Delivering exceptional quality to over 9 countries with unmatched reliability
        </p>
        
        <!-- Stats Bar -->
        <div class="flex flex-wrap justify-center gap-4 md:gap-8 mt-6">
          <div class="text-center">
            <div class="text-xl md:text-2xl font-bold text-yellow-100">9</div>
            <div class="text-white/80 text-sm">Countries Served</div>
          </div>
          
          
       
         
        </div>
        
     
      </div>
    </div>
    
    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0">
      <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-8">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="fill-current text-white/20"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="fill-current text-white/10"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="fill-current text-white"></path>
      </svg>
    </div>
  </section>

  <!-- Main Content -->
  <main class="max-w-6xl mx-auto px-4 py-16">
    <!-- Enhanced Countries Section -->
    <div class="bg-white rounded-2xl shadow-xl p-8 mb-16 transform transition-all duration-300 hover:shadow-2xl" id="countries">
      <h2 class="text-3xl font-bold mb-2 text-gray-800 section-title">Global Distribution Network</h2>
      <p class="text-gray-600 mb-8 text-lg">We proudly serve customers across the globe with our premium quality salt products. Our efficient logistics ensure timely delivery to all major markets.</p>
      
      <!-- Global Stats -->
      <div class="global-stats">
        <div class="global-stat-card">
          <div class="global-stat-icon text-3xl text-[#FF6B6B] mb-2">
            <i class="fas fa-globe-americas"></i>
          </div>
          <div class="global-stat-value">9 </div>
          <div class="global-stat-label">Countries Served</div>
        </div>
       
      </div>
      
      <!-- Countries Grid -->
     
<div class="countries-grid">

  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/cn.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Strategic</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">China</h3>
      <p class="text-gray-600 mb-4">Major industrial partner with extensive distribution network across provinces.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value flex items-center justify-center">339 
            <!-- <img src="https://flagcdn.com/16x12/cn.png" alt="China Flag" class="ml-2 w-6 h-4 rounded-sm shadow"> -->
          </div>
          <div class="stat-label"> Containers</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Country 1: USA -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/us.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Top Market</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">USA</h3>
      <p class="text-gray-600 mb-4">Our largest export market with distribution centers in 5 major cities.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value flex items-center justify-center">122 
            <!-- <img src="https://flagcdn.com/16x12/us.png" alt="USA Flag" class="ml-2 w-6 h-4 rounded-sm shadow"> -->
          </div>
          <div class="stat-label"> Containers</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Country 2: China -->

 <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/tw.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Premium</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">Taiwan</h3>
      <p class="text-gray-600 mb-4">High quality food grade salt exports with advanced processing facilities.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value flex items-center justify-center">156 
            <!-- <img src="https://flagcdn.com/16x12/tw.png" alt="Taiwan Flag" class="ml-2 w-6 h-4 rounded-sm shadow"> -->
          </div>
          <div class="stat-label"> Containers</div>
        </div>
      </div>
    </div>
  </div>


  <!-- Country 3: Turkey -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/tr.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Gateway</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">Turkey</h3>
      <p class="text-gray-600 mb-4">Strategic gateway between Europe and Asia with modern port facilities.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value">12</div>
          <div class="stat-label">Containers</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Country 4: Germany -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/de.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Industrial</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">Germany</h3>
      <p class="text-gray-600 mb-4">Industrial salt for chemical processing and manufacturing sectors.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value">13</div>
          <div class="stat-label">Containers</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Country 5: Taiwan -->
 
  <!-- Country 6: Thailand -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/th.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Growing</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">Thailand</h3>
      <p class="text-gray-600 mb-4">Expanding market with focus on food processing and industrial applications.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value flex items-center justify-center">14 
             <!-- <img src="https://flagcdn.com/16x12/th.png" alt="Thailand Flag" class="ml-2 w-6 h-4 rounded-sm shadow"> -->
          </div>
          <div class="stat-label"> Containers</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Country 7: Greece -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/gr.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Mediterranean</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">Greece</h3>
      <p class="text-gray-600 mb-4">Supplying key coastal ports with food and industrial grade salt.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value">3</div>
          <div class="stat-label">Containers</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Country 8: South Korea -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/kr.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Dynamic</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">South Korea</h3>
      <p class="text-gray-600 mb-4">Strong demand for industrial and processed salt varieties.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value flex items-center justify-center">7 
            <!-- <img src="https://flagcdn.com/16x12/kr.png" alt="Korea Flag" class="ml-2 w-6 h-4 rounded-sm shadow"> -->
          </div>
          <div class="stat-label"> Containers</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Country 9: Japan -->
  <div class="country-card">
    <div class="country-flag" style="background-image: url('https://flagcdn.com/w320/jp.png');">
      <div class="country-overlay"></div>
      <!-- <div class="country-badge">Tech-Driven</div> -->
    </div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2 text-gray-800">Japan</h3>
      <p class="text-gray-600 mb-4">High purity salt for food and technology manufacturing sectors.</p>
      <div class="country-stats flex justify-center">
        <div class="stat-item text-center">
          <div class="stat-value flex items-center justify-center">27 
            <!-- <img src="https://flagcdn.com/16x12/jp.png" alt="Japan Flag" class="ml-2 w-6 h-4 rounded-sm shadow"> -->
          </div>
          <div class="stat-label"> Containers</div>
        </div>
      </div>
    </div>
  </div>
</div>

<br><br><br>
    <!-- Delivery Process Section -->
    <div class="bg-white rounded-2xl shadow-xl p-8 mb-16 transform transition-all duration-300 hover:shadow-2xl" id="delivery">
      <h2 class="text-3xl font-bold mb-6 text-gray-800 section-title">End to End Delivery Process</h2>
      <p class="text-gray-600 mb-8 text-lg">Our streamlined delivery process ensures your salt reaches you efficiently, from order placement to final delivery.</p>
      
      <div class="relative">
        <!-- Process Line -->
        <div class="process-line hidden md:block"></div>
        
        <!-- Step 1: Order Placement -->
        <div class="process-step delivery-step mb-16" id="deliveryStep1">
          <div class="flex items-center mb-6">
            <div class="step-number">1</div>
            <h2 class="text-2xl font-bold text-gray-800">Order Placement & Confirmation</h2>
          </div>
          
          <div class="grid md:grid-cols-2 gap-8">
            <div>
              <div class="delivery-icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <h3 class="text-xl font-semibold mb-4 text-gray-700 text-center">Order Process</h3>
              <ul class="space-y-3 text-gray-600">
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Customer places order through our portal or sales representative</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Order details verified and confirmed within 24 hours</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Production schedule adjusted based on order requirements</div>
                </li>
              </ul>
            </div>
            <div class="image-container">
              <img src="assets/img/young-lady-use-cellphone-order-online-shopping-product-paying-bills-with-banking-app-with-transaction-successful-stay-house-quarantine-activity-fun-activity-coronavirus-prevention.jpg" alt="Order Processing">
              <div class="image-caption">Digital order management system</div>
            </div>
          </div>
        </div>

        <!-- Step 2: Logistics & Shipping -->
        <div class="process-step delivery-step mb-16" id="deliveryStep2">
          <div class="flex items-center mb-6">
            <div class="step-number">2</div>
            <h2 class="text-2xl font-bold text-gray-800">Logistics & Shipping</h2>
          </div>
          
          <div class="grid md:grid-cols-2 gap-8">
            <div>
              <div class="delivery-icon">
                <i class="fas fa-shipping-fast"></i>
              </div>
              <h3 class="text-xl font-semibold mb-4 text-gray-700 text-center">Shipping Methods</h3>
              <ul class="space-y-3 text-gray-600">
                <li class="flex items-start">
                  <i class="fas fa-ship text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Bulk shipping via container vessels for international orders</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-truck text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Land transportation for regional distribution</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-train text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Rail transport for cost effective long distance shipping</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-plane text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Expedited air freight for urgent orders</div>
                </li>
              </ul>
            </div>
            <div class="image-container">
              <img src="assets/img/men-warehouse-working.jpg" alt="Shipping Logistics">
              <div class="image-caption">Global logistics network</div>
            </div>
          </div>
        </div>

        <!-- Step 4: Delivery & Receipt -->
        <div class="process-step delivery-step" id="deliveryStep4">
          <div class="flex items-center mb-6">
            <div class="step-number">3</div>
            <h2 class="text-2xl font-bold text-gray-800">Final Delivery & Client Receipt</h2>
          </div>
          
          <div class="grid md:grid-cols-2 gap-8">
            <div class="image-container">
              <img src="assets/img/woman-signing-good-received.jpg" alt="Final Delivery">
              <div class="image-caption">On time delivery to client facilities</div>
            </div>
            <div>
              <div class="delivery-icon">
                <i class="fas fa-clipboard-check"></i>
              </div>
              <h3 class="text-xl font-semibold mb-4 text-gray-700 text-center">Delivery Confirmation</h3>
              <ul class="space-y-3 text-gray-600">
                <li class="flex items-start">
                  <i class="fas fa-map-marker-alt text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Real time tracking until final destination</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-clipboard-list text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Delivery confirmation with digital signature</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-box-open text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Quality verification upon receipt</div>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-star text-[#FF6B6B] mt-1 mr-3"></i>
                  <div>Customer satisfaction follow up</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


  </main>
 <?php include 'footer.php'; ?>
  <script>
    // Scroll to top functionality
    document.getElementById('scrollToTop').addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Progress bar
    window.addEventListener('scroll', function() {
      const winHeight = window.innerHeight;
      const docHeight = document.documentElement.scrollHeight;
      const scrollTop = window.pageYOffset;
      const scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
      document.getElementById('progressBar').style.width = scrollPercent + '%';
    });

    // Create navigation dots
    const sections = document.querySelectorAll('.bg-white.rounded-2xl.shadow-xl');
    const navDots = document.getElementById('navDots');
    
    sections.forEach((section, index) => {
      const dot = document.createElement('div');
      dot.className = 'nav-dot';
      dot.setAttribute('data-section', index);
      dot.addEventListener('click', function() {
        section.scrollIntoView({ behavior: 'smooth' });
      });
      navDots.appendChild(dot);
    });

    // Update active dot on scroll
    window.addEventListener('scroll', function() {
      const scrollPosition = window.scrollY + window.innerHeight / 2;
      
      sections.forEach((section, index) => {
        const dot = navDots.children[index];
        const sectionTop = section.offsetTop;
        const sectionBottom = sectionTop + section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    });
  </script>
</body>
</html>