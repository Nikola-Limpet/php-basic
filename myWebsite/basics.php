<?php
/**
 * PHP Basics Example
 * Run with: php basics.php
 */

// 1. Variables and Output
$name = "Learner";
$year = 2026;
echo "Welcome to PHP, $name!\n";
echo "Year: $year\n\n";

// 2. Working with Arrays
$tasks = [
    "Learn PHP syntax",
    "Build a simple app",
    "Practice every day"
];

echo "Your Learning Tasks:\n";
foreach ($tasks as $index => $task) {
    echo ($index + 1) . ". $task\n";
}

// 3. Simple Function
function calculateArea(float $width, float $height): float {
    return $width * $height;
}

echo "\nRectangle area (5x3): " . calculateArea(5, 3) . "\n";

// 4. Conditionals
$score = 85;
if ($score >= 90) {
    $grade = 'A';
} elseif ($score >= 80) {
    $grade = 'B';
} elseif ($score >= 70) {
    $grade = 'C';
} else {
    $grade = 'F';
}
echo "Score: $score, Grade: $grade\n";

// 5. Associative Array (like a dictionary)
$student = [
    "name" => "Alice",
    "age" => 22,
    "major" => "Computer Science"
];

echo "\nStudent Info:\n";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": $value\n";
}

echo "\n--- Script Complete ---\n";
?>
