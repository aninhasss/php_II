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
    <h2>Data</h2>
    <h4>Escolha uma data qualquer na forma dd/mm/aaaa</h4>

    <form method="POST">
        <label>Data: </label>
        <input type="text" id="data" name="data" required pattern="\d{2}/\d{2}/\d{4}" placeholder="dd/mm/aaaa">
        <input type="submit" value="Enviar">
    </form>

    <?php

        function dataPorExtenso($data) {
            list($dia, $mes, $ano) = explode('/', $data);

            switch ($mes) {
                case '01':
                    $mes_extenso = 'janeiro';
                    break;
                case '02':
                    $mes_extenso = 'fevereiro';
                    break;
                case '03':
                    $mes_extenso = 'março';
                    break;
                case '04':
                    $mes_extenso = 'abril';
                    break;
                case '05':
                    $mes_extenso = 'maio';
                    break;
                case '06':
                    $mes_extenso = 'junho';
                    break;
                case '07':
                    $mes_extenso = 'julho';
                    break;
                case '08':
                    $mes_extenso = 'agosto';
                    break;
                case '09':
                    $mes_extenso = 'setembro';
                    break;
                case '10':
                    $mes_extenso = 'outubro';
                    break;
                case '11':
                    $mes_extenso = 'novembro';
                    break;
                case '12':
                    $mes_extenso = 'dezembro';
                    break;
                default:
                    $mes_extenso = 'inválido';
                    break;
            }

            return "$dia de $mes_extenso de $ano";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $data = $_POST["data"];

            $data_extenso = dataPorExtenso($data);

            echo "Data: $data_extenso";          
        }

    ?>
    </div class="result">

</body>
</html>
