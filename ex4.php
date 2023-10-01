<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="molde.css" type="text/css">
    <title>questão-4</title>
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
    <h2>Cadastro</h2>

    <?php
        $nomes = array();
        $cidades = array();
        $idades = array();
        $sexos = array();

        function cadastro($nome, $cidade, $idade, $sexo) {
            global $nomes, $cidades, $idades, $sexos;

            $nomes[] = $nome;
            $cidades[] = $cidade;
            $idades[] = $idade;
            $sexos[] = $sexo;
        }

        cadastro("João", "Santos", 25, "Masculino");
        cadastro("Maria", "São Paulo", 30, "Feminino");
        cadastro("Carlos", "Santos", 22, "Masculino");
        cadastro("Ana", "Rio de Janeiro", 19, "Feminino");
        cadastro("Pedro", "Santos", 28, "Masculino");
        cadastro("Julia", "São Paulo", 17, "Feminino");
        cadastro("Fernando", "Santos", 35, "Masculino");
        cadastro("Camila", "Rio de Janeiro", 21, "Feminino");
        cadastro("Ricardo", "São Paulo", 20, "Masculino");
        cadastro("Luana", "Santos", 23, "Feminino");

        echo "1. Listagem de nomes e idades das pessoas cadastradas:<br><br>";
        for ($i = 0; $i < count($nomes); $i++) {
            echo "$nomes[$i], $idades[$i] anos <br>";
        }
            
        echo "<br> 2. Listagem de todos os nomes de quem mora em Santos:<br><br>";
        for ($i = 0; $i < count($nomes); $i++) {
            if($cidades[$i] == "Santos"){
                echo "$nomes[$i] <br>";
            }
        }

        echo "<br> 3. Listagem de todos os nomes de quem tem mais de 18 anos:<br><br>";
        for ($i = 0; $i < count($nomes); $i++) {
            if($idades[$i] > 18){
                echo "$nomes[$i] <br>";
            }
        }

        $count = array_count_values($sexos)["Masculino"];
        echo "<br> 4. Quantidade de pessoas cadastradas do sexo masculino: $count";
    ?>
    </div class="result">

</body>
</html>