<!DOCTYPE html>
<html>
<head>
  <title>Introduce Yourself</title>
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

    .form-container {
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

    input[type="text"], input[type="number"] {
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

    .result {
      background: rgba(255, 255, 255, 0.9);
      padding: 15px;
      margin-top: 20px;
      border-radius: 8px;
      text-align: left;
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h3>1. Introduce Yourself</h3>

    <form method="post">
      Name: <input type="text" name="name"><br>
      Age: <input type="number" name="age"><br>
      Favorite Color: <input type="text" name="color"><br>
      <input type="submit" value="Submit">
    </form>

    <?php
    if ($_POST) {
      $name = $_POST['name'];
      $age = $_POST['age'];
      $color = $_POST['color'];

      echo "<div class='result'>";
      echo "Hi, I’m $name, I am $age years old, and my favorite color is $color.";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
