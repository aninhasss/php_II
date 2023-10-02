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

    <form method="POST">
        <label>Data: </label><input id="data" name="data" type="text">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $data = $_POST["data"];
            $separador = data.split("/");

            switch ($mes) {
                case 1:
                    echo "Janeiro";
                    break;
                case 2:
                    return ("Fevereiro");
                     break;
                case 3:
                    return ("Março");
                    break;
                case 4:
                    return ("Abril");
                    break;
                case 5:
                    return ("Maio");
                    break;
                case 6:
                    return ("Junho");
                    break;
                case 7:
                    return ("Julho");
                    break;
                case 8:
                    return ("Agosto");
                    break;
                case 9:
                    return ("Setembro");
                    break;
                case 10:
                    return ("Outubro");
                    break;
                case 11:
                    return ("Novembro");
                    break;
                case 12:
                    return ("Dezembro");
                    break;
        
                default:
                    break;
            }
                
            alert("Data Formatada: \n" + separador[0] + " de " + enviar(parseInt(separador[1])) + " de " + separador[2]);
            
        }
    ?>
    </div class="result">

</body>
</html>
