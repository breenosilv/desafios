<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v2.0</h1>
    <?php 
    $real = $_GET["numero"];
    $inicio = date("m-d-Y", strtotime ("-7 days"));
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $padrão =  numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $conversao = $real / $cotacao;

    echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrão, $conversao, "USD") . "</strong></p>";

    //echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong> US$ " . number_format($conversao, 2, ",", ".") . "</strong>";

    
    ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
    
</body>
</html>