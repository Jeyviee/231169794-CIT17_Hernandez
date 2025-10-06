<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h1>7. BMI Calculator</h1>

    <?php
$weight = 69;
$height = 1.9; 

$bmi = $weight / ($height * $height);

echo "weight = 69kg <br>";
echo "height = 1.9m <br><br>";
echo "BMI: " . round($bmi, 2);
?>

</body>
</html>