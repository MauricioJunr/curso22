<?php
$numero = 3745;
$resto = 0;

$resto = $numero %2;

if ($resto == 0) {
echo "O numero {$numero} é par. ";
}
else {
echo "O numero {$numero} é impar. ";
}

$soma = 0;
$valor1=10;
$valor2=20;

$soma = $valor1 + $valor2;
$soma1 = $soma + 29;
//para não criar uma nova variavel, a soma pode ser {$soma += 29;}


echo "<br><br>A soma dos numeros {$valor1} + {$valor2} é: {$soma} ";
echo "<br>O resultado {$soma} + 29 é: {$soma1}";


