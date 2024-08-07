<?php
    session_start();
    require 'conexao.php';
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Usuários</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

    <?php include('navbar.php') ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar usuário
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="post">
                            <!-- Nome -->
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome" id="" class="form-control">
                            </div>

                            <!-- E-mail -->
                            <div class="mb-3">
                                <label>E-mail</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>
                            
                            <!-- Data nascimento -->
                            <div class="mb-3">
                                <label>Data Nascimento</label>
                                <input type="date" name="data_nascimento" id="" class="form-control">
                            </div>
                            
                            <!-- Senha -->
                            <div class="mb-3">
                                <label>Senha</label>
                                <input type="password" name="senha" id="" class="form-control">
                            </div>  
                            
                            <div class="mb-3">
                                <button type="submit" name="create_usuario" class="btn btn-primary btn-sm float-end">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>