<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop - Login do Atendente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-sm border-0 rounde-3">
                <div class="card-body p-4">
                    <h3 class="card-title text-center text-primary mb-3">PetShop Admin</h3>
                    <p class="text-center text-muted small mb-4">Acesso Restrito ao Sistema</p>

                    <?php if (isset($_GET["erro"])): ?>
                        <div class="alert alert-danger py-2 text-center" role="alert">
                            <small>
                                <?php
                                if ($_GET["erro"] == 1) {
                                    echo "Login e senha inválidos!";
                                } elseif ($_GET["erro"] == 2){
                                    echo "Efetue login para acessar essa página!";
                                }
                                ?>
                            </small>
                        </div>
                        <?php endif; ?>

                        <form action="verificalogin.php" method="post">
                            <div class="mb-3">
                                <label for="usuario" class="form-label fw-bold">Usuário:</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label fw-bold">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar" value="S">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-bold">Efetuar login</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>