<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2;
        echo "A soma entre $n1 e $n2 é: " . ($n1 + $n2);
        echo "<br>A subtração entre $n1 e $n2 é: " . ($n1 - $n2);
        echo "<br>A multiplicação entre $n1 e $n2 é: " . ($n1 * $n2);
        echo "<br>A divisão entre $n1 e $n2 é: " . ($n1 / $n2);
        echo "<br>O módulo entre $n1 e $n2 é: " . ($n1 % $n2);
        echo "<br>A média entre $n1 e $n2 é: $m";
        ?>
    </div>
</body>

</html>