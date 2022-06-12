<?php

    include ("./index.php");

    if($_POST){
        $valor1 = $_POST ['texto-valor1'];
        $valor2 = $_POST ['texto-valor2'];
        $operacao = $_POST['operacao'];
        $resultado = [];

        if ($operacao == 'Soma'){
            $resultado = $valor1 + $valor2;
            echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        } else if ($operacao == 'Subtração'){
            $resultado = $valor1 - $valor2;
            echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        } else if ($operacao == 'Multiplicação'){
            $resultado = $valor1 * $valor2;
            echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        } else if ($operacao == 'Divisão'){
            $resultado = $valor1 / $valor2;
            echo "<center><br><h3>O resultado é: $resultado<h3></center><br>";
        }
    }

?>