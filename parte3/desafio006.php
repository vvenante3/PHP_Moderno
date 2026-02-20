<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 - Anatomia de uma Divisão</title>
</head>
<body>
    <header>
        <h3>Anatomia de uma divisão</h3>
    </header>
    <section>
        <?php
            if(isset($_POST['dividendo']) && isset($_POST['divisor'])){
                $dividendo = $_POST['dividendo'] ;
                $divisor = $_POST['divisor'];
                                                            // validar se divisor == 0
                $quociente = $dividendo / $divisor;         
                $int_quocinte = (int)$quociente;            // corrigir com intdiv()
                $resto = $dividendo % $divisor;
            }
        ?>
    </section>
    <main>
        <form method="POST">
            <label>Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <br><br>
            <label>Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <br><br>
            <button type="submit">Verificar</button>
            <p></p>
        </form>
    </main>
    <section>
        <?php
            if(isset($int_quocinte)){                       // corrigir a saída
                echo "<strong>Quociente:</strong> " . $dividendo . " / " . $divisor . " = " . $int_quocinte . "<br>";
                echo "<strong>Resto:</strong> " . $resto;
            }
        ?>
    </section>    
</body>
</html>