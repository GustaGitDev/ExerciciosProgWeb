<?php

    $fabrica = $_POST['Custo'];

    if($fabrica < 40000){
        echo "O preço ao consumidor é: R$ " . $fabrica + ($fabrica / 100 * 5);
    }
    elseif($fabrica > 39999.99 and $fabrica <= 69999.99){
        echo"O preço ao consumidor é: R$" . $fabrica + ($fabrica / 100 * 25);
    }
    else{
        echo "O preço ao consumidor é: R$ " . $fabrica + ($fabrica / 100 * 35);
    }

?>