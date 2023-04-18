<?php
$sql = "SELECT pontos FROM somadepontos";
$res = $conn->query($sql);

// Armazene a soma total de pontos
$soma_total = 0;

// Inicialize as variáveis de contagem de pontos para cada número
$count_1 = 0;
$count_2 = 0;
$count_3 = 0;
$count_5 = 0;
$count_8 = 0;
$count_13 = 0;
$count_21 = 0;

// Percorra os resultados da consulta e atualize as variáveis correspondentes
while ($row = $res->fetch_assoc()) {
    $soma_total += $row["pontos"];

    switch ($row["pontos"]) {
        case 1:
            $count_1++;
            break;
        case 2:
            $count_2++;
            break;
        case 3:
            $count_3++;
            break;
        case 5:
            $count_5++;
            break;
        case 8:
            $count_8++;
            break;
        case 13:
            $count_13++;
            break;
        case 21:
            $count_21++;
            break;
    }
}
?>
<div class="container mt-3">
    <h1 class="mb-3">Pontos</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Pontos Totais</h2>
            <p>Aqui você pode ver o total de pontos acumulados.</p>
            <p><strong>Total de pontos:</strong> <?php echo$soma_total; ?></p>
        </div>
        <div class="col-md-6">
            <h2>Pontos por Dificuldade</h2>
            <p>Aqui você pode ver a quantidade de pontos por dificuldade de tarefa.</p>
            <ul>
                <li><strong>Dificuldade 1:</strong> <?php echo $count_1 ; ?> pontos</li>
                <li><strong>Dificuldade 2:</strong> <?php echo $count_2 ; ?> pontos</li>
                <li><strong>Dificuldade 3:</strong> <?php echo $count_3 ; ?> pontos</li>
                <li><strong>Dificuldade 5:</strong> <?php echo $count_5 ; ?> pontos</li>
                <li><strong>Dificuldade 8:</strong> <?php echo $count_8 ; ?> pontos</li>
                <li><strong>Dificuldade 13:</strong> <?php echo $count_13; ?> pontos</li>
                <li><strong>Dificuldade 21:</strong> <?php echo $count_21; ?> pontos</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Pontos por Sequência Fibonacci</h2>
            <p>Aqui você pode ver a quantidade de pontos acumulados até cada valor da sequência Fibonacci.</
        </div>
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="zerar_status">
            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
            <button class="btn btn-danger btn-lg">Zerar Status </button>
        </form>