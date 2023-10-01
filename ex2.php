<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="molde.css" type="text/css">
    <title>questão-2</title>
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
    <h2>Negativo, Positivo, Ímpar ou Par</h2>

    <?php
        $num = array(-3, 44, -30, 39, 22, -28, 47, 5, -20, 49);
        $positivo = 0;
        $negativo = 0;
        $impar = 0;
        $par = 0;

        foreach ($num as $num){

            if ($num >= 0){
                $positivo++;
            }
            if ($num <0){
                $negativo++;
            }
            if ($num % 2 == 0){
                $par++;
            }
            if ($num % 2 != 0){
                $impar++;
            }
        }

        echo "Positivos - $positivo </br></br> Negativos - $negativo </br></br> ímpar - $impar </br></br> Par - $par";
    ?>
    </div class="result">

</body>
</html>
