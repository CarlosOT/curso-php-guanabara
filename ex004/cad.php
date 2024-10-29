<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET); // $_REQUEST FUNCIONA COM O MÉDOTO GET E POST, É A JUNÇÃO DE $_GET, $_POST E $_COOKIES
            $nome = $_GET["nome"] ?? "sem nome"; //operador de coalescência nula
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; //operador de coalescência nula

            echo "<p>Parabéns <strong>$nome $sobrenome</strong> por estar aprendendo PHP</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>