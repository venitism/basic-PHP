<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos de dados primitivos</title>
</head>
<body>

<?php
$a_bool = true;   // um valor boleano
$a_str  = "foo";  // um texto
$a_str2 = 'foo';  // um texto
$an_int = 12;     // um inteiro

echo '<h3> Tipos de dados </h3>';

echo '<h3>Variável $a_bool (tipo,valor):</h3>' . gettype($a_bool) . ',' . gettype($a_str) . ',' . gettype($a_str2) . ',' . gettype($an_int) . '<br>';

var_dump($a_str2)
// Se essa variável conter um inteiro, aumento o número por quatro
//if (is_int($an_int)) {
//    $an_int += 4;
//}
//var_dump($an_int);

// Se $a_bool for um texto, imprima
//if (is_string($a_bool)) {
//    echo "String: $a_bool";
//}

//Na versão 8.0 foi acrescentado a função 'get_debug_type()' que é uma versão melhorada da 'gettype()' define melhor o nome do tipo dá variavel.
?>

</body>
</html>
