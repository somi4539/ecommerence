<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      padding-top: 40px;
    }
    .product-detail-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .product-detail-card img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .price-old {
      text-decoration: line-through;
      color: #888;
    }
    .price-new {
      color: #198754;
      font-weight: bold;
      font-size: 1.5rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="product-detail-card row">
      <div class="col-md-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfqhYVNwfKwnTPyWE06WtEwuR6NbNO0t0JAg&s" alt="Backpack">
      </div>
      <div class="col-md-6">
        <h2>Stylish Watch</h2>
        <p class="mb-2">High-quality waterproof travel backpack with multiple compartments and durable zippers.</p>
        <p><span class="price-old">$49.99</span> <span class="price-new">$40.99</span></p>
        <p><strong>In Stock</strong></p>
        <p>Rating: ⭐⭐⭐⭐☆ (4.2)</p>
        <hr>
        <button class="btn btn-success">Add to Cart</button>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
</body>
</html>
