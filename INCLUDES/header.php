<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ashray Auto Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* Contact bar */
    .top-contact-bar {
      background: linear-gradient(to right, #fff4e6, #ffe8cc);
      font-size: 0.95rem;
      font-weight: 500;
    }
    .top-contact-bar a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .top-contact-bar a:hover {
      color: #ff7300;
    }

    /* Navbar */
    .navbar-nav .nav-link {
      padding: 0.5rem 1rem;
      font-weight: 600;
      color: #4b4b4b !important;
      position: relative;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: #ff7300 !important;
      background-color: rgba(255, 115, 0, 0.08);
      border-radius: 5px;
      transform: translateY(-2px);
    }

    /* Download Button */
    .btn-orange {
      background-color: #ff7300;
      color: #fff;
      border: none;
      border-radius: 15px;
      padding: 0.4rem 1.2rem;
    
      font-size: 0.95rem;
      font-weight: 600;
      transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-orange:hover {
      background-color: #e75f00;
      transform: translateY(-2px);
      color: #fff;
    }

    @media (max-width: 991.98px) {
      .btn-orange {
        margin-top: 10px;
      }
    }
    /* Get a Quote Button Styles (Left of Home) */
.btn-quote {
      background-color: #ff7300;
      color: #fff;
      border: none;
      border-radius: 15px;
      padding: 0.4rem 1.2rem;
    
      font-size: 0.95rem;
      font-weight: 600;
      transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.btn-quote:hover {
  background-color: #e75f00;
  transform: translateY(-3px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  color: #fff;
}

/* Navbar Link Hover Effect */
.navbar-nav .nav-link {
  padding: 0.5rem 1rem;
  font-weight: 600;
  color: #4b4b4b !important;
  position: relative;
  transition: color 0.3s ease, transform 0.3s ease;
  font-size: 1rem; /* Add or adjust this line */
}
.navbar-nav .nav-link {
  font-size: 1.1rem; /* increase size */
  padding: 0.6rem 1.2rem; /* slightly more space */
}


.navbar-nav .nav-link:hover {
  color: #ff7300 !important;
  background-color: rgba(255, 115, 0, 0.08);
  border-radius: 5px;
  transform: translateY(-2px);
}

.navbar-nav .nav-link:focus {
  outline: none;
  box-shadow: none;
}

  </style>
</head>
<body>

<!-- Top Contact Bar -->
<div class="top-contact-bar py-2 px-3 d-flex justify-content-end align-items-center gap-4">
  <div class="contact-item d-flex align-items-center">
    <span class="me-2"><i class="fas fa-phone-alt me-2"></i></span>
    <a href="tel:+919999999999" class="text-dark text-decoration-none">+91 94274 63698</a>
  </div>
  <div class="contact-item d-flex align-items-center">
    <span class="me-2"><i class="fas fa-envelope"></i></span>
    <a href="mailto:info@ashrayauto.com" class="text-dark text-decoration-none">info@ashrayauto.com</a>
  </div>
  <div class="ms-4">We open: Mon to Sat | 8:30 - 20:00 HRS | Sun - Closed</div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="IMAGES/AAA PNG without bg.png" alt="Logo" style="width: 240px; height: 100px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav align-items-center" style="list-style: none; margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="contact us.php">Contact Us</a></li>
      </ul>

      <!-- Move both buttons to the right -->
      <ul class="navbar-nav ms-auto align-items-center">
        <!-- Product List Button -->
        <li class="nav-item ms-3">
          <a href="IMAGES\product list.webp" class="btn btn-orange btn-sm rounded-pill" download>
            <i class="fas fa-download me-2"></i> Product List
          </a>
        </li>

        <!-- Get a Quote Button -->
        <li class="nav-item ms-3">
          <a href="enquiry.php" class="btn btn-quote btn-sm rounded-pill">
            Get a Quote
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
