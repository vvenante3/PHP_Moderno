<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 - Sorteio de número</title>
</head>
    <?php
        if(isset($_GET['botao'])){
                $numero_aleatorio = random_int(0, 100);
        }
    ?>
<body>
    <header>
       <h3>Sorteio de número</h3>
    </header>
    <br>
    <section>
        <?php
            if(isset($numero_aleatorio)){
                echo $numero_aleatorio;
            }
        ?>
    <p></p>
    </section>
    <section>
        <form method="GET">
            <button type="submit" name="botao" value="numero_aleatorio">Lançar Dado</button>
        </form>
    </section>
    <br>
</body>
</html>