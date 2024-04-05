<?php
$a_bool = true;   // um valor boleano
$a_str  = "foo";  // um texto
$a_str2 = 'foo';  // um texto
$an_int = 12;     // um inteiro

echo gettype($a_bool), "<br>";
echo gettype($a_str), "<br>";
echo gettype($a_str2), "<br>";
echo gettype($an_int), "<br>";

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