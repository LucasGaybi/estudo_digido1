<?php


print ("Informe o valor de 'a':");
$va = (int) fgets(STDIN);

print ("Informe o valor de 'b':");
$vb = (int) fgets(STDIN);

print ("Informe o valor de 'c':");
$vc = (int) fgets(STDIN);

$delta = ($vb ** 2)- 4*$va*$vc;

$vx1 = (-$vb + sqrt($delta))/(2*$va);

$vx2 = (-$vb - sqrt($delta))/(2*$va);

print("Valor de delta é: $delta");

print("Valor de X1 é: $vx1");

print("Valor de X2 é: $vx2");

