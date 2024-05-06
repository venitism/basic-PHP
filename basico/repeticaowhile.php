<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - Laço de repetição</title>
</head>
<body>
    <h1>While - Laço de repetição</h1>
    <?php
    $i = 1;
    while($i <= 5) {
        echo "<h$i> Olá mundo </h$i>";
        $i = $i + 1;
    }
    ?>

    <?php
        $l = 5;
        $c = 3;
    ?>
    <h1>While - Tabela <?php echo "$l x $c";?></h1>
    <?php
    $il = 1;
    echo "<table border = '1'>";
    
    while($il <= 5) { //Criar as linhas da tabela
        echo "<tr>";
        $ic = 1;
        while($ic <= $c) {
            echo "<td>Coluna 1</td>";
            $ic++;
        }
        echo "</tr>";
        $il++;
    }
    echo "</table>";
    ?>

   
</body>
</html>

<table> <!--tabela-->
        <tr> <!--linha-->
            <!--<td>Coluna 1</td> <td>Coluna 2</td> <td>Coluna 3</td>--><!--coluna-->
        </tr>

        <tr> <!--linha-->
            <!--<td>Coluna 1</td> <td>Coluna 2</td> <td>Coluna 3</td>--><!--coluna-->
        </tr>

        <tr> <!--linha-->
            <!--<td>Coluna 1</td> <td>Coluna 2</td> <td>Coluna 3</td>--><!--coluna-->
        </tr>

        <tr> <!--linha-->
            <!--<td>Coluna 1</td> <td>Coluna 2</td> <td>Coluna 3</td>--><!--coluna-->
        </tr>

        <tr> <!--linha-->
            <!--<td>Coluna 1</td> <td>Coluna 2</td> <td>Coluna 3</td>--><!--coluna-->
        </tr>
    </table>