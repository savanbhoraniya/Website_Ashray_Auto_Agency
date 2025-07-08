
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products - Ashray Auto Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php include 'includes/header.php'; ?>

  <style>
    .section-title {
      font-weight: bold;
      font-size: 2rem;
      color: #000;
      position: relative;
      text-align: left;
    }
    .section-title::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background-color: #ff7300;
      margin-top: 6px;
      border-radius: 2px;
    }

    .nav-pills .nav-link {
      transition: background-color 0.3s ease;
    }

    .nav-pills .nav-link:hover, .nav-pills .nav-link.active {
      background-color: #ff7300;
      color: white !important;
    }

    /* Adjustments for left-aligned content */
    .products-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .tab-content {
      margin-top: 30px;
    }

    /* Make the text left-aligned for category titles */
    .product-category-title {
      text-align: left;
      margin-bottom: 30px;
      margin-right:40px;
      font-weight: bold;
      font-size: 1.5rem;
    }

    /* Table styles */
    .product-table {
      width: 100%;
      border-collapse: collapse;
    }

    .product-table th, .product-table td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }

    .product-table th {
      background-color: #f8f9fa;
      font-weight: bold;
    }

    .product-table tbody tr:hover {
      background-color: #f1f1f1;
      cursor: pointer;
    }
    /* Space between category buttons */
.nav-pills .nav-item {
  margin-right: 10px;
}

/* Alternate row colors */
.product-table tbody tr:nth-child(odd) {
  background-color: #fff5eb; /* Light orange */
}

.product-table tbody tr:nth-child(even) {
  background-color: #ffffff; /* White */
}

.product-table tbody tr:hover {
  background-color: #ffe0c1; /* Slightly deeper orange on hover */
}


  </style>
</head>
<body>
  
<!-- Navbar - Add your navbar here -->

<div class="container py-5 products-container">
  <h2 class="section-title mb-4">Our Products</h2>

  <!-- Nav Pills for Categories -->
  <ul class="nav nav-pills mb-4" id="productsTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="geared-tab" data-bs-toggle="pill" href="#geared" role="tab" aria-controls="geared" aria-selected="true">Geared Two Wheeler</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="moped-tab" data-bs-toggle="pill" href="#moped" role="tab" aria-controls="moped" aria-selected="false">Moped Two Wheeler</a>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="productsTabContent">
    
    <!-- Geared Two Wheeler Tab -->
    <div class="tab-pane fade show active" id="geared" role="tabpanel" aria-labelledby="geared-tab">
      <div class="product-category-title">Geared Two Wheeler Products</div>
      <table class="product-table">
        <thead>
          <tr>
            <th>Company Name</th>
            <th>Item Name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Bajaj</td>
            <td>Clutch Plate</td>
          </tr>
          <tr>
            <td>Hero Honda</td>
            <td>Brake Shoe</td>
          </tr>
          <tr>
            <td>TVS</td>
            <td>Spark Plug</td>
          </tr>
          <!-- Add more products here -->
        </tbody>
      </table>
    </div>

    <!-- Moped Two Wheeler Tab -->
    <div class="tab-pane fade" id="moped" role="tabpanel" aria-labelledby="moped-tab">
      <div class="product-category-title">Moped Two Wheeler Products</div>
      <table class="product-table">
        <thead>
          <tr>
            <th>Company Name</th>
            <th>Item Name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hero</td>
            <td>Moped Tire</td>
          </tr>
          <tr>
            <td>Honda</td>
            <td>Moped Handlebar</td>
          </tr>
          <tr>
            <td>TVS</td>
            <td>Moped Seat</td>
          </tr>
          <!-- Add more products here -->
        </tbody>
      </table>
    </div>

  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



<?php include 'includes/footer.php'; ?>
