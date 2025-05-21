<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Deals & Offers - E-Commerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-brand img { height: 40px; }
        .hero {
            background: url('https://source.unsplash.com/1600x600/?shopping') no-repeat center center;
            background-size: cover;
            padding: 100px 20px;
            text-align: center;
            color: white;
        }
    body {
      background-color: #f8f9fa;
    }
    .deals-header {
      background: linear-gradient(to right, #d63384, #6f42c1);
      color: white;
      padding: 60px 0;
      text-align: center;
    }

    .deal-badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background-color: #dc3545;
      color: white;
      padding: 5px 10px;
      font-size: 0.8rem;
      border-radius: 5px;
    }

    .deal-timer {
      font-size: 0.9rem;
      margin-top: 10px;
      color: #6c757d;
    }

    .product-card {
      background-color: white;
      border: 1px solid #dee2e6;
      border-radius: 15px;
      padding: 20px;
      position: relative;
      transition: 0.3s;
      height: 100%;
    }

    .product-card:hover {
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .product-card img {
      max-height: 180px;
      object-fit: cover;
    }

    .price-old {
      text-decoration: line-through;
      color: #888;
      margin-right: 10px;
    }

    .price-new {
      font-weight: bold;
      color: #198754;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('https://png.pngtree.com/png-vector/20220930/ourmid/pngtree-shopping-logo-design-for-online-store-website-png-image_6239056.png') }}" alt="Logo"> MyStore
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link active" href="deals">Deals</a></li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Header -->
  <div class="deals-header">
    <h1>Today's Hot Deals</h1>
    <p class="lead">Don’t miss out! Grab the best products at unbeatable prices.</p>
  </div>

  <!-- Deals Section -->
  <div class="container py-5">
    <div class="row g-4">

      <!-- Deal Card 1 -->
      <div class="col-md-4">
        <div class="product-card text-center">
          <span class="deal-badge">20% OFF</span>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuRMRqKcQwZ0z37dIpTgVeRNaC6JlcJrVFSg&s" class="img-fluid mb-3" alt="Watch">
          <h5>Luxury Watch</h5>
          <p>
            <span class="price-old">$149.99</span>
            <span class="price-new">$119.99</span>
          </p>
          <p class="deal-timer">Deal ends in: <strong>02:45:30</strong></p>
          <a href="#" class="btn btn-danger btn-sm">Shop Now</a>
        </div>
      </div>

      <!-- Deal Card 2 -->
      <div class="col-md-4">
        <div class="product-card text-center">
          <span class="deal-badge">30% OFF</span>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR924oCG2sdBVe-lhteeAVwoLE77PN1rQwT1Q&s" class="img-fluid mb-3" alt="Headphones">
          <h5>Wireless Headphones</h5>
          <p>
            <span class="price-old">$89.99</span>
            <span class="price-new">$62.99</span>
          </p>
          <p class="deal-timer">Deal ends in: <strong>10:22:15</strong></p>
          <a href="#" class="btn btn-danger btn-sm">Shop Now</a>
        </div>
      </div>

      <!-- Deal Card 3 -->
      <div class="col-md-4">
        <div class="product-card text-center">
          <span class="deal-badge">40% OFF</span>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWauRojM1Z9DdeMX3Jxoi4KlPgrA3z31DUTA&s" class="img-fluid mb-3" alt="Shoes">
          <h5>Running Shoes</h5>
          <p>
            <span class="price-old">$69.99</span>
            <span class="price-new">$41.99</span>
          </p>
          <p class="deal-timer">Deal ends in: <strong>05:18:50</strong></p>
          <a href="#" class="btn btn-danger btn-sm">Shop Now</a>
        </div>
      </div>

      <!-- More Cards Can Be Added -->

    </div>
  </div>

</body>
</html>
