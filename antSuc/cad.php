<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<h1>Resultado Final</h1>
    <?php
        $num = $_GET["numero"];
        $ant = $num - 1;
        $suc = $num + 1;
        echo "O número escolhido foi <strong>$num</strong><br>
        O antecessor do seu número é $ant<br>
        O sucessor do seu número é $suc";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
    </body>
</html>