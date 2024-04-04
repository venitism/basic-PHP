<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritiméticos</title>
</head>
<body>
    
    <?php 

        $v1 = 5;
        $v2 = 5;
        $msg = '<h1>Operadores aritiméticos</h1>';
        $t = 0;
        $t = $v1+$v2;

        echo $msg;

        echo '<h3>' .$v1.' + '.$v2.' = ' . ($t) . "</h3>";
        echo "<h3> $v1 - $v2 = " . ($v1-$v2) . "</h3>";
        echo "<h3> $v1 * $v2 = " . ($v1*$v2) . "</h3>";
        echo "<h3> $v1 / $v2 = " . ($v1/$v2) . "</h3>";
        echo "<h3> $v1 % $v2 = " . ($v1%$v2) . "</h3>";

    ?>
    
    <!-- O '.' significa concatenação então ao invés de fazer
        echo "<h3> 5 + 5 = " 
        echo 5+5; 
        echo "</h3>";

        eu só faço o que está na linha 12;
-->

    <!-- Os '()' servem para indicar o código fazer aquela conta primeiramente e depois vai pegar o resultado e concatenar no texto. 
-->

    <!-- Quando eu uso aspas simples em uma contante literal, ele vai escrever o nome da variável ao invés do valor da variável.
-->
</body>
</html>