<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
?>
<?php
$mensagem = <<<TEXTO
Este é um exemplo de bloco de texto Heredoc.
Você pode incluir várias linhas de texto aqui.
Variáveis como \$variaveis são interpretadas, mas escape as aspas duplas se necessário.

TEXTO;

echo $mensagem;

$mensagem = <<<'TEXTO'
Este é um exemplo de bloco de texto Nowdoc.
\$Variáveis não são interpretadas aqui.
Você pode incluir aspas duplas sem escapá-las: "Texto entre aspas duplas".

TEXTO;

echo $mensagem;

?>
<?php
$juice = "apple";

echo "He drank some $juice juice." . PHP_EOL;

// Unintended. "s" is a valid character for a variable name, so this refers to $juices, not $juice.
echo "He drank some juice made of $juices." . PHP_EOL;

// Explicitly specify the end of the variable name by enclosing the reference in braces.
echo "He drank some juice made of {$juice}s.";

?>


<?php
$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
echo "$people->john then said hello to $people->jane.".PHP_EOL;
echo "$people->john's wife greeted $people->robert.".PHP_EOL;
echo "$people->robert greeted the two $people->smiths."; // Won't work
?>

<?php
$string = 'string';
echo "The character at index -2 is $string[-2].", PHP_EOL;
$string[-3] = 'o';
echo "Changing the character at index -3 to o gives $string.", PHP_EOL;
?>

<?php

$nome = "João";
echo "Olá, {$nome}!"; // Saída: Olá, João!

$array = ['vermelho', 'verde', 'azul'];
echo "A cor preferida é {$array[0]}."; // Saída: A cor preferida é vermelho.

$objeto = new stdClass();
$objeto->nome = "Maria";
echo "Olá, {$objeto->nome}!"; // Saída: Olá, Maria!

class Pessoa {
    public function cumprimentar() {
        return "Olá!";
    }
}

$pessoa = new Pessoa();
echo "{$pessoa->cumprimentar()} Mundo!"; // Saída: Olá Mundo!