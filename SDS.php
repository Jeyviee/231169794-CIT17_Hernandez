<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDS</title>
</head>
<body>
    <h1>10. Simple Grading System</h1>

    <?php
$math = 91;
$english = 95;
$science = 97;

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

echo "Grades: Math= 91, English = 95, Science = 97<br><br>";
echo "Average: " . round($average, 2) . "<br>";
echo "Grade: $grade";
?>

</body>
</html>