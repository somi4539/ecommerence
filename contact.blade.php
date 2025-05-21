<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - E-Commerce</title>
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
    .contact-header {
      background: linear-gradient(to right, #198754, #14532d);
      color: white;
      padding: 60px 0;
      text-align: center;
    }

    .contact-header h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .contact-section {
      padding: 50px 0;
    }

    .form-control,
    .btn {
      border-radius: 10px;
    }

    .contact-info h5 {
      font-weight: 600;
    }

    iframe {
      border-radius: 15px;
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
        <li class="nav-item"><a class="nav-link active" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="deals">Deals</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Header Section -->
  <div class="contact-header">
    <h1>Contact Us</h1>
    <p class="lead">We’re here to help. Reach out to us with any questions or concerns.</p>
  </div>

  <!-- Contact Section -->
  <div class="container contact-section">
    <div class="row g-4">

      <!-- Contact Form -->
      <div class="col-md-7">
        <h3>Send Us a Message</h3>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" class="form-control" placeholder="John Doe" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" id="email" class="form-control" placeholder="you@example.com" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Inquiry about product">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Write your message..." required></textarea>
          </div>
          <button type="submit" class="btn btn-success">Send Message</button>
        </form>
      </div>

      <!-- Contact Information -->
      <div class="col-md-5 contact-info">
        <h3>Get in Touch</h3>
        <p class="mb-3">We typically respond within 24 hours on business days.</p>
        <h5>Address</h5>
        <p>123 Online Mart, Green Avenue,<br> Lahore, Pakistan</p>

        <h5>Email</h5>
        <p>support@onlinemart.com</p>

        <h5>Phone</h5>
        <p>+92 300 1234567</p>

        <h5>Working Hours</h5>
        <p>Mon - Sat: 9:00 AM to 6:00 PM<br>Sunday: Closed</p>
      </div>
    </div>

    <!-- Map Section -->
    <div class="row mt-5">
      <div class="col">
        <h4 class="mb-3">Our Location</h4>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13605.637678936775!2d74.32937644999999!3d31.516140049999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904bd46b7e7ef%3A0xe20b3c9cdd3e34a!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1666600000000" 
          width="100%" 
          height="300" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

</body>
</html>
