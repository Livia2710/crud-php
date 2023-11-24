<?php
//Verficando se o botão do fromulario foi acionado
if(isset($_POST['inserir']) ) {
    //Inportante as funções e a conexão
    require_once "../src/funcoes-fabricantes.php";

    //Capturando o que foi digitado no cmapo nome
    // $nome = $_POST['nome'];

    //Versão com filtro de sanitização(melhor)
    //Capturando e limpando o que foi digitados no campo nome(Formulário)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    //Chamando a função e passando os dados de conexão e o nome digitado
    inserirFabricante($conexao , $nome);

    //Redirecionamento (Nada a ver com a Tag do HTML)
    header("location:listar.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="../style.css">
    <title>Fabricantes - Insert </title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | Insert </h1>
        <hr>

        <form action="" method="POST">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </p>
            <button type="button"  class="btn btn-secondary"  name="inserir">Inserir fabricante</button>

        </form>

        <p class="paragrafo"><a class="link"  href="listar.php"><button type="button" class="btn btn-secondary">Voltar para a lista de fabricante</button></a></p>
    <p><a href="../index.html"><button type="button" class="btn btn-warning">Home</button></a></p>
    </div>

    
    
    
</body>
</html>