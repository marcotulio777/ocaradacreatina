<?php
include "template/header.php";
include "config.php"; // Certifique-se de que este arquivo contém a conexão com o banco de dados

// Buscar produtos do banco de dados
$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);
$produtos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Cara da Creatina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F5F5;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333333;
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: bold;
        }

        /* Estilo para a imagem estática com tamanho original */
        .static-image {
            display: block;
            width: auto;
            height: auto;
            max-width: 100%;
            margin: 0 auto;
        }

        /* Estilo para os cards de produtos */
        .product-card {
            border: 1px solid #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            max-height: 150px;
            object-fit: contain;
            padding: 10px;
        }

        .product-card .card-body {
            padding: 10px;
        }

        .product-card h6 {
            font-size: 1rem;
            color: #333333;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-card p {
            font-size: 0.875rem;
            color: #666666;
            margin-bottom: 15px;
        }

        .product-card .btn {
            background-color: #ff4c4c;
            color: #ffffff;
            border: none;
            padding: 5px 15px;
            font-size: 0.875rem;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .product-card .btn:hover {
            background-color: #e84343;
        }

        .footer {
            background-color: #333333;
            color: #ffffff;
            padding: 20px 0;
            margin-top: 30px;
            text-align: center;
        }

        .footer a {
            color: #ff4c4c;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Imagem estática com tamanho original -->
    <img src="img/banner1.png" alt="Banner de destaque" class="static-image">

    <!-- Produtos -->
    <div class="container">
    <h1 class="text-center my-5">Nossos Produtos</h1>
    <div class="row row-cols-2 row-cols-md-4 g-4">
        <?php foreach ($produtos as $produto): ?>
            <div class="col">
                <div class="card product-card">
                    <a href="produto.php?produto_id=<?php echo $produto['id']; ?>">
                        <img src="<?php echo $produto['imagem']; ?>" class="card-img-top" alt="<?php echo $produto['nome']; ?>">
                    </a>
                    <div class="card-body text-center">
                        <h6 class="card-title"><?php echo $produto['nome']; ?></h6>
                        <p class="card-text"><strong>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></strong></p>
                        <a href="produto.php?produto_id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-primary">Ver Mais</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    <br><br><br><br> 
    <?php include "template/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
