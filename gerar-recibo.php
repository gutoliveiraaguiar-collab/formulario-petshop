<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente_nome = htmlspecialchars($_POST['cliente_nome']);
    $cliente_cpf = htmlspecialchars($_POST['cliente_cpf']);
    $pet_nome = htmlspecialchars($_POST['pet_nome']);
    $servico = htmlspecialchars($_POST['servico']);
    $valor = number_format((float)$_POST['valor'], 2, ',', ',');

    $numero_nf = rand(100000, 999999);
    $data_emissao = date("d/m/Y H:i:s");
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo / Nota Fiscal - Petshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">
            <h2> Petshop Peludinhos </h2>
            <p><strong>Comprovante de Serviço & Dados da NF</strong></p>
            <p><small>NF-e Nº: <?php echo $numero_nf; ?> | Data: <?php echo $data_emissao; ?> </small></p>
    </div>

    <div class="receipt-details">
        <p><strong>Tutor:</strong> <?php echo $cliente_nome; ?></p>
        <p><strong>CPF:</strong> <?php echo $cliente_cpf; ?></p>
        <hr>
        <p><strong>Nome do Pet:</strong><?php echo $pet_nome; ?></p> <p><strong>Nome do Pet:</strong> <?php echo $pet_nome; ?> </p>
        <p><strong>Serviço/Produto:</strong> <?php echo $servico; ?></p>
        <hr>
        <p class="total"><strong>Total Pago:</strong> R$ <?php echo $valor; ?></p>
    </div>

    <button onclick="window.print()"> Imprimir Recibo </button>
    <a href="index.html" style="display:block; text-align:center; margin-top:15px; color: #555; text-decoration:none;"> Voltar ao início </a>
</div>
</body>
</html>