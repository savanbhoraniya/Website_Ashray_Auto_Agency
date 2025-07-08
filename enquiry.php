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


  <!-- Enquiry Form Section -->
<!-- Enquiry Form Section -->
<section id="enquiry-form" class="py-5" style="background: linear-gradient(to right, #ff7300, #f1f1f1);">
  <div class="container">
    <h2 class="text-center mb-4 text-white">Get in Touch with Us</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <form action="your_form_processing_script.php" method="POST" class="shadow-lg p-5 rounded-3 bg-light">
          <div class="row">
            <!-- Name -->
            <div class="col-md-6 mb-4">
              <label for="name" class="form-label text-dark">Full Name</label>
              <input type="text" id="name" name="name" class="form-control border-0 shadow-sm rounded-pill" placeholder="Enter your full name" required>
            </div>

            <!-- Email -->
            <div class="col-md-6 mb-4">
              <label for="email" class="form-label text-dark">Email Address</label>
              <input type="email" id="email" name="email" class="form-control border-0 shadow-sm rounded-pill" placeholder="Enter your email" required>
            </div>
          </div>

          <div class="row">
            <!-- Phone Number -->
            <div class="col-md-6 mb-4">
              <label for="phone" class="form-label text-dark">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control border-0 shadow-sm rounded-pill" placeholder="Enter your phone number" required>
            </div>

            <!-- Interest -->
            <div class="col-md-6 mb-4">
              <label for="interest" class="form-label text-dark">Product/Service</label>
              <select id="interest" name="interest" class="form-select border-0 shadow-sm rounded-pill" required>
                <option value="" disabled selected>Select an option</option>
                <option value="Car Purchase">Car Purchase</option>
                <option value="Car Service">Car Service</option>
                <option value="Spare Parts">Spare Parts</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="mb-4">
            <label for="message" class="form-label text-dark">Message</label>
            <textarea id="message" name="message" rows="5" class="form-control border-0 shadow-sm rounded-3" placeholder="Write your message" required></textarea>
          </div>

          <!-- Submit Button -->
          <div class="text-center">
            <button type="submit" class="btn btn-orange btn-lg rounded-pill shadow-lg">
              <i class="fas fa-paper-plane me-2"></i> Submit Enquiry
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<style> 
/* Enquiry Form Section */
#enquiry-form {
  background: linear-gradient(to right, #ff7300, #f1f1f1);
  padding: 50px 0;
  background-size: cover;
  background-position: center center;
}

#enquiry-form h2 {
  font-size: 2.5rem;
  color: #fff;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 20px;
  text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

/* Form Styles */
#enquiry-form .form-control,
#enquiry-form .form-select,
#enquiry-form textarea.form-control {
  border-radius: 30px;
  padding: 15px;
  font-size: 1rem;
  border: 1px solid #ddd;
  transition: all 0.3s ease-in-out;
}

#enquiry-form .form-control:focus,
#enquiry-form .form-select:focus,
#enquiry-form textarea.form-control:focus {
  border-color: #ff7300;
  box-shadow: 0 0 8px rgba(255, 115, 0, 0.5);
}

#enquiry-form .btn-orange {
  background-color: #ff7300;
  color: #fff;
  border: none;
  padding: 12px 25px;
  font-size: 1.1rem;
  border-radius: 50px;
  transition: background-color 0.3s ease, transform 0.3s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

#enquiry-form .btn-orange:hover {
  background-color: #e75f00;
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Form Input Focus Effects */
.form-control:focus, .form-select:focus, textarea.form-control:focus {
  border-color: #ff7300 !important;
  box-shadow: 0 0 6px rgba(255, 115, 0, 0.5);
}

/* Responsive Styling */
@media (max-width: 767px) {
  #enquiry-form h2 {
    font-size: 2rem;
  }
  .form-control, .form-select, textarea.form-control {
    font-size: 0.9rem;
  }
  .btn-orange {
    font-size: 1rem;
    padding: 10px 20px;
  }
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include 'includes/footer.php'; ?>
