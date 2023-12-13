<?php

function sumar(string|null $op1, string|null $op2):int |string{
    if (is_numeric($op1)&& is_numeric($op2))
        return $op1+$op2;
    else
        return "$op1 + $op2 no se puede hacer";
}
function restar($op1, $op2){
    if (is_numeric($op1)&& is_numeric($op2))
        return $op1-$op2;
    else
        return "$op1 - $op2 no se puede hacer";
}



function multiplicar($op1, $op2){
    if (is_numeric($op1)&& is_numeric($op2))
        return $op1*$op2;
    else
        return "$op1 * $op2 no se puede hacer";

}
function dividir($op1, $op2){
    if (is_numeric($op1)&& is_numeric($op2)) {
        if ($op2 != 0)
            return $op1 / $op2;
        else
            return "$op1 / $op2 No se puede dividir por 0";
    }
    else
        return "$op1 - $op2 no se puede hacer";
}

