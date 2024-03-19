<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatorio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Olá mundo</h1>
    <?php 
        echo "Gerando um número aleatorio entre 0 e 100...<br>";
        echo "O número gerado foi " . mt_rand(0,100);
    ?>
    <button onclick="window.location.reload()">Gerar outro</button>
    </main>
</body>
</html>