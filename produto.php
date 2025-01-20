<?php
include "template/header.php";
include "config.php";

if (isset($_GET['produto_id'])) {
    $produto_id = intval($_GET['produto_id']);

    $sql_produto = "SELECT * FROM produtos WHERE id = ?";
    $stmt_produto = $conn->prepare($sql_produto);
    $stmt_produto->bind_param("i", $produto_id);
    $stmt_produto->execute();
    $result_produto = $stmt_produto->get_result();
    $produto = $result_produto->fetch_assoc();

    if (!$produto) {
        echo "<div class='container'><h1>Produto não encontrado.</h1></div>";
        include "template/footer.php";
        exit();
    }

    $sql_others = "SELECT * FROM produtos WHERE id != ? ORDER BY RAND() LIMIT 4";
    $stmt_others = $conn->prepare($sql_others);
    $stmt_others->bind_param("i", $produto_id);
    $stmt_others->execute();
    $result_others = $stmt_others->get_result();
    $outros_produtos = $result_others->fetch_all(MYSQLI_ASSOC);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($produto['nome']); ?> - Detalhes do Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-details {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-details h2 {
            color: #2c3e50;
        }

        .product-details p {
            color: #34495e;
        }

        .product-details .price {
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
        }

        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            width: 100%;
            text-align: center;
        }

        .btn-success:hover {
            background-color: #2ecc71;
            border-color: #2ecc71;
        }

        .product-image img {
            max-width: 100%;
            border-radius: 8px;
        }

        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .card img {
            border-radius: 8px;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
        }

        .card-body p {
            font-size: 16px;
            color: #7f8c8d;
        }

        .card-body .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }

        .card-body .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        @media (max-width: 768px) {
            .product-details {
                padding: 20px;
            }

            .product-details .price {
                font-size: 20px;
            }

            .btn-success {
                padding: 12px;
            }
        }
    </style>
</head>
<body>

<main class="container">
    <div class="row align-items-center mt-4">
        <div class="col-md-6 product-image">
            <img src="<?= htmlspecialchars($produto['imagem']); ?>" alt="<?= htmlspecialchars($produto['nome']); ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
            <div class="product-details">
                <h2><?= htmlspecialchars($produto['nome']); ?></h2>
                <p><?= nl2br(htmlspecialchars($produto['descricao'])); ?></p>
                <p class="price">R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
                <!-- Link para WhatsApp -->
                <a href="https://wa.me/+5534999758250?text=Opa,%20%20vim%20pelo%20site%20e%20estou%20precisando%20da%20<?= urlencode($produto['nome']); ?>%20" 
                 class="btn btn-success" target="_blank">Comprar Agora</a>

            </div>
        </div>
    </div>

    <section class="mt-5">
        <h3 class="mb-4">Outros Produtos</h3>
        <div class="row">
            <?php foreach ($outros_produtos as $outro): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($outro['imagem']); ?>" class="card-img-top" alt="<?= htmlspecialchars($outro['nome']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($outro['nome']); ?></h5>
                            <p class="text-danger">R$ <?= number_format($outro['preco'], 2, ',', '.'); ?></p>
                            <a href="produto.php?produto_id=<?= $outro['id']; ?>" class="btn btn-primary w-100">Ver Mais</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include "template/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
