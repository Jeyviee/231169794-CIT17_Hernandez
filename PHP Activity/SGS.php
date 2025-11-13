<!DOCTYPE html>
<html>
<head>
  <title>Simple Grading System</title>
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

    .passed {
      color: green;
      font-weight: bold;
    }

    .failed {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <h3>10. Simple Grading System</h3>

    <form method="post" action="">
      Math: <input type="number" name="math" required><br><br>
      English: <input type="number" name="english" required><br><br>
      Science: <input type="number" name="science" required><br><br>
      <input type="submit" value="Compute Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $math = $_POST['math'];
        $english = $_POST['english'];
        $science = $_POST['science'];

        $average = ($math + $english + $science) / 3;

        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        function passFail($score) {
            if ($score >= 75) {
                return "<span class='passed'>PASSED</span>";
            } else {
                return "<span class='failed'>FAILED</span>";
            }
        }

        $status = $average >= 75 ? "<span class='passed'>PASSED</span>" : "<span class='failed'>FAILED</span>";

        echo "<div class='result'>";
        echo "<h3>Results:</h3>";
        echo "Math: $math - " . passFail($math) . "<br>";
        echo "English: $english - " . passFail($english) . "<br>";
        echo "Science: $science - " . passFail($science) . "<br><br>";
        echo "Average: " . round($average, 2) . "<br>";
        echo "Grade: $grade<br>";
        echo "Overall: $status";
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
