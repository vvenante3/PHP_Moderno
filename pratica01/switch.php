<?php

// A ideia aqui é apenas a praticar os laços de repetição, sem a intenção de saber qual é a melhor estratégia para o exercício/caso

    $numero = [1, 4, 2, 2, 4, 5];

    $i = 0;

    foreach ($numero as $n) {
        $i++;
    }

    echo "O $numero possui " . "<strong>" . $i . " elementos"."</strong><br><br>";

    switch ($i) {
        case ($i < 1):
            echo "O array está vazio";
            break;
        
        case ($i <= 3):
            echo "O array possui até 3 elementos";
            break;

        case ($i <= 5):
            echo "O array possui possui até 5 elementos";
            break;

        case ($i > 5):
            echo "O array possui mais que 5 elementos";
    }

?>