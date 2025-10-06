<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STM</title>
</head>
<body>
    <h1>8. String Manipulation</h1>

    <?php
$sentence = "The sentence is stored.";

echo "The sentence is stored.<br><br>";
echo "Number of characters: " . strlen($sentence) . "<br>";
echo "Number of words: " . str_word_count($sentence) . "<br>";
echo "Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence);
?>

</body>
</html>