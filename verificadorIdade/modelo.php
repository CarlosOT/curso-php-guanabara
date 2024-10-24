<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Idade</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Verificador de Idade</h1>
    </header>
    <!--INÍCIO SESSÃO-->
    <section>
        <!--ANO DE NASCIMENTO E SEXO-->
        <div>
            <p>Ano de Nascimento: 
                <input type="number" name="txtano" id="txtano" min="0">
            </p>
            <p>Sexo: 
                <input type="radio" name="radsex" id="mas" checked>
                <label for="mas">Masculino</label>
                <input type="radio" name="radsex" id="fem">
                <label for="fem">Feminino</label>
                <input type="radio" name="radsex" id="ndf">
                <label for="ndf">Não definido</label>
            </p>
            <!--CONJUNTO DE BOTÕES-->
            <div id="conjuntoBotoes">
                <p>
                    <input type="button" value="Verificar" id="botao1" onclick="verificar()">
                </p>
                <p>
                    <input type="button" value="Limpar" id="botao2" onclick="limpaRes()">
                </p>
            </div> 
        </div>
    <!--RESULTADO FINAL APARECENDO NA TELA-->
    <div id="res"></div>
    </section>
    <!--INÍCIO FOOTER-->
    <footer>
        &copy;ExemploFooter
        <p>
            <?php date_default_timezone_set("America/Sao_Paulo"); 
            echo "Data e Hora Atual: " . date("d/m/Y") . " / " . date("G:i:s");?>
        </p>
    </footer>
    <!--INÍCIO SCRIPTS JS-->
    <script src="script.js"></script>
</body>
</html>