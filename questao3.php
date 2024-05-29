<?php

$vetor1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$vetor2 = [5, 6, 7, 8, 9, 10, 11, 12, 13, 14];

function naocomuns ($vetor1, $vetor2) {
    $naorepete1 = array_diff($vetor1, $vetor2);

    $naorepete2 = array_diff($vetor2, $vetor1);
    
    $naocomuns = array_merge($naorepete1, $naorepete2);

    return $naocomuns;
}

    $numerosnaocomuns = naocomuns($vetor1, $vetor2);

    echo "Os números não comuns aos vetores são:".implode(",",$numerosnaocomuns);

?>