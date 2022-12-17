<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <header class="p-5 bg-secondary text-white text-center">

        <h1>Área administrativa</h1>
        <a id="sair" href="<?= base_url('admin/logout') ?>">Sair</a>
    </header>
    <section class="container-fluid">
        <div class="row">
            <menu class="col-md-2 ">
            <br>
                <h4>Clientes</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a id="menuHome" class="nav-link text-info" href="<?= base_url('admin/listClients') ?>">Listar clientes</a>
                    </li>
                    <li class="nav-item">
                        <a id="menuHome" class="nav-link text-info" href="<?= base_url('admin/insertClient') ?>">Inserir clientes</a>
                    </li>
                </ul>
            </menu>
            <article class="col-md-10 p-3">