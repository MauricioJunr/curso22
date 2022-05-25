<?php
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];
$resto = 0;




function LacoIf($numero) {
    if ($resto == 0) {
    echo "O numero {$numero} é par. <br><br> ";
    }
    else {
    echo "O numero {$numero} é impar. <br><br>";
    }
}

function LacoSwitch($numero) {
    switch ($resto){
        case 0: echo "O numero {$numero} é par. <br>";
            break;
        default: echo "O numero {$numero} é impar. <br>";
            break;
    }
}


function LacoArray($numero) {
    $array = [
        0 => "é par <br><br>",
        1 => "é impar<br><br>",
    ];

    echo $array[3] ?? "é impar<br><br>"; //retorna como padrao a mensagem, pois entende que nao tem 
}





function lacoWhile ($numero) {
    $contPares = 0;
    $i = 0;

    while ($contPares < 5) {
        $resto = $numero[$i] % 2;

        if ($resto == 0) {
            $contPares++; // a array ira entrar em looping quando achar um impar
        }
    }
    $i++; //faz a array continuar quando o contpares entrar em looping

    echo "contador0: {$i} <br><br> contPares0: {$contPares}<br><br>";
}

function lacoDoWhile ($numero) {
    $contPares = 0;
    $i = 0;

    do {
        $resto = $numero[$i] % 2;

        if ($resto == 0) {
            $contPares++; 
        }
        $i++;

    } while ($contPares < 5);

    echo "contador1: {$i} <br><br> contPares1: {$contPares}<br><br>";
}

function lacoFOR($numero) {
    $contPares = 0;

    for ($i = 0; $contPares < 5; $i++) {
        $resto = $numero[$i] % 2;

        if ($resto == 0) {
            $contPares++;
        }
    }
    echo "contador: {$i} <br><br> contPare: {$contPares}<br><br>";
}


echo "Data hora inicio: " . date("d/m/Y H:i:s") . "<br><br>";

lacoWhile($numero);
lacoDoWhile($numero);
lacoFOR($numero);

echo "Data hora fim" . date("d/m/Y H:i:s");



$soma = 0;
$valor1=10;
$valor2=20;

$soma = $valor1 + $valor2;
$soma1 = $soma + 29;
//para não criar uma nova variavel, a soma pode ser {$soma += 29;}


echo "<br><br>A soma dos numeros {$valor1} + {$valor2} é: {$soma} ";
echo "<br>O resultado {$soma} + 29 é: {$soma1}";



function SepararParImpar ($numero) {
    $contPares = 0;
    $contImpares = 0;
    $pares = [];
    $impares = [];
    $tamanhocontador = count($numero);

    for ($i = 0; $i < $tamanhocontador; $i++) {
        $resto = $numero[$i] % 2;

        if ($resto == 0) {
            $pares = $numero[$contPares];
            $contPares++;
        } else {
            $impares = $numero[$contImpares];
            $contImpares++;
        }
    }
    
    echo "Pares: {$contPares}<br><br>";
    echo "Impares: {$contImpares}<br><br>";
}
