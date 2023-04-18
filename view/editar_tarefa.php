<?php
$id = $_REQUEST['id']; // Pega o id do request
$sql = "SELECT * FROM tarefas WHERE id = $id";
$res = $conn->query($sql);
$tarefa = $res->fetch_assoc();
?>
<div class="container my-5" >
    <h1 class="mb-4">Editar Tarefa</h1>
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome da Tarefa:</label>
        <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" value="<?php echo $tarefa['nome']; ?>" required>
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlSelect2">Dificuldade Fibonacci:</label>
        <select class="form-control" id="exampleFormControlSelect2" name="fibonacci">
            <option value="1" <?php if($tarefa['dificuldade'] == 1) echo 'selected'; ?>>1 - POP 100</option>
            <option value="2" <?php if($tarefa['dificuldade'] == 2) echo 'selected'; ?>>2 - Yamaha 600</option>
            <option value="3" <?php if($tarefa['dificuldade'] == 3) echo 'selected'; ?>>3 - Mercedez Benz</option>
            <option value="5" <?php if($tarefa['dificuldade'] == 5) echo 'selected'; ?>>5 - Monoposto F1</option>
            <option value="8" <?php if($tarefa['dificuldade'] == 8) echo 'selected'; ?>>8 - Satélite XPT32</option>
            <option value="13" <?php if($tarefa['dificuldade'] == 13) echo 'selected'; ?>>13 - Foguete Space X</option>
            <option value="21" <?php if($tarefa['dificuldade'] == 21) echo 'selected'; ?>>21 - Máquina do Tempo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição da Tarefa:</label>
        <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $tarefa['descricao']; ?></textarea>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Editar Tarefa</button>
    </div>
    </form>
<div>