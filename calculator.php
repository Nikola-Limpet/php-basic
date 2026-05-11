<?php
/**
 * Interactive Calculator
 * Run with: php calculator.php
 */

echo "=== Simple PHP Calculator ===\n\n";

// You can also pass arguments: php calculator.php 10 5
if ($argc >= 3) {
    $num1 = (float)$argv[1];
    $num2 = (float)$argv[2];
    echo "Using command-line arguments: $num1 and $num2\n";
} else {
    // Hardcoded values for demo
    $num1 = 15;
    $num2 = 4;
    echo "Using default values: $num1 and $num2\n";
    echo "(Tip: Run as 'php calculator.php 20 5' to use your own numbers)\n";
}

echo "\n";
echo "Addition:       $num1 + $num2 = " . ($num1 + $num2) . "\n";
echo "Subtraction:    $num1 - $num2 = " . ($num1 - $num2) . "\n";
echo "Multiplication: $num1 × $num2 = " . ($num1 * $num2) . "\n";

if ($num2 != 0) {
    echo "Division:       $num1 ÷ $num2 = " . round($num1 / $num2, 2) . "\n";
    echo "Modulo:         $num1 % $num2 = " . ($num1 % $num2) . "\n";
} else {
    echo "Cannot divide by zero!\n";
}

echo "\nPower:          $num1^2 = " . pow($num1, 2) . "\n";
echo "Square root:    √$num1 = " . round(sqrt($num1), 2) . "\n";

echo "\nDone!\n";
?>
