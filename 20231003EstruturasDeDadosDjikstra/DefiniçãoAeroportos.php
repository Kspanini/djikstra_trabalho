<?php

$nomes = array(
    1 => 'oAC1',
    2 => 'oAL1',
    3 => 'oAM1',
    4 => 'oAP1',
    5 => 'oBA1',
    6 => 'oBA2',
    7 => 'oCE1',
    8 => 'oCE2',
    9 => 'oDF1',
    10 => 'oES1',
    11 => 'oGO1',
    12 => 'oGO2',
    13 => 'oMA1',
    14 => 'oMG1',
    15 => 'oMG2',
    16 => 'oMG3',
    17 => 'oMS1',
    18 => 'oMT1',
    19 => 'oPA1',
    20 => 'oPB1',
    21 => 'oPE1',
    22 => 'oPE2',
    23 => 'oPI1',
    24 => 'oPR1',
    25 => 'oPR2',
    26 => 'oRJ1',
    27 => 'oRJ2',
    28 => 'oRJ3',
    29 => 'oRN1',
    30 => 'oRO1',
    31 => 'oRR1',
    32 => 'oRS1',
    33 => 'oRS2',
    34 => 'oSC1',
    35 => 'oSC2',
    36 => 'oSE1',
    37 => 'oSP1',
    38 => 'oSP2',
    39 => 'oSP3',
    40 => 'oSP4',
    41 => 'oSP5',
    42 => 'oTO1'
);

function obterNomeInicial($indice) {
    global $nomes;
    return isset($nomes[$indice]) ? $nomes[$indice] : 'Nome não encontrado';
}

$grafo = array();
for ($i = 0; $i < 42; $i++) {
    for ($j = 0; $j < 41; $j++) {
        $grafo[$i][$j] = 0;
        #echo $grafo[$i][$j].' /';
    }
    $grafo[$i][41] = 0;
    #echo $grafo[$i][41].'<br>';
}

$grafo[32][9] = 10;
$grafo[32][37] = 3;

$grafo[33][25] = 5;
$grafo[33][16] = 10;
$grafo[33][1] = 20;

$grafo[34][17] = 5;

$grafo[35][26] = 3;
$grafo[35][27] = 3;
$grafo[35][15] = 3;

$grafo[24][16] = 6;

$grafo[25][33] = 5;

$grafo[17][34] = 5;
$grafo[17][18] = 3;
$grafo[17][12] = 3;
$grafo[17][41] = 3;
$grafo[17][10] = 10;
$grafo[17][30] = 6;

$grafo[18][17] = 3;
$grafo[18][41] = 6;
$grafo[18][30] = 6;
$grafo[18][19] = 4;

$grafo[11][41] = 3;

$grafo[12][17] = 3;
$grafo[12][16] = 4;

$grafo[9][32] = 10;
$grafo[9][41] = 3;
$grafo[9][3] = 10;
$grafo[9][30] = 8;
$grafo[9][4] = 9;
$grafo[9][13] = 6;
$grafo[9][6] = 4;
$grafo[9][7] = 4;

$grafo[37][32] = 3;
$grafo[37][39] = 1;

$grafo[38][39] = 1;

$grafo[39][37] = 1;
$grafo[39][38] = 1;
$grafo[39][40] = 1;

$grafo[40][39] = 1;

$grafo[41][17] = 3;
$grafo[41][18] = 6;
$grafo[41][19] = 6;
$grafo[41][11] = 3;
$grafo[41][9] = 3;
$grafo[41][27] = 7;
$grafo[41][3] = 7;
$grafo[41][21] = 7;
$grafo[41][20] = 6;
$grafo[41][22] = 6;
$grafo[41][23] = 6;
$grafo[41][24] = 7;
$grafo[41][26] = 7;
$grafo[41][28] = 7;
$grafo[41][31] = 7;
$grafo[41][35] = 7;
$grafo[41][32] = 7;

    for ($i = 0; $i < 42; $i++){
        for($j = 0; $j < 42; $j++){
            if ($grafo[$i][$j] !== 0){
                echo 'Origem: '
                     .obterNomeInicial($i)
                     .', Destino: '
                     .obterNomeInicial($j)
                     .' e Peso: '
                     .$grafo[$i][$j]
                     .'<br>';
            }
        }
    }
?>