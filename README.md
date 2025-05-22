<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyStore - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-brand img { height: 40px; }
        .hero {
            background: url('https://source.unsplash.com/1600x600/?shopping') no-repeat center center;
            background-size: cover;
            padding: 100px 20px;
            text-align: center;
            color: white;
        }
        .categories img, .products img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .deal-banner {
            background: #28a745;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .testimonial {
            background-color: #f8f9fa;
            padding: 30px;
            border-left: 4px solid #28a745;
            margin-bottom: 20px;
        }
        footer {
            background: #343a40;
            color: #ccc;
            padding: 20px 0;
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
        <li class="nav-item"><a class="nav-link active" href="home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="deals">Deals</a></li>
        <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="admin">Home Page</a></li>
    <li><a class="dropdown-item" href="shopadmin">Shop page</a></li>
    <li><a class="dropdown-item" href="#">Link 3</a></li>
  </ul>
</div>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Banner -->
<section class="hero" style="position: relative; background: url('https://source.unsplash.com/1600x600/?luxury,store') no-repeat center center; background-size: cover; padding: 120px 0;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7);"></div>
  <div class="container text-center position-relative text-white">
    <h1 style="font-size: 3.5rem; font-weight: bold; font-family: 'Georgia', serif;">M SOHAIB DEVELOEPR</h1>
    <p style="font-size: 1.3rem;">Exclusive Products. Premium Brands. Unmatched Quality.</p>
    <a href="explore" class="btn btn-lg" style="background-color: gold; color: black; border: none; font-weight: bold;">Explore Now</a>
  </div>
</section>


<!-- Featured Categories -->
<section class="py-5">
  <div class="container text-center">
    <h2>Featured Categories</h2>
    <div class="row mt-4 categories">
      <div class="col-md-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtseBeudB8P7me2tHMya4isbMXWazxz0B-1w&s" alt=""><p>Clothing</p></div>
      <div class="col-md-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSaE67w_iq9epmUYiuBE7_QswhPHzXobPpeQ&s" alt=""><p>Electronics</p></div>
      <div class="col-md-3"><img src="https://i.ytimg.com/vi/z2wpTf6h-K8/maxresdefault.jpg" alt=""><p>Shoes</p></div>
      <div class="col-md-3"><img src="https://renome.pk/wp-content/uploads/2023/12/Grey_Minimalist_Tips_Blog_Banner_1000x636.webp" alt=""><p>Furniture</p></div>
    </div>
  </div>
</section>

<!-- Popular Products -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2>Popular Products</h2>
    <div class="row mt-4 products">
      <div class="col-md-3">
        <div class="card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfqhYVNwfKwnTPyWE06WtEwuR6NbNO0t0JAg&s" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Stylish Watch</h5>
            <p>$49.99</p>
            <a href="buy" class="btn btn-success btn-sm">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiEUkArbeS-OhaVkqZRAIjWZX88n56VDB97A&s" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Wireless Headphones</h5>
            <p>$89.99</p>
            <a href="#" class="btn btn-success btn-sm">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://www.sportspower.com.au/cdn/shop/files/DA2777-003-NikeLittleKids_StarRunner3_5__1000x1000_c167a4d7-4d0d-43c2-83d0-9b1872c50a16-web.jpg?v=1738152610" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Running Shoes</h5>
            <p>$69.99</p>
            <a href="#" class="btn btn-success btn-sm">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="https://pacanva.com/cdn/shop/products/IMG_1428.jpg?v=1664551764" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Travel Backpack</h5>
            <p>$59.99</p>
            <a href="#" class="btn btn-success btn-sm">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Deal of the Day -->
<section class="deal-banner">
  <div class="container">
    <h2>🔥 Deal of the Day</h2>
    <p>Get 50% off on selected items. Limited time offer!</p>
    <a href="#" class="btn btn-light btn-lg">Shop Deals</a>
  </div>
</section>

<!-- Customer Testimonials -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center">What Our Customers Say</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="testimonial">
          <p>"Amazing quality and fast delivery! Highly recommended."</p>
          <strong>- Ali Raza</strong>
        </div>
      </div>
      <div class="col-md-6">
        <div class="testimonial">
          <p>"Great prices and very responsive customer service."</p>
          <strong>- Fatima Khan</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Newsletter Subscribe -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2>Subscribe to Our Newsletter</h2>
    <p>Get updates about new products and special offers</p>
    <form class="row justify-content-center">
      <div class="col-md-4">
        <input type="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="col-md-2">
        <button class="btn btn-success">Subscribe</button>
      </div>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p>&copy; 2025 MyStore. All rights reserved.</p>
    <p>
      <a href="#" class="text-light text-decoration-none me-3">Privacy Policy</a>
      <a href="#" class="text-light text-decoration-none">Terms & Conditions</a>
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
