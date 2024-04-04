<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Exercicio 1 - Tabuada do 2</h1>

    <?php 
    echo "<p> 2 * 1 = " . (2*1) . "</p>";
    echo "<p> 2 * 2 = " . (2*2) . "</p>";
    echo "<p> 2 * 3 = " . (2*3) . "</p>";
    echo "<p> 2 * 4 = " . (2*4) . "</p>";
    echo "<p> 2 * 5 = " . (2*5) . "</p>";
    echo "<p> 2 * 6 = " . (2*6) . "</p>";
    echo "<p> 2 * 7 = " . (2*7) . "</p>";
    echo "<p> 2 * 8 = " . (2*8) . "</p>";
    echo "<p> 2 * 9 = " . (2*9) . "</p>";
    echo "<p> 2 * 10 = " . (2*10) . "</p>";
    ?>

    <h1>Exercicio 2 - Variaveis</h1>

    <?php 
    $var = "nome 1";
    $Var = "nome 2";
    $outroNome = "Outro Nome";
    $explicando = "Variaveis no php começam com $ seguido do nome da variável";

    echo "$var, $Var" . "<br>" . "$outroNome, $explicando";
    ?>
</body>
</html>