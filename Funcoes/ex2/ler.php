<?php

    $arquivo = fopen("arquivo.txt", "r");

    $texto = file_get_contents("arquivo.txt");

    echo "<b>Conteudo do documento:<b> <br> $texto";
?>