<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        if (($num1 !=0 && $num2 != 0) && (empty($num1) || empty($num2))) {
            echo "<p> Almeno uno dei due numeri è vuoto! </p>";
            echo "<a href='index.html'> Torna indietro </a> <br> <hr>"; 
            $sum = "!!";
            $dif = "!!";
            $mol = "!!";
            $div = "!!";     
        }
        else {
            echo "<ul> <li>Numero 1: $num1 </li> <li>Numero 2: $num2 </li> </ul> <br>";
            $num1 = intval($num1);
            $num2 = intval($num2);
            $sum = $num1 + $num2;
            $dif = $num1 - $num2;
            $mol = $num1 * $num2;
            $div = $num2 == 0 ? "<span style='color:red'>Impossibile<span>" : ($num1/$num2);
        }
    ?>
    <table>
        <tr>
            <th>Operazione</th>
            <th>Risultato</th>
        </tr>
        <tr>
            <td>Somma</td>
            <td><?php echo $sum?></td>
        </tr>
        <tr>
            <td>Differenza</td>
            <td><?php echo $dif?></td>
        </tr>
        <tr>
            <td>Moltiplicazione</td>
            <td><?php echo $mol?></td>
        </tr>
        <tr>
            <td>Divisione</td>
            <td><?php echo $div?></td>
        </tr>
    </table>
</body>
</html>