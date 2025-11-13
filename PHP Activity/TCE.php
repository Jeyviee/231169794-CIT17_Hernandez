<!DOCTYPE html>
<html>
<head>
  <title>Travel Cost Estimator</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #a47fcf, #6aa0d8);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .calculator {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px); 
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 400px;
      text-align: center;
    }

    h3 {
      color: #4b0082;
      margin-bottom: 20px;
    }

    input[type="number"] {
      width: 85%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    input[type="submit"] {
      background: #6a0dad;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #8e44ad;
    }

    h4 {
      color: #333333;
      margin-top: 20px;
    }

    .result {
      background: rgba(255, 255, 255, 0.9); 
      padding: 15px;
      margin-top: 10px;
      border-radius: 8px;
      text-align: left;
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>
  <div class="calculator">
    <h3>12. Travel Cost Estimator</h3>

    <form method="post">
      Distance (km): <input type="number" step="any" name="distance" value="<?php echo $_POST['distance'] ?? ''; ?>"><br>
      Fuel Consumption (km per liter): <input type="number" step="any" name="consumption" value="<?php echo $_POST['consumption'] ?? ''; ?>"><br>
      Fuel Price (₱ per liter): <input type="number" step="any" name="price" value="<?php echo $_POST['price'] ?? ''; ?>"><br>
      <input type="submit" value="Estimate Cost">
    </form>

    <?php
    if ($_POST) {
      $distance = $_POST['distance'];
      $consumption = $_POST['consumption'];
      $price = $_POST['price'];

      echo "<h4>Inputs:</h4>";
      echo "<div class='result'>Distance: $distance km<br>Consumption: $consumption km/L<br>Fuel Price: ₱$price</div><br>";

      if ($consumption > 0) {
        $fuel_needed = $distance / $consumption;
        $cost = $fuel_needed * $price;
        echo "<h4>Estimated Travel Cost:</h4>";
        echo "<div class='result'>₱" . round($cost, 2) . "</div>";
      } else {
        echo "<div class='result'>Fuel consumption must be greater than zero.</div>";
      }
    }
    ?>
  </div>
</body>
</html>
