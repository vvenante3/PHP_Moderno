<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03 - Conversor de Moeda</title>
</head>
    <?php
        if(isset($_GET['real']) && isset($_GET['dolar'])){
            $real   = $_GET['real'];
            $dolar  = $_GET['dolar'];

            if($dolar == 0){
                echo "impossível realizar conversão. Valor digitado em R$ foi " . $real . "<br>";
            } else {
                $resultado = $real / $dolar;
            }
        }
    ?>
<body>
    <header>
        <h3>Conversor de moeda - Dollar </h3>
    </header>
    <br>
    <section>
        <?php
            if(isset($resultado)){
                echo "O valor de " . $real . " convertido em dolár é: " . $resultado;
            }
        ?>
    </section>
    <section>
        <form method="GET">
            <label>Valor em R$</label>
            <input type="number" name="real" id="rs" step="0.01" min="0" required></input>
            <p></p>
            <label>Cotação U$</label>
            <input type="number" name="dolar" id="us" step="0.01" min="0" required></input>
            <p></p>
            <button type="submit">Calcular</button>
        </form>
    </section>
</body>
</html>