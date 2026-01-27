<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário POST</title>
</head>
<body>
    <header>
        <h3>Formulário - Prática</h3>
    </header>
    <div>
        <form action="interface.php" method="POST">
            <label>Primeiro número:</label>
            <input type="number" name = "primeiro_num" id = "primeiro_num">

            <br><br>

            <label>Expressão Aritimética:</label>
            <input type="text" name = "expressao" id = "expressao">

            <br><br>

            <label>Segundo número:</label>
            <input type="number" name = "segundo_num" id = "segundo_num">

            <br><br>

            <button type="submit">Calcular</button>
        </form>
    </div>


    
</body>
</html>