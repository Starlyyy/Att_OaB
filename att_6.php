<?php 

echo "-Me dê dois números inteiros que eu devolverei sua multiplicação.\n";

$num_1 = readline("Primeiro número: ");
$num_2 = readline("Segundo número: ");

$resultado = 0;

for ($i = 0; $i < $num_2; $i++) {
    
    $resultado += $num_1;

}

echo "O resultado é ". $resultado . "\n";
