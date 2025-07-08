
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | Ashray Auto Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <?php include 'includes/header.php'; ?>
  <style>
    .contact-section {
      background-color: #f9f9f9;
      padding: 60px 0;
    }

    .contact-section h2 {
      color: #333;
      font-weight: bold;
    }

    .contact-form .form-control {
      border-radius: 10px;
      box-shadow: none;
    }

    .contact-info i {
      color: #ff7300;
      font-size: 1.5rem;
      margin-right: 15px;
    }

    .btn-orange {
      background-color: #ff7300;
      color: #fff;
      border-radius: 50px;
      transition:    0.3s ease;
    }

    .btn-orange:hover {
      background-color: #e65e00;
    }
    .section-title::after{
  content: "";
  display: block;
  width: 60px;
  height: 4px;
  background-color: #ff7300;
  margin-top: 6px;
  border-radius: 2px;
}

.text-orange {
  color: #ff7300;
}

.btn-orange {
  background-color: #ff7300;
  color: white;
  border-radius: 30px;
  transition: 0.3s;
}

.btn-orange:hover {
  background-color: #e65c00;
}

  </style>
</head>
<body>

<!-- Contact Section -->
<section class="contact-section py-5 bg-light">
  <div class="container">
    
    <!-- Section Title -->
    <div class="mb-5">
      <h2 class="section-title position-relative d-inline-block text-start mb-3">Contact Us</h2>
      <p class="text-muted">We’d love to hear from you. Get in touch via phone, email, or our contact form.</p>
    </div>

    <div class="row g-5">
      <!-- Contact Info -->
      <div class="col-md-5">
        <div class="contact-info">
          <div class="mb-4">
            <h6 class="text-orange fw-bold mb-2"><i class="fas fa-map-marker-alt me-2"></i> Address</h5>
            <p class="mb-0">Ashray Auto Agency,<br>
              2, Mansata Industrial Area,<br>
              Near Nayara Petrol Pump, Gondal Road,<br>
              Rajkot, Gujarat - 360002</p>
          </div>

          <div class="mb-4">
            <h6 class="text-orange fw-bold mb-2"><i class="fas fa-phone-alt me-2"></i> Call us</h5>
            <p class="mb-0"><a href="tel:+919999999999" class="text-decoration-none text-dark">+91 94274 63698</a></p>
          </div>

          <div class="mb-4">
            <h6 class="text-orange fw-bold mb-2"><i class="fas fa-envelope me-2"></i> Email</h5>
            <p class="mb-0"><a href="mailto:info@ashrayauto.com" class="text-decoration-none text-dark">info@ashrayauto.com</a></p>
          </div>

          <div>
            <h6 class="text-orange fw-bold mb-2"><i class="fas fa-clock me-2"></i> Working Hours</h5>
            <p class="mb-0">Monday to Saturday: 8:30 AM – 8:00 PM<br>Sunday: Closed</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-md-7">
        <form class="contact-form">
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <div class="col-md-12 text-end">
              <button type="submit" class="btn btn-orange px-4">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>
