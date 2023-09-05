<?php

    $aluno = $_POST['Aluno'];
    $nota1 = $_POST['Nota1'];
    $nota2 = $_POST['Nota2'];

    $media = ($nota1 + $nota2) / 2;

    echo "O aluno {$aluno} ficou com {$media} de media.";

?>