<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Fibonacci de Gerenciamento de Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="?page=listar">Lista de Tarefas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=nova_tarefa">Nova Tarefa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=pontos_somados">Tabela de resultados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>


    <?php
    include("db.model.php");
    switch(@$_REQUEST['page']){
        case "salvar":
            include("tarefas.control.php");
            break;
        case "nova_tarefa":
            include("view/nova_tarefa.php");
            break;
        case "editar":
            include("view/editar_tarefa.php");
            break;
        case "listar":
            include("view/listar_tarefa.php");
            break;
        case "pontos_somados":
            include("view/pontos_somados.php");
            break;
        case "":
            include("view/listar_tarefa.php");
            break;
    }
