<?php include('header.php'); ?>
<?php include('navbar.php') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lista de usuários
                        <a href="usuario-create.php" class="btn btn-primary float-end">Adiconar usuário</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>teste</td>
                                <td>teste@gmail.com</td>
                                <td>06/08/2024</td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm">Visualizar</a>
                                    <a href="" class="btn btn-success btn-sm">Editar</a>
                                    <form action="" method="post" class="d-inline">
                                        <button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
