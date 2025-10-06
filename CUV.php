<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUV</title>
</head>
<body>
    <h1>11. Currency Converter</h1>

    <?php
$php_amount = 500;

$usd_rate = 0.018;
$eur_rate = 0.017;
$jpy_rate = 2.67;

$to_usd = $php_amount * $usd_rate;
$to_eur = $php_amount * $eur_rate;
$to_jpy = $php_amount * $jpy_rate;

echo "PHP500 <br><br>";
echo "₱$php_amount = $" . round($to_usd, 2) . " USD<br>";
echo "₱$php_amount = €" . round($to_eur, 2) . " EUR<br>";
echo "₱$php_amount = ¥" . round($to_jpy, 2) . " JPY";
?>

</body>
</html>