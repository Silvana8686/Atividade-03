<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de locações</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/estilo.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["Mensagem"])) {
        echo '<article id="boxMensagem">';
        echo $_SESSION["Mensagem"];
        unset($_SESSION["Mensagem"]);
        echo '</article>';
    }
    if (isset($_SESSION["Erros"])) {
        echo '<article id="boxErros">';
        echo '<h3>Os seguintes erros forem encontrados:</h3>';
        echo '<ul>';
        foreach ($_SESSION["Erros"] as $erro)
            echo "<li>{$erro}</li>";
        echo '</ul>';
        unset($_SESSION["Erros"]);
        echo '</article>';
    }
    ?>
    <form action="app/Controller/Locacao.php" method="post">
        <label for="nomeLocatario">Nome do locatário</label>
        <input type="text" id="nomeLocatario" name="nomeLocatario">
        <label for="modeloVeiculo">Modelo do veículo</label>
        <input type="text" id="modeloVeiculo" name="modeloVeiculo">
        <label for="marcaVeiculo">Marca do veículo</label>
        <input type="text" id="marcaVeiculo" name="marcaVeiculo">
        <label for="anomodeloVeiculo">Ano modelo do veículo</label>
        <input type="number" id="anomodeloVeiculo" name="anoModeloVeiculo">
        <label for="anofabricacaVeiculo">Ano fabricação do veículo</label>
        <input type="number" id="anoFabricacaoVeiculo" name="anoFabricacaoVeiculo">
        <label for="placaVeiculo">Placa do veículo</label>
        <input type="text" id="placaVeiculo" name="placaVeiculo">
        <button type="submit" id="btnCadastrar">Cadastrar</button>
    </form>
</body>

</html>