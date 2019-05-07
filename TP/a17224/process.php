<?php

//criar funcao soma
function soma($num1, $num2)
{
    return $num1 + $num2;
}

//ler JSON enviado pelo cliente
$numeros = json_decode(file_get_contents('php://input'));

//devolver a soma dos dois numeros, em JSON
$soma = soma($numeros->num1, $numeros->num2);
echo json_encode($soma);

?>