<!DOCTYPE html>
<html>
<head>
  <title>Currency Converter</title>
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
      width: 350px;
      text-align: center;
    }

    h3 {
      color: #4b0082;
      margin-bottom: 20px;
    }

    input[type="number"] {
      width: 80%;
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
    <h3>11. Currency Converter (PHP → USD, EUR, JPY)</h3>

    <form method="post">
      Amount in PHP: <input type="number" step="any" name="php" value="<?php echo $_POST['php'] ?? ''; ?>"><br>
      <input type="submit" value="Convert">
    </form>

    <?php
    if ($_POST) {
      $php = $_POST['php'];
      $usd_rate = 0.018;
      $eur_rate = 0.017;
      $jpy_rate = 2.67;

      echo "<h4>Input:</h4>";
      echo "<div class='result'>₱$php</div><br>";

      echo "<h4>Converted:</h4>";
      echo "<div class='result'>";
      echo "USD: $" . round($php * $usd_rate, 2) . "<br>";
      echo "EUR: €" . round($php * $eur_rate, 2) . "<br>";
      echo "JPY: ¥" . round($php * $jpy_rate, 2);
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
