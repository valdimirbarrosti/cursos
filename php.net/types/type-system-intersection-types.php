<?php

interface Pagavel {
    public function pagar();
}

interface Verificavel {
    public function verificar();
}

class Transacao implements Pagavel, Verificavel {
    public function pagar() {
        echo "Transação paga!\n";
    }

    public function verificar() {
        echo "Transação verificada!\n";
    }
}

// Função que aceita apenas objetos que implementem ambas as interfaces Pagavel e Verificavel
function processarTransacao(Pagavel & Verificavel $transacao) {
    $transacao->verificar();
    $transacao->pagar();
}

// Criando uma instância de Transacao
$minhaTransacao = new Transacao();

// Chamando a função processarTransacao com a transação
processarTransacao($minhaTransacao);