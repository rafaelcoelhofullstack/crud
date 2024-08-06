<?php include('header.php'); ?>
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

<?php include('footer.php'); ?>
