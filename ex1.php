<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="molde.css" type="text/css">
    <title>questão-1</title>
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
    <h2>Ímpar ou Par</h2>

    <?php
        $num = array(3, 44, 50, 48, 24, 30, 39, 22, 28, 47, 18, 5, 20, 31, 49);

        foreach ($num as $num){

            if ($num % 2 == 0){
                echo "$num é um número par </br></br>";
            }
            else{
                echo "$num é um número ímpar </br></br>";
            }
        }
    ?>
    </div class="result">

</body>
</html>
