<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - media de um aluno</title>
</head>
<body>
    <h1>Exercício - media de um aluno</h1>
    <?php 
    $n1 = 5;
    $n2 = 7;
    $n3 = 3.2;
    $n4 = 8.5;
    $media = ($n1+$n2+$n3+$n4) / 4;
    $media = number_format(floor(($media*100))/100, 2, '.', ''); //Formata em toFixed sem arredondar o valor com duas casas decimais
    $nap = 6;

    echo "<h3> 1º Nota: $n1 </h3>";
    echo "<h3> 2º Nota: $n2 </h3>";
    echo "<h3> 3º Nota: $n3 </h3>";
    echo "<h3> 4º Nota: $n4 </h3>";
    echo "<h3>Média geral: $media</h3>";
    echo "<h3>Média para aprovação: $nap</h3>";

    if($media >= $nap) {
        echo "<h2>Resultado final: Aprovado!!!</h2>";
    }else {
        echo "<h2>Resultado final: Reprovado!!!</h2>";
    }
    ?>
</body>
</html>