<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frequently Asked Questions - Malga International</title>
  <script src="https://cdn.tailwindcss.com"></script>
   <link rel="shortcut icon" href="assets/img/icons.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #FF6B6B;
      --primary-dark: #E64A4A;
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
      background: #FF6B6B;
    }
    
    .faq-container {
      max-width: 900px;
      margin: 0 auto;
    }
    
    .faq-item {
      background: white;
      border-radius: 12px;
      margin-bottom: 1rem;
      overflow: hidden;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
      transition: var(--transition);
      border: 1px solid #e5e7eb;
    }
    
    .faq-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    }
    
    .faq-question {
      background-color: white;
      padding: 1.5rem;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 600;
      color: var(--dark);
      transition: var(--transition);
    }
    
    .faq-question:hover {
      color: var(--primary);
    }
    
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      background-color: white;
    }
    
    .faq-answer-content {
      padding: 0 1.5rem 1.5rem;
      color: var(--gray);
    }
    
    .faq-item.active .faq-answer {
      max-height: 500px;
    }
    
    .faq-item.active .faq-question {
      color: var(--primary);
      background-color: #fff5f5;
    }
    
    .faq-icon {
      transition: var(--transition);
      color: var(--gray);
      font-size: 1.1rem;
    }
    
    .faq-item.active .faq-icon {
      transform: rotate(180deg);
      color: var(--primary);
    }
    
    .search-box {
      max-width: 600px;
      margin: 0 auto 3rem;
      position: relative;
    }
    
    .search-box input {
      width: 100%;
      padding: 1rem 1.5rem 1rem 3rem;
      border-radius: 50px;
      border: 2px solid #e5e7eb;
      font-size: 1rem;
      transition: var(--transition);
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
    }
    
    .search-box input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.2);
    }
    
    .search-icon {
      position: absolute;
      left: 1.25rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gray);
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
    
    .no-results {
      text-align: center;
      padding: 3rem 1rem;
      color: var(--gray);
      display: none;
    }
  </style>
</head>
<body class="bg-gray-50">
  <?php include 'header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-gradient text-white py-20">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">Frequently Asked Questions</h1>
      <div class="w-24 h-1 bg-white/80 mx-auto mb-6 rounded-full"></div>
      <p class="text-xl text-white/90 max-w-3xl mx-auto mb-8">
        Find answers to common questions about our products, services, and company. 
       
        
      </p>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-16 bg-gray-50" id="faq">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Content -->
        <div class="lg:w-1/2">
          <div class="section-title mb-6">
            <span class="text-[#FF6B6B] font-semibold tracking-wider">FREQUENTLY ASKED QUESTIONS</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
              Questions About Our Himalayan Pink Salt
            </h2>
          </div>
          <p class="text-gray-600 mb-6">
            Malga Inc. is dedicated to delivering the finest Himalayan Pink Salt, sourced directly from the Khewra Salt Mine in Pakistan, ensuring unmatched quality and purity.
          </p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>Sourced from Khewra Salt Mine</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>FDA Registered Partners</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
              <span>100% Pure Himalayan Pink Salt</span>
            </li>
          </ul>
        </div>

        <!-- Right Column - FAQ Accordion -->
        <div class="lg:w-1/2">
          <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="faq-item" data-category="products">
              <div class="faq-question">
                <span>Where is your Himalayan Pink Salt sourced from?</span>
                <i class="fas fa-chevron-down faq-icon"></i>
              </div>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>Our Himalayan Pink Salt is sourced directly from the Khewra Salt Mine in Pakistan's Salt Range, one of the oldest and most renowned salt mines in the world, known for its pure and mineral rich salt.</p>
                </div>
              </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item" data-category="products">
              <div class="faq-question">
                <span>How do you ensure the quality of your salt?</span>
                <i class="fas fa-chevron-down faq-icon"></i>
              </div>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>We implement rigorous quality assurance processes, including testing for purity and mineral content, to ensure our Himalayan Pink Salt meets the highest standards of safety and quality.</p>
                </div>
              </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item" data-category="usage">
              <div class="faq-question">
                <span>How can I use Himalayan Pink Salt in cooking?</span>
                <i class="fas fa-chevron-down faq-icon"></i>
              </div>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>Himalayan Pink Salt can be used for seasoning, grilling, or as a finishing salt. It enhances flavors in dishes, from meats and vegetables to desserts, and can also be used in salt blocks for cooking.</p>
                </div>
              </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item" data-category="ordering">
              <div class="faq-question">
                <span>Are your products available for bulk or wholesale orders?</span>
                <i class="fas fa-chevron-down faq-icon"></i>
              </div>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>Yes, we offer bulk and wholesale options for businesses and retailers. Please contact us for details and pricing tailored to your needs.</p>
                </div>
              </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item" data-category="products">
              <div class="faq-question">
                <span>Do you offer customized packaging or private labeling?</span>
                <i class="fas fa-chevron-down faq-icon"></i>
              </div>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>We offer private labeling services to combine our Himalayan salt products under customers' brand names for further applications.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        
        </div>

       

       


      </div>
      
    
      
      <!-- CTA Section -->
      <section class="relative py-16 md:py-20 bg-gradient-to-br from-[#FF6B6B] to-[#E64A4A] overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
          <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/5 rounded-full"></div>
          <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-white/5 rounded-full"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <div class="inline-block px-5 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium text-white/90 mb-6">
            <i class="fas fa-headset mr-2"></i> 24/7 Customer Support
          </div>
          
          <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">
            Still have <span class="text-yellow-300">questions?</span>
          </h2>
          
          <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
            Can't find what you're looking for? Our dedicated support team is here to help you with any inquiries or special requests.
          </p>
          
          <!-- Contact Info -->
          <div class="flex flex-wrap justify-center gap-8 max-w-5xl mx-auto">
            <div class="bg-white/5 backdrop-blur-sm p-8 rounded-xl border border-white/10 hover:bg-white/10 transition-colors flex-1 min-w-[280px] max-w-md">
              <div class="w-16 h-16 mx-auto mb-5 bg-white/10 rounded-full flex items-center justify-center">
                <i class="fas fa-phone-alt text-white text-2xl"></i>
              </div>
              <h4 class="text-white font-medium text-lg mb-3 text-center">Call us 24/7</h4>
              <a href="tel:(516) 697 4241" class="block text-white/90 hover:text-white text-xl font-semibold text-center transition-colors">(516) 697 4241</a>
            </div>
            
            <div class="bg-white/5 backdrop-blur-sm p-8 rounded-xl border border-white/10 hover:bg-white/10 transition-colors flex-1 min-w-[280px] max-w-md">
              <div class="w-16 h-16 mx-auto mb-5 bg-white/10 rounded-full flex items-center justify-center">
                <i class="fas fa-envelope text-white text-2xl"></i>
              </div>
              <h4 class="text-white font-medium text-lg mb-3 text-center">Email us at</h4>
              <a href="mailto:kamran.ansari@malgainternational.com" class="block text-white/90 hover:text-white text-xl font-semibold text-center transition-colors break-words px-2">kamran.ansari@malgainternational.com</a>
            </div>
          </div>
        </div>
                        
            
            
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Back to Top Button -->
  <div id="backToTop" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const faqItems = document.querySelectorAll('.faq-item');
      const searchInput = document.getElementById('faqSearch');
      const noResults = document.getElementById('noResults');
      const categoryButtons = document.querySelectorAll('.category-btn');
      const backToTopBtn = document.getElementById('backToTop');
      
      // FAQ Accordion Functionality
      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
          // Close all other items
          faqItems.forEach(otherItem => {
            if (otherItem !== item && otherItem.classList.contains('active')) {
              otherItem.classList.remove('active');
            }
          });
          
          // Toggle current item with smooth animation
          item.classList.toggle('active');
          
          // Scroll to the active item (with offset for fixed header)
          if (item.classList.contains('active')) {
            const headerOffset = 100;
            const elementPosition = item.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            
            window.scrollTo({
              top: offsetPosition,
              behavior: 'smooth'
            });
          }
        });
      });
      
      // Search functionality
      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        let hasVisibleItems = false;
        
        faqItems.forEach(item => {
          const question = item.querySelector('.faq-question').textContent.toLowerCase();
          const answer = item.querySelector('.faq-answer-content').textContent.toLowerCase();
          
          if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = '';
            hasVisibleItems = true;
          } else {
            item.style.display = 'none';
          }
        });
        
        // Show/hide no results message
        noResults.style.display = hasVisibleItems ? 'none' : 'block';
      });
      
      // Category filter
      categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
          const category = this.getAttribute('data-category');
          
          // Update active state of buttons
          categoryButtons.forEach(btn => {
            btn.classList.remove('bg-primary', 'text-white', 'hover:bg-primary-dark');
            btn.classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
          });
          this.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
          this.classList.add('bg-primary', 'text-white', 'hover:bg-primary-dark');
          
          // Filter items
          faqItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            
            if (category === 'all' || itemCategory === category) {
              item.style.display = '';
            } else {
              item.style.display = 'none';
            }
          });
          
          // Reset search
          searchInput.value = '';
          noResults.style.display = 'none';
        });
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
      
      // Open first FAQ by default on page load
      if (faqItems.length > 0) {
        faqItems[0].classList.add('active');
      }
    });
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>
