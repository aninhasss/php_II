<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="molde.css" type="text/css">
    <title>questão-9</title>
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
    <h2>Mês Referente</h2>

    <form method="POST">
        <input id="num" name = "num" type="number">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["num"];

            if ($num == 1 ) {
                echo "Número: " . $num . "<br>Mês Referente: Janeiro";
            }
            elseif ($num == 2 ) {
                echo "Número: " . $num . "<br>Mês Referente: Fevereiro";
            }
            elseif ($num == 3 ) {
                echo "Número: " . $num . "<br>Mês Referente: Março";
            }
            elseif ($num == 4 ) {
                echo "Número: " . $num . "<br>Mês Referente: Abril";
            }
            elseif ($num == 5 ) {
                echo "Número: " . $num . "<br>Mês Referente: Maio";
            }
            elseif ($num == 6 ) {
                echo "Número: " . $num . "<br>Mês Referente: Junho";
            }
            elseif ($num == 7 ) {
                echo "Número: " . $num . "<br>Mês Referente: Julho";
            }
            elseif ($num == 8 ) {
                echo "Número: " . $num . "<br>Mês Referente: Agosto";
            }
            else if ($num == 9 ) {
                echo "Número: " . $num . "<br>Mês Referente: Setembro";
            }
            else if ($num == 10 ) {
                echo "Número: " . $num . "<br>Mês Referente: Outubro";
            }
            else if ($num == 11 ) {
                echo "Número: " . $num . "<br>Mês Referente: Novembro";
            }
            else if ($num == 12 ) {
                echo "Número: " . $num . "<br>Mês Referente: Dezembro";
            }
            else if ($num <= 0 || $num >= 13 ) {
                echo "Erro: Esse mês não existe";
            }
        }
    ?>
    </div class="result">

</body>
</html>
