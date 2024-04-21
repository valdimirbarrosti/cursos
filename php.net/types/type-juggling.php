<?php

$a = '10';   // string
$b = 5;      // integer
$c = $a + $b;
echo $c;     // Saída: 15 (string '10' é convertida para inteir

$a = 0;        // integer
$b = '';       // string vazia
$c = false;    // boolean
var_dump((bool)$a);   // Saída: bool(false)
var_dump((bool)$b);   // Saída: bool(false)
var_dump((bool)$c);   // Saída: bool(false)

$a = 10.5;   // float
$b = (int)$a;
echo $b;     // Saída: 10 (parte decimal é truncada)