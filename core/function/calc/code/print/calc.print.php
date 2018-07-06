<?php
require __DIR__.'/../src/calc.php';

// Calculator

// adding 1 + 1
print(calc(1, 1, '+'));
print(2);

// subtracting 1 - 1
print(calc(1, 1, '-'));
print(0);

// multiplying 1 * 1
print(calc(1, 1, '*'));
print(1);

// dividing 1 / 1
print(calc(1, 1, '/'));
print(1);

?>