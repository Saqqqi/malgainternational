<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Himalayan Salt Products - Malga International</title>
     <link rel="shortcut icon" href="assets/img/icons.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #FF6B6B;
            --primary-dark: #E64A4A;
            --primary-light: #FFE5E5;
            --dark: #1F2937;
            --light: #F9FAFB;
            --gray: #6B7280;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
            overflow-x: hidden;
        }

        .hero-products {
            background-color: #FF6B6B;
            color: white;
            padding: 6rem 0;
            margin-bottom: 3rem;
            position: relative;
        }

        .hero-products::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.2) 0%, rgba(230, 74, 74, 0.2) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-products h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-products p {
            font-size: 1.25rem;
            max-width: 600px;
            margin: 0 auto;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary);
            transform: scaleX(0);
            transition: var(--transition);
        }

        .product-card:hover::before {
            transform: scaleX(1);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .product-image-container {
            position: relative;
            height: 300px; /* Fixed height for all product images */
            overflow: hidden;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .product-image {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: var(--transition);
        }
        
        /* Ensure all product cards have the same height */
        .product-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover .product-image {
            transform: scale(1.08);
        }

        .product-content {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--dark);
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .product-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
            flex-grow: 1;
            line-height: 1.6;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.875rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            width: 100%;
            margin-top: auto;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-primary:hover::after {
            left: 100%;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
            color: white;
        }

        .section-padding {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title span {
            color: var(--primary);
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-size: 0.875rem;
            display: block;
            margin-bottom: 0.75rem;
        }

        .section-title h2 {
            font-weight: 800;
            color: var(--dark);
            font-size: 2.5rem;
            line-height: 1.2;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        .product-features {
            margin: 1.5rem 0;
            padding: 0;
            list-style: none;
        }

        .product-features li {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            color: var(--gray);
        }

        .product-features li i {
            color: var(--primary);
            margin-right: 0.75rem;
            font-size: 0.875rem;
        }

        .features-section {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .features-section:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .feature-box {
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            border-radius: 12px;
        }

        .feature-box:hover {
            background: #fff;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: rgba(255, 107, 107, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.75rem;
            transition: all 0.3s ease;
        }

        .feature-box:hover .feature-icon {
            background: var(--primary);
            color: white;
            transform: scale(1.05);
        }

        .feature-box h4 {
            font-weight: 700;
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .feature-box p {
            color: var(--gray);
            line-height: 1.6;
            transition: all 0.3s ease;
        }

        .cta-section {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            border-radius: 16px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 62, 80, 0.15);
        }

        .cta-section .bg-pattern {
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 15px 15px;
            opacity: 0.6;
        }

        .cta-section h3 {
            position: relative;
            z-index: 2;
        }

        .cta-section .btn-light {
            background: white;
            color: #2c3e50;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .cta-section .btn-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: #fff;
        }

        .text-white-80 {
            color: rgba(255, 255, 255, 0.9);
        }

        .bg-gradient {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-section h3 {
            font-size: 2.25rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-light {
            background: white;
            color: var(--primary);
            border: none;
            padding: 0.875rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-light:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            color: var(--primary);
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 4rem 0;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }

            .hero-products h1 {
                font-size: 2.5rem;
            }

            .hero-products p {
                font-size: 1.1rem;
            }

            .feature-box {
                border-right: none;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .feature-box:last-child {
                border-bottom: none;
            }
        }

        .floating-salt {
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-salt:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-salt:nth-child(2) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
        }

        .floating-salt:nth-child(3) {
            top: 40%;
            left: 70%;
            animation-delay: 4s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
            100% {
                transform: translateY(0) rotate(0deg);
            }
        }
    </style>
</head>
<body>
     <?php include 'header.php'; ?>
    <!-- Hero Section -->
    <section class="hero-products">
        <div class="floating-salt"></div>
        <div class="floating-salt"></div>
        <div class="floating-salt"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center hero-content">
                    <h1 class="display-4 fw-bold mb-4 text-white">Pure Himalayan Salt Collection</h1>
                    <p class="lead mb-0 text-white">Experience the natural purity and mineral richness of authentic Himalayan salt, sourced directly from ancient salt mines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="mb-3">Premium Quality</h2>
                <h3 class="h1">Our Himalayan Salt Collection</h3>
            </div>

            <div class="row g-5">
                <!-- 1-Pound Salt Pouch -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="assets/img/1 Pouch 1 pound.png" alt="1-Pound Salt Pouch" class="product-image">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">1 Pound Salt Pouch</h3>
                              <p class="product-description">Perfect for everyday use, our 1 pound pouch of pure Himalayan pink salt is ideal for cooking, seasoning, and more.</p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> 100% Natural & Unprocessed</li>
                                <li><i class="fas fa-check"></i> Rich in Minerals</li>
                                <li><i class="fas fa-check"></i> Resealable Pouch</li>
                            </ul>
                         
                        </div>
                    </div>
                </div>

                <!-- 2-Pound Salt Pouch -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="assets/img/1 pouch 2pound 1st.png" alt="2-Pound Salt Pouch" class="product-image">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">2 Pound Salt Pouch</h3>
                              <p class="product-description">Our 2 pound pouch offers great value for those who use Himalayan salt regularly in their cooking and wellness routines.</p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> 100% Natural & Unprocessed</li>
                                <li><i class="fas fa-check"></i> Rich in Essential Minerals</li>
                                <li><i class="fas fa-check"></i> Resealable & Durable Pouch</li>
                            </ul>
                         
                        </div>
                    </div>
                </div>

                <!-- 5-Pound Salt Jar -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="assets/img/1 jar 5 pound.png" alt="5-Pound Salt Jar" class="product-image">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">5 Pound Salt Jar</h3>
                              <p class="product-description">Elegant glass jar containing 5 pounds of premium Himalayan pink salt, perfect for both kitchen and decor.</p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> 100% Pure Himalayan Salt</li>
                                <li><i class="fas fa-check"></i> Elegant Glass Jar</li>
                                <li><i class="fas fa-check"></i> Airtight Seal</li>
                            </ul>
                         
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Full Width Row for 3rd and 4th Products -->
            <div class="row g-4 mt-4">
                <!-- 55-Pound Bulk Salt Bag -->
                <div class="col-lg-6">
                    <div class="product-card h-100">
                        <div class="product-image-container">
                            <img src="assets/img/50KG Pouch.png" alt="55-Pound Bulk Salt Bag" class="product-image">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">55 Pound Bulk Salt Bag</h3>
                              <p class="product-description">Ideal for food service, restaurants, and serious home chefs who demand the finest quality salt in bulk quantities.</p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> 55 lbs of Pure Himalayan Salt</li>
                                <li><i class="fas fa-check"></i> Food Service Grade</li>
                                <li><i class="fas fa-check"></i> Cost Effective Bulk Option</li>
                            </ul>
                         
                        </div>
                    </div>
                </div>

                <!-- Animal Salt Lick -->
                <div class="col-lg-6">
                    <div class="product-card h-100">
                        <div class="product-image-container">
                            <img src="assets/img/Animal lick.png" alt="Animal Salt Lick" class="product-image">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Animal Salt Lick</h3>
                               <p class="product-description">Natural mineral supplement for livestock and pets, providing essential nutrients for optimal animal health.</p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> Rich in Essential Minerals</li>
                                <li><i class="fas fa-check"></i> Promotes Animal Health</li>
                                <li><i class="fas fa-check"></i> Long Lasting</li>
                            </ul>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section-padding pt-0">
        <div class="container">
            <div class="features-section bg-white rounded-4 shadow-sm p-4 p-lg-5">
                <div class="row g-4 g-lg-5">
                    <div class="col-md-4">
                        <div class="feature-box p-4 h-100">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h4 class="h5 fw-bold mt-4 mb-3">Premium Quality</h4>
                            <p class="mb-0 text-muted">Sourced directly from the Himalayan mountains, ensuring the highest purity and mineral content.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box p-4 h-100">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h4 class="h5 fw-bold mt-4 mb-3">100% Natural</h4>
                            <p class="mb-0 text-muted">No additives, preservatives, or artificial ingredients  just pure, natural Himalayan salt.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box p-4 h-100">
                            <div class="feature-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4 class="h5 fw-bold mt-4 mb-3">Fast Shipping</h4>
                            <p class="mb-0 text-muted">Quick and reliable delivery to your doorstep, with secure packaging to ensure product safety.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>