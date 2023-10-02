<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="molde.css" type="text/css">
    <title>questão-5</title>
</head>

<body>
    <div class="link">
        <a href="ex1.php">questao-1</a>
        <a href="ex2.php">questao-2</a>
        <a href="ex3.php">questao-3</a>
        <a href="ex4.php">questao-4</a>
        <a href="ex5.php">questao-5</a>
        <a href="ex6.php">questao-6</a>
        <a href="ex7.php">questao-7</a>
        <a href="ex8.php">questao-8</a>
        <a href="ex9.php">questao-9</a>
        <a href="ex10.php">questao-10</a>
        <a href="ex11.php">questao-11</a>
    </div class="link">

    <div class="result">
    <h2>Sequência Fibonacci</h2>

<?php

    function fibonacci($n) {
        $fibonacci = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
        }

        $numeroDeTermos = 150;
        $sequenciaFibonacci = fibonacci($numeroDeTermos);

        echo "<Sequência de Fibonacci - Primeiros $numeroDeTermos termos:</h2>";

        foreach ($sequenciaFibonacci as $termo) {
            echo $termo . "<br>";
        }
?>
