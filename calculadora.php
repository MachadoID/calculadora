<?php

include("index.php");

$valor1 = isset($_POST['texto-valor1']) && is_numeric($_POST['texto-valor1']) ? $_POST['texto-valor1'] : 0;
$valor2 = isset($_POST['texto-valor2']) && is_numeric($_POST['texto-valor2']) ? $_POST['texto-valor2'] : 0;

$operacao = isset($_POST['operacao']) ? $_POST['operacao'] : null;

switch ($operacao) {
    case 'Soma':
        $resultado = $valor1 + $valor2;
        echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        break;
    case 'Subtração':
        $resultado = $valor1 - $valor2;
        echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        break;
    case 'Multiplicação':
        $resultado = $valor1 * $valor2;
        echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        break;
    case 'Divisão':
        $resultado = $valor1 / $valor2;
        echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        break;
    default:
        echo "<center><br><h3>Escolha um operador<h3></center><br>";
}
