<?php
session_start();
if (!isset($_SESSION["autenticado"]) || !isset($_SESSION["usuario"])) {
    header("Location: login.php?erro=2");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop - Registro de Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4> PetShop Peludinhos</h4>
            <div>
                <span class="me-2">Atendente: <strong><?php echo $_SESSION["usuario"]; ?></strong></span>
                <a href="logoff.php" class="btn btn-outline-danger btn-sm">Sair</a>
            </div>
        </div>

        
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="gerar-recibo.php" method="POST">
                    
                    <h5>Dados do Cliente</h5>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome do Tutor:</label>
                            <input type="text" name="cliente_nome" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">CPF:</label>
                            <input type="text" name="cliente_cpf" class="form-control" required>
                        </div>
                    </div>

                    <h5>Dados do Animal</h5>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome do Pet:</label>
                            <input type="text" name="pet_nome" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Espécie:</label>
                            <select name="pet_especie" class="form-select">
                                <option value="Cão">Cão</option>
                                <option value="Gato">Gato</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                    </div>

                    <h5>Serviço</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-8">
                            <label class="form-label">Serviço Realizado:</label>
                            <input type="text" name="servico" class="form-control" placeholder="Ex: Banho e Tosa" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Valor (R$):</label>
                            <input type="number" step="0.01" name="valor" class="form-control" placeholder="50.00" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100 fw-bold">Gerar Recibo e Nota Fiscal</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>