<?php
$sql = 'SELECT * FROM tarefas';
$res = $conn->query($sql);
$qtd = $res->num_rows;
?>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Dificuldade</th>
            <th scope="col">Nome Tarefa</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data Criação</th>
            <th scope="col">Data Conclusão</th>
            <th scope="col">Tempo Gasto</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($tarefa = $res->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $tarefa['dificuldade']; ?></td>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($tarefa['data_criacao'])); ?></td>
                <td>
                    <?php if ($tarefa['data_conclusao'] == "0000-00-00 00:00:00") : ?>
                        <form action="?page=salvar" method="POST">
                            <input type="hidden" name="acao" value="concluir">
                            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
                            <button type="submit" class="btn btn-success btn-sm">Concluir</button>
                        </form>
                    <?php else : ?>
                        <?php echo date('d/m/Y', strtotime($tarefa['data_conclusao'])); ?>
                    <?php endif; ?>
                </td>
                <td>
                    <?php
                    if ($tarefa['data_conclusao'] != "0000-00-00 00:00:00") {
                        $tempo_gasto = strtotime($tarefa['data_conclusao']) - strtotime($tarefa['data_criacao']);
                        $horas_gastas = round($tempo_gasto / 3600, 1);
                        echo $horas_gastas . ' horas';
                    }
                    ?>
                </td>
                <td>
                    <form action="?page=editar" method="POST">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
                        <?php if ($tarefa['data_conclusao'] == "0000-00-00 00:00:00") : ?>
                            <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                        <?php else : ?>
                            <button type="submit" class="btn btn-primary btn-sm" disabled>Editar</button>
                        <?php endif; ?>
                    </form>
                    <form action="?page=salvar" method="POST">
                        <input type="hidden" name="acao" value="excluir">
                        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>