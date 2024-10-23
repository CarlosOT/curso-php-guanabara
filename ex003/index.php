<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = octal 
        // $num = 300; | $num = 0x1A; $num = 0b1011;
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Carlos";
        // var_dump($v);

        //$num = (int) 3e2; // 3 x 10(2)
        // $num = (integer) 3e2;
        // echo "O valor é $num ";
        // var_dump($num)

        $num = (int)"950";
        var_dump($num);

    ?>
</body>
</html>