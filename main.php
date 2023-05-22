<?php 
header("Content-type: text/html; charset=utf-8");

// Questão 1 //
$num = 4; // Valor passado

$quadrado = function() use($num) {
    echo "O número elevado ao quadrado é: " . ($num ** 2);
};
echo "<br><br>Questão 1: <br>";
$quadrado();

// Saída: "O número elevado ao quadrado é: 16"


// Questão 2 //
$string = "Eu odeio bootstrap!!!!";

$maiusculo = function() use($string) {
    echo strtoupper($string);
};

echo "<br><br>Questão 2: <br>";
$maiusculo();

// Saída: EU ODEIO BOOTSTRAP!!!!


// Questão 3 //
function aplicarOperacao($n1, $n2, $callback) {
    return
}
?>