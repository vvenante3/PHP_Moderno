<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface POST</title>
</head>
<body>
    <?php

        $erros = [];
        // Criar $metodo que identifica se ira ser GET, POST, PUT, DELETE...
        $metodo = $_SERVER['REQUEST_METHOD'];

        // Se metodo for 'POST', executar..
        if($metodo === 'POST'){
            // Se variavel 'primeir_num' não estiver null, executar..
            if(isset($_POST['primeiro_num'])){

            // campos/inputs de 'forms.php' que irao ser "puxados"
                $primeiro_num = htmlspecialchars($_POST['primeiro_num']);
                $segundo_num = htmlspecialchars($_POST['segundo_num']);
                $expressao = htmlspecialchars($_POST['expressao']);

                // fazer validacao dos campos 

                if($primeiro_num === '' || !is_numeric($primeiro_num)){
                    $erros[] = "O campo do primeiro número está vazio/inválido<br>";
                }

                if($segundo_num === '' || !is_numeric($segundo_num)){
                    $erros[] = "O campo do segundo número está vazion/inválido<br>";
                }

                if($expressao === ''){
                    $erros[] = "Não há uma expressão definida<br.";
                }

                // Se houver erros, exibi-los

                if(!empty($erros)){
                    foreach($erros as $erro){
                        echo "<li>$erro</li>";
                    }
                    return;
                }

                // parte que irá apresentar o resultado




            }
            


        } else {
            echo "não é método POST";
        }

    ?>

    <a href="forms.php">Voltar</a>

</body>
</html>