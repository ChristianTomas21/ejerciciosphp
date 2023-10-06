<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
}

$division = $num1 / $num2;

echo "Número 1: " . $num1 . "<br>";
echo "Número 2: " . $num2 . "<br>";

echo "Suma: " . $division;