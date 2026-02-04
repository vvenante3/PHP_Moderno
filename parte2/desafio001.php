<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>
<body>
    <?php
        // capturar método utilizado
        $metodo = $_SERVER['REQUEST_METHOD'];

        // trazer a variavel utilizada no form
        if($metodo === 'GET'){
           if(isset($_GET['numero'])){
            // fazer o processamento do resultado
                $numero = ($_GET['numero']);
                if(is_numeric($numero)){
                    // criar uma variavel pro antecessor;
                    $antecessor = $numero - 1;
                    // criar uma variavel pro sucessor;
                    $sucessor = $numero + 1;
                }
           }    
        }

        
    ?>
    <header>
        <h3>Verificador de Antecessor e Sucessor</h3>
    </header>
    <section>
        <form method="GET">
            <label>Digite um número:</label>
            <input type="number" name="numero" id="numero">

            <button type="submit">Verificar</button>
        </form>
    </section>
    <section>
        <?php
            // mostrar os números (se eles existirem e forem válidos):
                // numero inserido
                // numero antecessor
                // numero sucessor
        ?>
    </section>

</body>
</html>