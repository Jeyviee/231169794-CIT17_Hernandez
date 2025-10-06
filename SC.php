<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC</title>
</head>
<body>
    <h1>6. Salary Calculator</h1>

    <?php
$basic_salary = 30000;
$allowance = 3000;
$deduction = 2000;

$net_salary = $basic_salary + $allowance - $deduction;

echo "Basic Salary = 30000<br>";
echo "Allowance = 3000<br>";
echo "deduction = 2000 <br><br>";
echo "Net Salary: ₱$net_salary";
?>

</body>
</html>