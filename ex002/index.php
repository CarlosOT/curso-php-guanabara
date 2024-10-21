<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php date_default_timezone_set("America/Sao_Paulo")?>
    <?php 
        $nome = "Carlos";
        $anoNascimento = 1996;
        $idade = date("Y") - $anoNascimento;
        const PAIS = "Brasil";
    ?>
    <p><?php echo "Hoje é dia " . date("d/m/Y") . " / " . "Hora atual: " . date("G:i:s");?></p>
    <p><?php echo "Meu nome é $nome e minha idade é $idade anos. E eu moro no " . PAIS ?></p>
</body>
</html>