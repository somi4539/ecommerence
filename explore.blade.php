<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopEase - Your Online Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #0f0f0f;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .hero-section {
      height: 100vh;
      background: url('https://source.unsplash.com/1600x900/?shopping,ecommerce') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
    }
    .hero-content {
      position: relative;
      text-align: center;
      z-index: 1;
    }
    .hero-content h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .explore-btn {
      margin-top: 20px;
      padding: 12px 30px;
      font-size: 1.1rem;
      border-radius: 30px;
      background-color: #00ff99;
      color: #000;
      font-weight: bold;
      border: none;
      transition: all 0.3s ease-in-out;
    }
    .explore-btn:hover {
      background-color: #00cc7a;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Welcome to ShopEase</h1>
      <p>Your one-stop shop for everything!</p>
      <a href="#products" class="btn explore-btn">Explore Now</a>
    </div>
  </section>

  <!-- Dummy Products Section to Scroll -->
  <section id="products" class="container py-5">
    <h2 class="text-center text-white mb-4">Featured Products</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card bg-dark text-white">
          <img src="https://source.unsplash.com/300x300/?product" class="card-img-top" alt="Product">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">Awesome product description.</p>
            <a href="#" class="btn btn-success">Buy Now</a>
          </div>
        </div>
      </div>
      <!-- Add more product cards as needed -->
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
