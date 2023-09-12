<?php

    $arquivo = fopen("arquivo.txt", "w");
    $texto1 = $_POST['t1'];
    $texto2 = $_POST['t2'];
    $texto3 = $_POST['t3'];

    if ($arquivo){
        echo "O script abriu o arquivo. <br><br>";

        fwrite($arquivo, $texto1);
        fwrite($arquivo, "<br><br>");
        fwrite($arquivo, $texto2);
        fwrite($arquivo, "<br><br>");
        fwrite($arquivo, $texto3);

        echo file_get_contents("arquivo.txt");

    }
    else{
        echo "Erro ao abrir o arquivo.";
    }

?>