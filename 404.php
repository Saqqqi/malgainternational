<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 Page Not Found - Malga International</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/icons.ico">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">

  <style>
    body {
      background-color: #f9fafb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .error-page {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 15px;
    }
    .error-content {
      text-align: center;
      background: #fff;
      padding: 50px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.08);
      max-width: 500px;
      width: 100%;
    }
    .error-code {
      font-size: 80px;
      font-weight: 700;
      color: #e74c3c;
      margin-bottom: 10px;
    }
    .error-title {
      font-size: 22px;
      font-weight: 600;
      color: #222;
      margin-bottom: 12px;
    }
    .error-text {
      font-size: 15px;
      color: #555;
      margin-bottom: 25px;
    }
    .btn-home {
      display: inline-block;
      background: #e74c3c;
      color: #fff;
      padding: 10px 25px;
      border-radius: 30px;
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .btn-home:hover {
      background: #c0392b;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .error-icon {
      font-size: 50px;
      color: #e74c3c;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <section class="error-page">
    <div class="error-content">
      <div class="error-icon">
        <i class="fas fa-exclamation-circle"></i>
      </div>
      <h1 class="error-code">404</h1>
      <h2 class="error-title">Page Not Found</h2>
      <p class="error-text">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
      <a href="index.php" class="btn-home">
        <i class="fas fa-home me-2"></i> Back to Home
      </a>
    </div>
  </section>

  <!-- JavaScript -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
