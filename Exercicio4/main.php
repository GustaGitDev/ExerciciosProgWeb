<?php

    $baseMaior = $_POST['BaseMaior'];
    $baseMenor = $_POST['BaseMenor'];
    $altura = $_POST['Altura'];

    $areaTrapezio = (($baseMaior + $baseMenor) / 2) * $altura;

    echo "A área do trapézio é: {$areaTrapezio} .";

?>