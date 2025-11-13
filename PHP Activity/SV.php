<!DOCTYPE html>
<html>
<head>
  <title>Swap Two Numbers</title>
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
    <h3>5. Swap Two Numbers</h3>

    <form method="post">
      X: <input type="number" name="x" value="<?php echo $_POST['x'] ?? ''; ?>"><br>
      Y: <input type="number" name="y" value="<?php echo $_POST['y'] ?? ''; ?>"><br>
      <input type="submit" value="Swap">
    </form>

    <?php
    if ($_POST) {
      $x = $_POST['x'];
      $y = $_POST['y'];
      $temp = $x;
      $x = $y;
      $y = $temp;

      echo "<h4>Original Inputs:</h4>";
      echo "<div class='result'>X = {$_POST['x']}, Y = {$_POST['y']}</div><br>";

      echo "<h4>After Swapping:</h4>";
      echo "<div class='result'>X = $x, Y = $y</div>";
    }
    ?>
  </div>
</body>
</html>
