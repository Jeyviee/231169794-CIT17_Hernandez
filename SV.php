<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV</title>
</head>
<body>
    <h1>5. Swapping Variables</h1>

    <?php
$x = 98;
$y = 89;

$temp = $x;
$x = $y;
$y = $temp;

echo "Before swapping: x = 98, y = 89 <br>";
echo "After swapping: x = $x, y = $y";
?>

</body>
</html>