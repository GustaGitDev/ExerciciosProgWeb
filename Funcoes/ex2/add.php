<?php

$arquivo = fopen("arquivo.txt", "a");
    
$frase1 = "A quarta frase.\n";
$frase2 = "A quinta frase.\n";
$frase3 = "A sexta frase.\n";

fwrite($arquivo, $frase1);
fwrite($arquivo, $frase2);
fwrite($arquivo, $frase3);

echo "Arquivo atualizado com sucesso!"

?>