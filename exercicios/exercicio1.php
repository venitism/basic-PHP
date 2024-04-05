<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <?php 
    $n = 15;
    ?>

    <h1>Exercicio 1 - Tabuada do <?php echo $n; ?> </h1>

    <?php 
    echo "<p> $n * 1 = " . ($n*1) . "</p>";
    echo "<p> $n * 2 = " . ($n*2) . "</p>";
    echo "<p> $n * 3 = " . ($n*3) . "</p>";
    echo "<p> $n * 4 = " . ($n*4) . "</p>";
    echo "<p> $n * 5 = " . ($n*5) . "</p>";
    echo "<p> $n * 6 = " . ($n*6) . "</p>";
    echo "<p> $n * 7 = " . ($n*7) . "</p>";
    echo "<p> $n * 8 = " . ($n*8) . "</p>";
    echo "<p> $n * 9 = " . ($n*9) . "</p>";
    echo "<p> $n * 10 = " . ($n*10) . "</p>";
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