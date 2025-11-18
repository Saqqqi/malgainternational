<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Certifications - Malga International</title>
  <script src="https://cdn.tailwindcss.com"></script>
   <link rel="shortcut icon" href="assets/img/icons.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Modal Styles */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }
    
    .modal-overlay.active {
      opacity: 1;
      visibility: visible;
    }
    
    .certificate-modal {
      background: white;
      border-radius: 8px;
      max-width: 90%;
      max-height: 90vh;
      width: auto;
      overflow: auto;
      position: relative;
      padding: 20px;
    }
    
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }
    
    .close-modal {
      background: none;
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: #666;
    }
    
    .modal-body img {
      max-width: 100%;
      height: auto;
      max-height: 70vh;
      display: block;
      margin: 0 auto;
    }
    
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 99;
    }
    
    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }
    
    :root {
      --primary: #FF6B6B;
      --primary-dark: #E64A4A;
      --primary-light: #FFE5E5;
      --secondary: #4F46E5;
      --dark: #1F2937;
      --light: #F9FAFB;
      --gray: #6B7280;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8fafc;
      color: var(--dark);
      line-height: 1.6;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, #FF6B6B 0%, #E64A4A 100%);
      padding: 3rem 0 2rem;
    }
    
    @media (max-width: 768px) {
      .hero-gradient {
        padding: 2.5rem 0 1.5rem;
      }
    }
    
  
    
    .certificate-card {
      background: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
      transition: var(--transition);
      border: 1px solid #e5e7eb;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    
    .certificate-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .certificate-image {
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      background: #f9fafb;
      border-bottom: 1px solid #f3f4f6;
    }
    
    .certificate-image img {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
      transition: var(--transition);
    }
    
    .certificate-card:hover .certificate-image img {
      transform: scale(1.03);
    }
    
    .certificate-content {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    
    .certificate-badge {
      display: inline-block;
      background: var(--primary-light);
      color: var(--primary);
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.25rem 0.75rem;
      border-radius: 50px;
      margin-bottom: 1rem;
    }
    
    .theme-btn {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
      font-weight: 500;
      cursor: pointer;
      transition: var(--transition);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }
    
    .theme-btn:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(255, 107, 107, 0.3);
    }
    
    .section-title span {
      color: var(--primary);
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      font-size: 0.875rem;
    }
    
    .section-title h2 {
      font-weight: 700;
      color: var(--dark);
      margin-top: 0.5rem;
      line-height: 1.2;
    }
    
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1000;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
    }
    
    .modal-overlay.active {
      opacity: 1;
      visibility: visible;
    }
    
    .certificate-modal {
      background: white;
      border-radius: 16px;
      max-width: 90vw;
      max-height: 90vh;
      width: auto;
      overflow: hidden;
      transform: scale(0.9);
      transition: var(--transition);
    }
    
    .modal-overlay.active .certificate-modal {
      transform: scale(1);
    }
    
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem;
      border-bottom: 1px solid #e5e7eb;
    }
    
    .modal-body {
      padding: 1.5rem;
      max-height: 70vh;
      overflow: auto;
    }
    
    .modal-body img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
    
    .close-modal {
      background: none;
      border: none;
      font-size: 1.5rem;
      color: var(--gray);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .close-modal:hover {
      color: var(--primary);
    }
    
    .back-to-top {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      width: 50px;
      height: 50px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      z-index: 100;
    }
    
    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      background: var(--primary-dark);
      transform: translateY(-3px);
    }
    
    .certificate-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
    }
    
    @media (max-width: 768px) {
      .certificate-grid {
        grid-template-columns: 1fr;
      }
    }
    
    .wow {
      visibility: hidden;
    }
    
    .fadeInUp {
      animation-name: fadeInUp;
      animation-duration: 1s;
      animation-fill-mode: both;
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translate3d(0, 40px, 0);
      }
      to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
      }
    }
  </style>
</head>
<body class="bg-gray-50">
  <!-- Header -->
<?php include 'header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-gradient text-white">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">Our Certifications</h1>
      <div class="w-20 h-1 bg-white/80 mx-auto mb-4 rounded-full"></div>
      <p class="text-lg text-white/90 max-w-3xl mx-auto mb-6">
        Quality & Excellence Certified by Industry Standards. Our commitment to quality is validated by internationally recognized certifications.
      </p>
    </div>
  </section>
<br><br>
  <!-- Certificates Section -->
  <section class="certificates-section " id="certificates">
    <div class="container mx-auto px-4">
      <div class="section-title text-center mb-16">
        <span class="fadeInUp">Our Certifications</span>
        <h2 class="text-3xl md:text-4xl fadeInUp" data-wow-delay=".2s">Quality & Excellence <br> Certified by Industry Standards</h2>
      </div>
      
      <div class="certificate-grid">
        <!-- Certificate 1 -->
        <div class="certificate-card fadeInUp" data-wow-delay=".3s">
          <div class="certificate-image">
            <img src="assets/img/WhatsApp Image 2025-06-18 at 1.48.15 AM.png" alt="ISO 9001:2015 Certification">
          </div>
          <div class="certificate-content">
           
            <h3 class="text-xl font-bold mb-2">ISO 9001:2015</h3>
            <p class="text-gray-600 mb-4 flex-grow">Quality Management System Certification ensuring consistent quality in all our processes and products.</p>
            <button type="button" class="theme-btn view-certificate" data-img="assets/img/WhatsApp Image 2025-06-18 at 1.48.15 AM.png" data-title="ISO 9001:2015 Certification">
              <i class="fa fa-eye"></i> View Certificate
            </button>
          </div>
        </div>
        
        <!-- Certificate 2 -->
        <div class="certificate-card fadeInUp" data-wow-delay=".4s">
          <div class="certificate-image">
            <img src="assets/img/Certificate of halal.png" alt="ISO 22000:2018 Certification">
          </div>
          <div class="certificate-content">
            
            <h3 class="text-xl font-bold mb-2">ISO 22000:2018</h3>
            <p class="text-gray-600 mb-4 flex-grow">Food Safety Management System ensuring the highest standards of food safety and hygiene.</p>
            <button type="button" class="theme-btn view-certificate" data-img="assets/img/Certificate of halal.png" data-title="ISO 22000:2018 Certification">
              <i class="fa fa-eye"></i> View Certificate
            </button>
          </div>
        </div>
        
        <!-- Certificate 3 -->
        <div class="certificate-card fadeInUp" data-wow-delay=".5s">
          <div class="certificate-image">
            <img src="assets/img/HACCP REV.png" alt="HACCP Certification">
          </div>
          <div class="certificate-content">
            
            <h3 class="text-xl font-bold mb-2">HACCP</h3>
            <p class="text-gray-600 mb-4 flex-grow">Hazard Analysis Critical Control Points certification for systematic preventive approach to food safety.</p>
            <button type="button" class="theme-btn view-certificate" data-img="assets/img/HACCP REV.png" data-title="HACCP Certification">
              <i class="fa fa-eye"></i> View Certificate
            </button>
          </div>
        </div>
        
      
      </div>
    </div>
  </section><br><br>

  <!-- Quality Commitment Section -->
  <section class="py-20 relative overflow-hidden bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto text-center">
        <span class="inline-block text-red-500 font-semibold text-sm uppercase tracking-wider mb-3">Our Promise</span>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">Our Commitment to <span class="text-red-600">Quality</span></h2>
        <div class="w-24 h-1 bg-red-500 mx-auto mb-10 rounded-full"></div>
        
        <div class="bg-gray-50 rounded-2xl shadow-sm p-8 md:p-10 mb-16 relative overflow-hidden border-l-4 border-red-500">
          <p class="text-lg md:text-xl text-gray-700 leading-relaxed text-left">
            At Malga International, we are committed to maintaining the highest standards of quality and safety. 
            Our certifications are a testament to our dedication to excellence in every aspect of our operations, 
            from sourcing to production and delivery.
          </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
          <div class="bg-gray-50 p-8 rounded-xl border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
            <div class="w-20 h-20 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <i class="fas fa-award text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">International Standards</h3>
            <p class="text-gray-600 leading-relaxed">Our products meet and exceed international quality and safety standards, ensuring premium quality in every batch.</p>
          </div>
          
          <div class="bg-gray-50 p-8 rounded-xl border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
            <div class="w-20 h-20 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <i class="fas fa-check-circle text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Regular Audits</h3>
            <p class="text-gray-600 leading-relaxed">We undergo rigorous audits to maintain our certifications and continuously improve our processes.</p>
          </div>
          
          <div class="bg-gray-50 p-8 rounded-xl border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
            <div class="w-20 h-20 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <i class="fas fa-users text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-800">Customer Trust</h3>
            <p class="text-gray-600 leading-relaxed">Building lasting relationships through consistent quality and reliable service you can trust.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Certificate Modal -->
  <div class="modal-overlay" id="certificateModal">
    <div class="certificate-modal">
      <div class="modal-header">
        <h3 id="modalTitle" class="text-xl font-bold">Certificate</h3>
        <button class="close-modal" id="closeModal">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="Certificate">
      </div>
    </div>
  </div>

  <!-- Back to Top Button -->
  <div id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Certificate Modal Functionality
      const modalOverlay = document.getElementById('certificateModal');
      const modalImage = document.getElementById('modalImage');
      const modalTitle = document.getElementById('modalTitle');
      const closeModal = document.getElementById('closeModal');
      const viewCertificateButtons = document.querySelectorAll('.view-certificate');
      const backToTopBtn = document.getElementById('backToTop');
      
      // Debug: Log elements to console
      console.log('Modal Elements:', {
        modalOverlay,
        modalImage,
        modalTitle,
        closeModal,
        viewCertificateButtons
      });
      
      // Open modal when certificate button is clicked
      viewCertificateButtons.forEach(button => {
        button.addEventListener('click', function(e) {
          e.preventDefault();
          const imgSrc = this.getAttribute('data-img');
          const title = this.getAttribute('data-title');
          
          console.log('Opening modal with:', { imgSrc, title });
          
          // Check if image exists
          const img = new Image();
          img.onload = function() {
            modalImage.src = imgSrc;
            modalTitle.textContent = title;
            modalOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
          };
          img.onerror = function() {
            console.error('Failed to load image:', imgSrc);
            alert('Error: Image could not be loaded. Please try again later.');
          };
          img.src = imgSrc;
        });
      });
      
      // Close modal when close button is clicked
      closeModal.addEventListener('click', function() {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
      });
      
      // Close modal when clicking outside the modal or pressing Escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
          modalOverlay.classList.remove('active');
          document.body.style.overflow = 'auto';
        }
      });
      
      // Close modal when clicking outside the modal content
      modalOverlay.addEventListener('click', function(e) {
        if (e.target === modalOverlay) {
          modalOverlay.classList.remove('active');
          document.body.style.overflow = 'auto';
        }
      });
      
      // Back to top button
      window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
          backToTopBtn.classList.add('visible');
        } else {
          backToTopBtn.classList.remove('visible');
        }
      });
      
      backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
      
      // Simple animation on scroll
      const animateOnScroll = function() {
        const elements = document.querySelectorAll('.fadeInUp');
        
        elements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementVisible = 150;
          
          if (elementTop < window.innerHeight - elementVisible) {
            element.style.visibility = 'visible';
            
            // Apply delay if specified
            const delay = element.getAttribute('data-wow-delay');
            if (delay) {
              element.style.animationDelay = delay;
            }
          }
        });
      };
      
      // Initial check and then on scroll
      animateOnScroll();
      window.addEventListener('scroll', animateOnScroll);
    });
  </script>

<?php include 'footer.php'; ?>
</body>
</html>