<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógico</title>
</head>
<body>
    <h1>Operadores lógicos</h1>
    <?php
    // &&

    // $a = 100;
    // $b = 10;
    // $c = 10;
    // $msg = "<h3> Os valores informados não representam os lados de um triângulo</h3>";

    // if(($a+$b > $c) && ($a+$c > $b) && ($c+$b > $a)) {
    //     echo $msg = "<h3> Os valores informados representam os lados de um triângulo</h3>";
    // }else {
    //     echo $msg;
    // }
    ?>

    <?php
    // ||

    $a = 20;
    $b = 5;

    if(($a > 15) || ($b > 15)) {
        echo "<h3>Entrou no if</h3>";
    }else {
        echo "<h3>Não entrou no if</h3>";
    }
    ?>
</body>
</html>