<?php

//indexação
$numArray = array("apple", "banana", "orange"); //array numéric
$assocArray = array("a" => "apple", "b" => "banana", "c" => "orange"); //array associativo

//Acessando elementos
echo $numArray[0]; // Saída: apple
echo $assocArray["b"]; // Saída: banana

//Adição de elementos com funções
$fruits = array();
array_push($fruits, "apple", "banana", "orange");
var_dump($fruits);

//remoção de elementos
unset($fruits[1]); // Remove o elemento com índice 1 (banana)
var_dump($fruits);


//mesclagem de arrays
$moreFruits = array("grape", "kiwi");
$allFruits = array_merge($fruits, $moreFruits);
var_dump($allFruits);

//iteração

foreach ($allFruits as $fruit) {
    echo $fruit . ", ";
}

//array multidimensional

$multiArray = array(
    array("apple", "banana"),
    array("orange", "grape")
);
echo $multiArray[0][1]; // Saída: banana