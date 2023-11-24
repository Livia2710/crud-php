<?php
  require_once "../src/funcoes-fabricantes.php";
  $listaDeFabricantes = lerFabricantes($conexao);
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

    <title>Fabricantes</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT</h1>
        <hr>
        <h2>Lendo e carregando todos os fabricantes</h2>

        <p><button type="button" class="btn btn-primary"><a class="link" href="inserir.php">Inserir um novo fabricante</a></button></p>

        <!-- _____________________________________________ -->
        <!-- Trecho para exibir a mensagem s eclicar botão atualizar -->

        <?php if(isset($_GET['status']) && $_GET['status'] == 'sucesso') {?>
        <p>Fabricante atualizado com sucesso !</p>
        <?php } ?>

        <!-- ___________________________________________________________ -->

        <table>
            <caption>Lista de Fabricantes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //echo "<pre>";
                //var_dump($resultado); //Teste
                //echo "<pre>";
                
                foreach($listaDeFabricantes as $fabricante) { ?>

                <tr>
                     <td> <?=$fabricante['id']?></td>
                     <td> <?=$fabricante['nome']?></td>
                     <!-- Link dinâmico -->
                     <td><a href="atualizar.php?id=<?=$fabricante['id']?>" class="btn btn-danger">Excluir</a></td>

                     <!-- Solução mais simples para carregar antes de excluir -->
                     <!-- Colocar depois do <a: onclick="return confirm('Deseja excluir o item ?')" -->

                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Chamando arquivo js para perguntar antes de excluir -->
    <script> src="../js/confirm.js"</script>
    
</body>
</html>