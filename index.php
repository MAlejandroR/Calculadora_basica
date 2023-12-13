<?php

include "funciones.php";
//1.-  Si aprieto submit
//2.- (I)Leer valores del formulario
//3.- (P) Dependiendo de del operador hacer una acción u otro (+,-,*,/)
//4.- (P) Las acciones las voy a hacer en funciones
//5.- (O) Muestro el resultado generado
if (isset($_POST['submit'])){  // 1 Si he apretado submit
    //2 Leer valores
    $operador = $_POST['operador'];
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];

    switch ($operador){
        case "+":
            $restultado =sumar($op1,$op2);
            break;
        case "-":
            $restultado =restar($op1,$op2);
            break;
        case "*":
            $restultado =multiplicar($op1,$op2);
            break;
        case "/":
            $restultado =dividir($op1,$op2);
            break;


    }
    // Punto 5 preparao el texto para la salida O
    $msj_html = "$op1 $operador $op2 = $restultado";



}






?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset>
    <legend>Calculadora</legend>
    <form action="index.php" method="post">
        <input type="text" name="op1" placeholder="Operando 1" >
        <select name="operador" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="op2" placeholder="Operando 1" >
        <input type="submit" value="Operar" name="submit">
    </form>
</fieldset>
<h2><?=$msj_html ?? ""?></h2>

</body>
</html>
