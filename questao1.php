<?php

$palavra = "sonho";

function repetirpalavra($palavra){
    $palavra = strtoupper($palavra);
    return $palavra;
}

$palavramaismaior = repetirpalavra($palavra);
echo "A palavra em maiúsculo é: $palavramaismaior <br><br>";

echo "<hr>";

for ($i = 1; $i <= 4; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo $palavramaismaior;
        if ($j < $i) {
            echo " ";
        }
    }
    echo "<br>";
}
?>
