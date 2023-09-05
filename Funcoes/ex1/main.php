<?php

    $aluno = $_POST["aluno"];
    $disciplina = $_POST["disciplina"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    function calculaMedia($aluno, $disciplina, $n1, $n2, $n3){

        $media = ($n1 + $n2 + $n3) / 3;
        return "A média do aluno {$aluno} na disciplina {$disciplina} é " . $media;

    }

    echo calculaMedia($aluno, $disciplina, $nota1, $nota2, $nota3);
    
?>