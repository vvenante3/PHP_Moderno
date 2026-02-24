<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 – Médias Aritméticas</title>
</head>
<body>
    <header>
        <h3>Média Ponderada</h3>
    </header>
    <section>
        <?php
            if(isset($_GET['nota1'] ) && ($_GET['nota2'])){     // fazer tratamento de notas e peso 0
                $nota1 = $_GET['nota1'];
                $peso1 = $_GET['peso1'];                    

                $nota2 = $_GET['nota2'];
                $peso2 = $_GET['peso2'];

                $media_ponderada = '';
                $media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
            
            }

        ?>
    </section>
    <main>
        <section>
            <form method="GET">
                <label>Nota 1:</label>
                <input type="number" name="nota1" id = "nota1" required>
                <label>Peso</label>
                <input type="number" name="peso1" id = "peso1" required>
                <br><br>
                <label>Nota 2:</label>
                <input type="number" name="nota2" id = "nota2" required>
                <label>Peso</label>
                <input type="number" name="peso2" id = "peso2" required>
                <br><br>

                <button type="submit">Calcular média</button>
            </form>
        </section>        
    </main>
    <section>
        <?php
            echo "<br>A <strong>média ponderada</strong> é: " . $media_ponderada . "<br>"; // fazer tratamento na saida de dados
        ?>
    </section>
    
</body>
</html>