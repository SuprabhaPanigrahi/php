<?php
include_once 'database/connection.php';
mysqli_select_db($conn, 'customer_db');
$selected_country_id = 0;
$selected_state_id = 0;
$selected_city_id=0;
if ($_POST) {
  if (isset($_POST['country'])) {
    $selected_country_id = $_POST['country'];
  }
  if (isset($_POST['state'])) {
    $selected_state_id = $_POST['state'];
  }
   if (isset($_POST['city'])) {
    $selected_city_id = $_POST['city'];
  }
} else {

  echo "This is the initial page load.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container mt-5">
    <h1>Customer Form</h1>
    <form method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="phone" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <select class="form-select" id="country" name="country" required onchange="submitForm()">
          <option value="">Select Country</option>

          <?php


          // Fetch countries from the database
          $result = mysqli_query($conn, "SELECT * FROM countries WHERE is_deleted = 0");
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value={$row['id']} " . ($selected_country_id === $row['id'] ? 'selected' : '') . ">{$row['name']}</option>";
          }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <select class="form-select" id="state" name="state" onchange="submitForm()">
          <option value="">Select State</option>
          <?php
          if ($selected_country_id > 0) {

            $sql = "SELECT * FROM states WHERE countryId = $selected_country_id AND is_deleted = 0";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value={$row['id']} " . ($selected_state_id === $row['id'] ? 'selected' : '') . ">{$row['name']}</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <select class="form-select" id="city" name="city">
          <option value="">Select City</option>
          <!-- City options will be populated here -->
          <?php
          if ($selected_state_id > 0) {
            $sql = "SELECT * FROM cities WHERE stateId = $selected_state_id AND is_deleted = 0";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value={$row['id']} " . ($selected_city_id === $row['id'] ? 'selected' : '') . ">{$row['name']}</option>";
            }
          }
          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script>
    function submitForm() {
      document.querySelector('form').submit();
    }
  </script>
</body>

</html>