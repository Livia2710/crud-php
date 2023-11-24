<?php
    // Incluir neste ponto o arquivo conecta.php 
    require_once "conecta.php";
    
    // Programar a função lerFabricantes neste ponto
    function lerFabricantes(PDO $conexao):array{
        // String com comando SQL
        $sql = "SELECT id, nome FROM fabrincantes";
        try {
            // Preapração do comando
            $consulta = $conexao->prepare($sql);

            // Execução do Comando
            $consulta->execute();

            // Capturar os resutados
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die ("Erro".$erro->getMessage());
        }
        return $resultado;
    }
    
    // Inserir um fabricante (PDO - PHP Database Object)
    // Obs void indica que a função não tem retorno "return"

    // Programar a função inserirFabricante neste ponto
    function inserirFabricantes(PDO $conexao, string $nome):void {
        // Inserir no Banco de Dados o valor digitado pelo usuário no formulário armazenado na variável $nome
    // Obs Não é necessario criar para o ID que é automárico

     //:qualquer_coisa -> isso é um named pararmeter
     $sql = "INSERT INTO fabricantes"

    }
    
    // Programar a função lerUmFabricante neste ponto
    
    // Programar a função atualizarFabricante neste ponto
    
    // Programar a função excluirFabricante neste ponto
    