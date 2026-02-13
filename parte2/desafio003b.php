<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas Avançado</title>
</head>
<body>
    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);    //true para deixar dentro de um Array / false geralmente é usado para tratamento em POO

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        if(isset($_GET['real']) && $_GET['real'] != ''){
            
            $real = $_GET['real'];
            $resultado = $real / $cotacao;
            $resultado_formatado = number_format($resultado, 2, '.', '');
        }
        
    ?>
    <div>
        <header>
            <h3>Conversor de Moeda Avançado</h3>
        </header>
        <br>
        <section>
            <form method="GET">
                <label></label>
                <input type="number" name="real" id="real" step="0.01" required></input>
                <p></p>
                <button type="submit">calcular</button>
            </form>
        </section>
        <br>
        <section>
                <?php
                    if(isset($resultado_formatado)){
                        echo "Seus R$" . $real . " equivalem a " . "<strong>" . $resultado_formatado . "U$ </strong>";
                    }
                ?>
        </section>
    </div>
    
</body>
</html>