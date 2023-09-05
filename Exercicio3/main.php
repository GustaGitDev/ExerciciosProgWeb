<?php

    $salario = $_POST['Salario'];
    $vendas = $_POST['Vendas'];

    $comissao = $vendas / 100 * 4;
    $salarioFinal = $salario + $comissao;

    echo "A comissão foi de R$ {$comissao}.<br>";
    echo "O salario final foi de R$ {$salarioFinal}.";

?>