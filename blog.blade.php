<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Blog</title>
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
      background-color: #f9f9f9;
    }
    .blog-section {
      padding: 50px 0;
    }

    .blog-title {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 40px;
      text-align: center;
    }

    .blog-card {
      transition: all 0.3s ease;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border: none;
      border-radius: 10px;
      overflow: hidden;
    }

    .blog-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .blog-card img {
      height: 220px;
      object-fit: cover;
    }

    .blog-card .card-body {
      padding: 20px;
    }

    .blog-card .card-title {
      font-size: 1.25rem;
      font-weight: 600;
    }

    .blog-card .card-text {
      font-size: 0.95rem;
      color: #555;
    }

    .blog-card .btn {
      margin-top: 10px;
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
        <li class="nav-item"><a class="nav-link active" href="blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="deals">Deals</a></li>
      </ul>
    </div>
  </div>
</nav>



  <div class="container blog-section">
    <h2 class="blog-title">Latest from Our Blog</h2>
    <div class="row g-4">

      <!-- Blog Post 1 -->
      <div class="col-md-4">
        <div class="card blog-card">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" class="card-img-top" alt="Smartwatch">
          <div class="card-body">
            <h5 class="card-title">Top 5 Smartwatches to Buy in 2025</h5>
            <p class="card-text">Looking to upgrade your wristwear? Check out the latest smartwatches with top features and best battery life.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="col-md-4">
        <div class="card blog-card">
          <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" class="card-img-top" alt="Headphones">
          <div class="card-body">
            <h5 class="card-title">Best Wireless Headphones Under $100</h5>
            <p class="card-text">We tested 10 top models to help you find the best headphones with comfort, quality, and long-lasting battery.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="col-md-4">
        <div class="card blog-card">
          <img src="https://aiksow.pk/wp-content/uploads/2023/10/Women-Shoes-Lightweight-Running-Shoes-For-Women-Sneakers-Comfortable-Sport-Shoes-Jogging-Tennis.webp" class="card-img-top" alt="Running Shoes">
          <div class="card-body">
            <h5 class="card-title">How to Choose the Right Running Shoes</h5>
            <p class="card-text">Your perfect run starts with the right pair of shoes. Learn how to select shoes based on your running style.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

<div class="col-md-4">
        <div class="card blog-card">
          <img src="https://icruze-digital.com/cdn/shop/files/iCruze_Comfy_Wireless_Headphone_Black_6.webp?v=1738229905" class="card-img-top" alt="Running Shoes">
          <div class="card-body">
            <h5 class="card-title">Dive Into Pure Sound with Our Wireless Headphones</h5>
            <p class="card-text">Escape the noise and tune into crystal-clear sound with our wireless over-ear headphones. Designed for comfort and clarity, they feature soft cushioned ear cups, noise isolation, and up to 20 hours of battery life on a single charge. Whether you're working, traveling, or enjoying music at home, these headphones deliver deep bass, clear vocals, and stable Bluetooth connectivity.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card blog-card">
          <img src="https://img.drz.lazcdn.com/static/pk/p/5980278026b53b5bf1b73a9ae54d171a.jpg_720x720q80.jpg" class="card-img-top" alt="Running Shoes">
          <div class="card-body">
            <h5 class="card-title">Work and Game Better with Our RGB Mechanical Keyboard</h5>
            <p class="card-text">Experience the perfect blend of performance and style with our RGB Mechanical Keyboard. Built for gamers, coders, and professionals alike, it features clicky, responsive keys and customizable RGB lighting that adds flair to your workspace. The durable key switches ensure long-lasting use, while the ergonomic design helps reduce fatigue during long hours of typing or gaming.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card blog-card">
          <img src="https://shopgroove.pk/cdn/shop/products/Sa9a137787baf4754a006b0ccd0a88339z_jpg_640x640Q90_jpg.jpg?v=1664899573" class="card-img-top" alt="Running Shoes">
          <div class="card-body">
            <h5 class="card-title"> Stay Cool & Stylish with Our Premium Cotton T-Shirts</h5>
            <p class="card-text">Upgrade your wardrobe with our latest range of premium cotton T-shirts, designed for comfort and everyday wear. Made with breathable, high-quality fabric, these tees are perfect for summer days or layering in colder months. With modern cuts, trendy colors, and long-lasting stitching, they suit both casual and semi-formal looks.</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
