<?php

    $arquivo = fopen("arquivo.txt", "w");
    $nome1 = $_POST['n1'];
    $nome2 = $_POST['n2'];
    $nome3 = $_POST['n3'];
    $nome4 = $_POST['n4'];
    $nome5 = $_POST['n5'];

    fwrite($arquivo, $nome1);
    fwrite($arquivo, "<br><br>");
    fwrite($arquivo, $nome2);
    fwrite($arquivo, "<br><br>");
    fwrite($arquivo, $nome3);
    fwrite($arquivo, "<br><br>");
    fwrite($arquivo, $nome4);
    fwrite($arquivo, "<br><br>");
    fwrite($arquivo, $nome5);

    if ($arquivo){
        $arquivo = fopen("arquivo.txt", "r");
        echo "O script abriu o arquivo. <br><br>";

        $lista = array();

        while(($linha = fgets($arquivo)) !== false){
            $lista[] = $linha;
        }

        fclose($arquivo);

        foreach($lista as $textos){
            echo $textos;
        }

    }
    else{
        echo "Erro ao abrir o arquivo.";
    }

?>