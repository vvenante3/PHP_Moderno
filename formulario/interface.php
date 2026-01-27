<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface POST</title>
</head>
<body>
    <?php

        // Criar $metodo que identifica se ira ser GET, POST, PUT, DELETE...
        $metodo = $_SERVER('REQUEST_METHOD');

        // Se metodo for 'POST', executar..
        if($metodo === 'POST'){
            // Se variavel 'primeir_num' não estiver null, executar..
            if(isset($_POST['primeiro_num'])){

            // campos/inputs de 'forms.php' que irao ser "puxados"
                $primeiro_num = htmlspecialchars($_POST['primeiro_num']);
                $segundo_num = htmlspecialchars($_POST['segundo_num']);
                $expressao = htmlspecialchars($_POST['expressao']);

                // fazer validacao dos campos

                // Se houver erros, exibi-los

                // parte que irá apresentar o resultado


            }
            


        } else {
            echo "não é método POST";
        }






    
    ?>

    <a href="forms.php">Voltar</a>

</body>
</html>