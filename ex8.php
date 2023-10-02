<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="molde.css" type="text/css">
    <title>questão-8</title>
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
    <h2>Sorteio</h2>

    <?php
        $sorteio = random_int(1, 6);

        switch ($sorteio) {
            case 1:
                $imagem = "face1.png";
                break;
            case 2:
                $imagem = "face2.png";
                break;
            case 3:
                $imagem = "face3.png";
                break;
            case 4:
                $imagem = "face4.png";
                break;
            case 5:
                $imagem = "face5.png";
                break;
            case 6:
                $imagem = "face5.png";
                break;
        }

        echo $sorteio;
    ?>

    <img src="<?php echo $imagem; ?>" alt="Face do dado">

    </div class="result">

</body>
</html>
