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
        echo "<h2>Sem Referência</h2>";
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variável A vale $a";
        echo "<br>A variável B vale $b";
        echo "<h2>Com Referência</h2>";
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "<br>A variável A vale $a";
        echo "<br>A variável B vale $b";
        ?>
    </div>
</body>
</html>