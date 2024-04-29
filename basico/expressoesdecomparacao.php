<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões de comparação</title>
</head>
<body>
    <h1>Expressões de comparação - IF</h1>
    <?php
    $v1 = 15;
    $v2 = 15;

    if($v1 < $v2) {
        echo "<h3> O valor $v1 e menor do que $v2 </h3>";
    }

    if($v1 <= $v2) {
        echo "<h3> O valor $v1 e menor ou igual ao valor de $v2 </h3>";
    }

    if($v1 > $v2) {
        echo "<h3> O valor $v1 e maior do que $v2 </h3>";
    }

    if($v1 >= $v2) {
        echo "<h3> O valor $v1 e maior ou igual do que o valor $v2 </h3>";
    }

    if($v1 == $v2) {
        echo "<h3> O valor $v1 e igual do que o valor $v2 </h3>";
    }
    ?>
</body>
</html>