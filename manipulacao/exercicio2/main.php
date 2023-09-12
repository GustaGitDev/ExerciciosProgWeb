<?php

    $arquivo = fopen("arquivo.txt", "w");
    $nome1 = $_POST['n1'];
    $nome2 = $_POST['n2'];
    $nome3 = $_POST['n3'];
    $nome4 = $_POST['n4'];
    $nome5 = $_POST['n5'];

    function escreverTexto($abrir, $nomes){

        fwrite($abrir, "$nomes \n");

    }

    function lerTexto(){

        $arquivo = fopen("arquivo.txt", "r");

        $lista = array();

        while(($linha = fgets($arquivo)) !== false){
            $lista[] = $linha;
        }

        fclose($arquivo);

        foreach($lista as $textos){
            echo "<p>$textos</p>";
        }

    }


    if ($arquivo){

        escreverTexto($arquivo, $nome1);
        escreverTexto($arquivo, $nome2);
        escreverTexto($arquivo, $nome3);
        escreverTexto($arquivo, $nome4);
        escreverTexto($arquivo, $nome5);
        
        echo "O script abriu o arquivo. <br><br>";
        
        lerTexto();

    }
    else{
        echo "Erro ao abrir o arquivo.";
    }

?>