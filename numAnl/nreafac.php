<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
        $num = $_GET["numero"];
        echo "Analisando o número <strong> ". number_format($num,3 , ",", "."). "</strong> informado pelo usuario:";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong>";

        echo "<li> A parte inteira do número é <strong>" . number_format($fra, 3, ",", "." ) . "</strong></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>