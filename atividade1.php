<?php
$itens = ["Teclado", "Mouse", "Monitor", "Headset", "Gabinete"];
$cost = count ($itens);
$buscando = 31.5;
for ($i = 0; $i < $cost ; $i++){
    if ($itens[$i] == $buscando){
        echo "Alerta! Temperatura crítica " ,$itens[$i] , "\n";
    } else {
        echo "Temperatura estável "  ,$itens[$i] , "\n";
    }
}
?>