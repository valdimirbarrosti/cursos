<?php

// Esta função aceita um parâmetro que pode ser do tipo string ou int
function exibirMensagem(string|int $mensagem) {
    echo $mensagem . "\n";
}

// Chamando a função com uma string
exibirMensagem("Olá, mundo!");

// Chamando a função com um número inteiro
exibirMensagem(42);