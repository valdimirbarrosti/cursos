<?php

function add(int $a, int $b): int {
    return $a + $b;
}
echo add(5, 3); // Saída: 8

function divide(float $a, float $b): float {
    if ($b == 0) {
        throw new InvalidArgumentException('Divisão por zero');
    }
    return $a / $b;
}
echo divide(10, 2); // Saída: 5

function process(string $input) {
    echo $input;
}
process('Hello'); // Saída: Hello

function greet(?string $name) {
    if ($name !== null) {
        echo "Hello, $name!";
    } else {
        echo "Hello, World!";
    }
}
greet('John'); // Saída: Hello, John!