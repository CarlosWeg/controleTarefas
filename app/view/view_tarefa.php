<?php

    require_once __DIR__ . '/../config/autoload.php';

?>

<!DOCTYPE html>
<html lang = "pt-BR">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Controle de tarefas</title>
</head>

<body>

    <h1>Cadastrar nova tarefa</h2>
    
    <form method = "POST" action = "..public/index.php?operacao=criarTarefa">

        <input type = "text" name = "descricao" id = "descricao" required>
        <input type = "submit" value = "Enviar!">

    </form>

    <h2>Lista de tarefas pendentes</h2>

    <table>
        <tr>
            <th>Descrição</th>
            <th>Status atual</th>
            <th colspan = "2">Ações disponíveis</th>
        </tr>

        <?php

            foreach ($aTarefas as $tarefa){
                if (!$tarefa['status']){
                    echo '<tr>';
                    echo '<td>' . $tarefa['descricao'] . '</td>';
                    echo '<td>' . $tarefa['status'] . '</td>';
                    echo '<td><a href = "public.index.php?operacao=removerTarefa&id=' . $tarefa['id'] . '">Remover</a></td>';
                    echo '<td><a href = "public.index.php?operacao=atualizarTarefa&id=' . $tarefa['id'] .'">Atualizar Status</a></td>';
                    echo '</tr>';
                }
            }


        ?>

    </table>

    <h2>Lista de tarefas concluídas</h2>

    <table>
        <tr>
            <th>Descrição</th>
            <th>Status atual</th>
            <th colspan = "2">Ações disponíveis</th>
        </tr>

        <?php

            foreach ($aTarefas as $tarefa){
                if ($tarefa['status']){
                    echo '<tr>';
                    echo '<td>' . $tarefa['descricao'] . '</td>';
                    echo '<td>' . $tarefa['status'] . '</td>';
                    echo '<td><a href = "public.index.php?operacao=removerTarefa&id=' . $tarefa['id'] . '">Remover</a></td>';
                    echo '<td><a href = "public.index.php?operacao=atualizarTarefa&id=' . $tarefa['id'] .'">Atualizar Status</a></td>';
                    echo '</tr>';
                }
            }


        ?>

    </table>

</body>

</html>

