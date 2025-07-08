</main>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<footer class="bg-light text-lg-start mt-5 border-top shadow-sm">
  <div class="container py-5">
    <div class="row text-center text-md-start">
      <!-- About -->
     <!-- About -->
<div class="col-md-3 mb-4">
  <div class="mb-3 text-center text-md-start">
    <img src="IMAGES/AAA PNG without bg.png" alt="Ashray Auto Agency Logo" style="width: 300px; height: 125px;">
  </div>
  <p class="text-muted">
    Ashray Auto Agency is your trusted destination for quality spare parts. We offer a wide range of automotive components with reliable support and warranty.
  </p>
</div>


     <!-- Quick Links -->
<div class="col-md-6 mb-4 d-flex flex-column align-items-center">
  <h5 class="footer-heading">Quick Links</h5>
  <ul class="list-unstyled">
    <li><a href="index.php" class="footer-link"><i class="bi bi-house-door-fill me-2"></i>Home</a></li>
    <li><a href="about.php" class="footer-link"><i class="bi bi-info-circle-fill me-2"></i>About Us</a></li>
    <li><a href="products.php" class="footer-link"><i class="bi bi-box-seam me-2"></i>Products</a></li>
    <li><a href="contact us.php" class="footer-link"><i class="bi bi-envelope-fill me-2"></i>Contact Us</a></li>
  </ul>
</div>

<!-- Contact -->
<div class="col-md-3 mb-4">
  <h5 class="footer-heading">Contact Us</h5>
  <ul class="list-unstyled text-muted">


   <!-- Address with Icon -->
   <li class="d-flex align-items-start mb-2">
      <i class="bi bi-geo-alt-fill me-2 text-orange"></i>
      <address class="text-muted mb-0">
        1, Mansatta Industrial Area,<br>
        Behind Nayara Petrol Pump,<br>
        Gondal Road, Rajkot
      </address>
    </li>
    
    <!-- Email with Icon -->
    <li class="d-flex align-items-center mb-2">
      <i class="bi bi-envelope-fill me-2 text-orange"></i>
      <a href="mailto:info@ashrayautoagency.com" class="text-decoration-none text-muted">
        info@ashrayautoagency.com
      </a>
    </li>

    <!-- Mobile Number with Icon -->
    <li class="d-flex align-items-center mb-2">
      <i class="bi bi-telephone-fill me-2 text-orange"></i>
      <a href="tel:+919427463698" class="text-decoration-none text-muted">
        +91 94274 63698
      </a>
    </li>

    
  </ul>
</div>
<!-- back to top button -->
<footer class="bg-light text-dark pt-4 position-relative">
  <div class="container text-center">
    <!-- Your existing footer content -->

    <!-- Back to Top Button (square with text) -->
    <button id="backToTopBtn" class="btn btn-orange btn-sm position-absolute d-flex align-items-center gap-2"
            style="bottom: 10px; right: 15px; border-radius: 4px;">
      <i class="fas fa-arrow-up"></i>
      <span>Back to Top</span>
    </button>
  </div>
</footer>



<script>
  document.getElementById("backToTopBtn").addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
</script>



<style>
.btn-orange {
  background-color: #ff7300;
  color: white;
  border: none;
  transition: background-color 0.3s ease, transform 0.2s ease;
  padding: 6px 10px;
  font-size: 14px;
}

.btn-orange:hover {
  background-color: #e96400;
  transform: scale(1.05);
}
</style>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="text-center py-3" style="background-color: #f8f9fa;">
    © 2025 Ashray Auto Agency. All rights reserved.
  </div>

  <!-- Footer Custom CSS -->
  <style>
    .footer-link {
      display: block;
      color: #333;
      text-decoration: none;
      margin-bottom: 8px;
      transition: color 0.3s ease;
      font-weight: 500;
    }

    .footer-link:hover {
      color: #ff7300;
      text-decoration: underline;
    }
    .text-orange {
  color: #ff7300; /* Use the orange color you prefer */
}

.text-muted {
  color: #6c757d !important; /* Adjust the muted color for better readability */
}


    .footer-heading {
  font-weight: 700;
  text-transform: uppercase;
  color: #212529;
  position: relative;
  margin-bottom: 1rem;
}

.footer-heading::after {
  content: "";
  display: block;
  width: 40px;
  height: 3px;
  background-color: #ff7300;
  margin-top: 6px;
  border-radius: 2px;
}

.footer-link {
  display: flex;
  align-items: center;
  color: #333;
  text-decoration: none;
  margin-bottom: 10px;
  transition: all 0.3s ease;
  font-weight: 500;
}

.footer-link i {
  font-size: 1rem;
}

.footer-link:hover {
  color: #ff7300;
  transform: translateX(4px);
  text-decoration: none;
}

.text-orange {
  color: #ff7300;
}

  </style>
</footer>


</body>
</html>
