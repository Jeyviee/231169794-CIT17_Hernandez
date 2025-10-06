<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCE</title>
</head>
<body>
    <h1>12. Travel Cost Estimator</h1>

    <?php
$distance = 150;
$fuel_consumption = 12; 
$fuel_price = 70; 
$fuel_needed = $distance / $fuel_consumption;
$travel_cost = $fuel_needed * $fuel_price;

echo "distance = 150 km <br> fuel consumption = 12 km per Liter<br> fuel price = 70 per Liter<br><br>";
echo "Estimated Travel Cost: ₱" . round($travel_cost, 2);
?>

</body>
</html>