<?php

    $arquivo = fopen("arquivo.txt", "w");
    
    $frase1 = "A primeira frase.\n";
    $frase2 = "A segunda frase.\n";
    $frase3 = "A terceira frase.\n";

    fwrite($arquivo, $frase1);
    fwrite($arquivo, $frase2);
    fwrite($arquivo, $frase3);

    echo "Arquivo salvo com sucesso!"
?>