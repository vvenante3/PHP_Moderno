<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08 - Raízes de um Número</title>
</head>
<body>
    <header>
        <h3>Raízes de um Número</h3>
    </header>
    <section>
        <?php
            if(isset($_POST['num']) && ($POST['num'] =! 0)){
                $numero = $_POST['num'];
                $raiz = $numero * $numero;
                $cubico = $numero * $numero * $numero;
            }
        ?>
    </section>
    <main>
            <form method="POST">
                <label>Digite um número</label>
                <input type="number" name="num" id="num" required>

                <button type="submit">Verificar</button>
            </form>
    <br><br>
    </main>
    <section>
        <?php
            echo "a <strong>Raiz</strong> de " . $numero . " é: " . $raiz . "<br>";
            echo "a <strong>Raiz Cúbica</strong> de " . $numero . " é: " . $cubico;
        ?>
    </section>
</body>
</html>