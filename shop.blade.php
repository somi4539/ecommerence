<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop - MyStore</title>
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
    .product-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      transition: all 0.3s;
    }
    .product-card:hover {
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.15);
    }
    .sidebar {
      border-right: 1px solid #ddd;
      padding-right: 15px;
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
         <li class="nav-item"><a class="nav-link active" href="shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="deals">Deals</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Heading -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <h2 class="fw-bold">Shop All Products</h2>
    <p>Browse from our exclusive collection</p>
  </div>
</section>

<!-- Shop Section -->
<div class="container py-4">
  <div class="row">
    
    <!-- Sidebar -->

   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shop Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 sidebar">
      <h5>Categories</h5>
      <ul class="list-unstyled" id="categoryList">
        <li><a href="#" class="text-decoration-none d-block py-1 category-filter" data-category="All">All</a></li>
        <li><a href="#" class="text-decoration-none d-block py-1 category-filter" data-category="Electronics">Electronics</a></li>
        <li><a href="#" class="text-decoration-none d-block py-1 category-filter" data-category="Clothing">Clothing</a></li>
        <li><a href="#" class="text-decoration-none d-block py-1 category-filter" data-category="Shoes">Shoes</a></li>
        <li><a href="#" class="text-decoration-none d-block py-1 category-filter" data-category="Accessories">Accessories</a></li>
      </ul>
      <hr>
      <h6>Sort By</h6>
      <select class="form-select" id="sortSelect">
        <option value="latest">Latest</option>
        <option value="lowToHigh">Price: Low to High</option>
        <option value="highToLow">Price: High to Low</option>
      </select>
    </div>

    <!-- Products -->
    <div class="col-md-9">
      <div class="row g-4" id="productContainer">
        <!-- Cards will be inserted here by JS -->
      </div>

      <!-- Pagination -->
      <div class="mt-4 text-center">
        <nav>
          <ul class="pagination justify-content-center" id="paginationContainer">
            
            <!-- Pagination buttons inserted here -->
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<script>
  const products = [
    { name: "Luxury Watch", category: "Accessories", price: 149.99, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx_cTYWcoDRQ-tAPYzvDr7OvkwmSywgZVdHw&s" },
    { name: "Wireless Headphones", category: "Electronics", price: 89.99, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0rKkAAC6i03jhbCt5OQIIPMBZx0br-pK1vWAEroas2WHS9vkBBs0VKMCSBSc2H9uWJw8&usqp=CAU" },
    { name: "Running Shoes", category: "Shoes", price: 69.99, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5rXMLLX2E7uXqMyOV6ezLUm1GUVDIke_JLw&s" },
    { name: "T-Shirt", category: "Clothing", price: 25.00, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgBe_hpfvNOHo15lP7jWgQcyNSWVi273MIdA&s" },
    { name: "Bluetooth Speaker", category: "Electronics", price: 49.99, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBsw0fdeWZs8yoJtXREJhwSMC4iyc2KxLaGw&s" },
    { name: "Leather Belt", category: "Accessories", price: 39.99, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmSnCTA3Lu1Y1C0aB9gKz7H4Ma0Mvc77ZFZQ&s" },
    { name: "Brand Belt", category: "Accessories", price: 39.99, image: "https://video-play.daraz.pk/cover/2988611.jpg" },
    { name: "Smartphone", category: "Electronics", price: 499.99, image: "https://cybershack.com.au/wp-content/uploads/2024/11/Smartpoine-2024.jpg" },
    { name: "Jacket", category: "Clothing", price: 119.99, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-Bh8k5Bd8bdErq5n_kDQTK_Hm2_78npth3Q&s" }
  ];

  let currentCategory = "All";
  let currentSort = "latest";
  let currentPage = 1;
  const itemsPerPage = 3;

  function renderProducts() {
    let filtered = currentCategory === "All" ? products : products.filter(p => p.category === currentCategory);

    if (currentSort === "lowToHigh") {
      filtered.sort((a, b) => a.price - b.price);
    } else if (currentSort === "highToLow") {
      filtered.sort((a, b) => b.price - a.price);
    }

    const start = (currentPage - 1) * itemsPerPage;
    const paginated = filtered.slice(start, start + itemsPerPage);

    const container = document.getElementById("productContainer");
    container.innerHTML = paginated.map((p, index) => `
      <div class="col-md-4">
        <div class="product-card p-3 text-center border">
          <img src="${p.image}" alt="${p.name}" id="img-${index}" style="width:100%; height:200px; object-fit:cover;">
          <h5 class="mt-2">${p.name}</h5>
          <p class="text-muted">$${p.price.toFixed(2)}</p>
          <input type="file" accept="image/*" onchange="updateImage(event, ${index})" class="form-control mt-2">
          <a href="#" class="btn btn-success btn-sm mt-2">Add to Cart</a>
        </div>
      </div>
    `).join("");

    renderPagination(filtered.length);
  }

  function renderPagination(totalItems) {
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    const pagination = document.getElementById("paginationContainer");
    pagination.innerHTML = "";

    for (let i = 1; i <= totalPages; i++) {
      pagination.innerHTML += `
        <li class="page-item ${i === currentPage ? "active" : ""}">
          <a href="#" class="page-link" onclick="goToPage(${i})">${i}</a>
        </li>
      `;
    }
  }

  function goToPage(page) {
    currentPage = page;
    renderProducts();
  }

  function updateImage(event, index) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        products[index].image = e.target.result;
        document.getElementById(`img-${index}`).src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  }

  document.querySelectorAll(".category-filter").forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      currentCategory = this.dataset.category;
      currentPage = 1;
      renderProducts();
    });
  });

  document.getElementById("sortSelect").addEventListener("change", function () {
    currentSort = this.value;
    renderProducts();
  });

  renderProducts();
</script>

</body>
</html>


<!-- Footer -->
<footer class="bg-dark text-center text-light py-4">
  <div class="container">
    <p>&copy; 2025 MyStore. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
