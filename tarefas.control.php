<?php
switch($_REQUEST['acao']){
    case 'criar':
        $nome = $_POST["nome"];
        $dificuldade = $_POST["fibonacci"];
        $descricao = $_POST["descricao"];

        $sql = "INSERT INTO tarefas (nome, dificuldade, descricao) VALUES ('{$nome}','{$dificuldade}','{$descricao}')";
        $res = $conn->query($sql);
        header('Location: ?page=listar');

        break;

        case 'concluir':
            $id = $_REQUEST['id'];
            $data_conclusao = date('Y-m-d H:i:s');
            $sqlpontos = "SELECT dificuldade FROM tarefas WHERE id = $id";
            $respontos = $conn->query($sqlpontos);
            if ($respontos && $respontos->num_rows > 0) {
                // Recupera o valor da coluna "dificuldade"
                $row = $respontos->fetch_assoc();
                $dificuldade = $row['dificuldade'];

                $sqlinserirpontos = "INSERT INTO somadepontos (pontos) VALUES ('{$dificuldade}')";
                $execute = $conn->query($sqlinserirpontos);
                
            } else {
                // Trata o caso em que nenhuma tarefa com o ID fornecido é encontrada
                $dificuldade = null;
            }
            $sql = "UPDATE tarefas SET data_conclusao = CONVERT_TZ('{$data_conclusao}', '+00:00', '-05:00') WHERE id = '{$id}'";
            $res = $conn->query($sql);
            header('Location: ?page=listar');
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $dificuldade = $_POST["fibonacci"];
            $descricao = $_POST["descricao"];
            $id = $_REQUEST["id"];
            $sql = "UPDATE tarefas SET nome = '$nome', dificuldade = '$dificuldade', descricao = '$descricao' WHERE id = '$id'";
            $res = $conn->query($sql);
            header('Location: ?page=listar');
            break;
        case 'excluir':
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM tarefas WHERE id = $id";
            $res = $conn->query($sql);
            header('Location: ?page=listar');
            break;
        case 'zerar_status':
            $sql = "DELETE FROM somadepontos";
            $res = $conn->query($sql);
            header('Location: ?page=pontos_somados');
            break;
            
} 
?>