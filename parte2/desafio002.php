<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 - Sorteio de número</title>
</head>
    <?php
        if($metodo === 'GET'){
            if(isset($_GET['botao'])){
                //gerar número aleatorio
                    // minimo 0 | maximo 100
                //guardar em uma variavel 
            }
        } else {
            echo "método é diferente que GET";
        }
    ?>
<body>
    <header>
       <h3>Sorteio de número</h3>
    </header>
    <br>
    <section>
        <form method="GET">
            <button type="submit" name="botao" value="numero_aleatorio">Lançar Dado</button>
        </form>
    </section>
    <br>
    <?php
        // resultado
    ?>

    
</body>
</html>