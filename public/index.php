<?php

    require_once __DIR__ . '/../config/autoload.php';

    $oTarefaController = new TarefaController();
    $operacao = $_GET['operacao'];
    
    switch ($operacao){

        case'criarTarefa':
            $sDescricao = $_POST['descricao'];
            $oTarefaController->criarTarefa($sDescricao);
            header('Location: ../public/index.php');
            break;
        
        case'removerTarefa':
            $id = $_GET['id'];
            $oTarefaController->removerTarefa($id);
            header('Location: ../public/index.php');
            break;
        
        case'atualizarTarefa':
            $id = $_GET['id'];
            $oTarefaController->atualizarTarefa($id);
            header('Location: ../public.index.php');
            break;
        
        default:
            $aTarefas = $oTarefaController->listarTarefas();
            break;
    }