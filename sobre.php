<?php
include "template/header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - O Cara da Creatina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            
           
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }

        main {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #1b1b1b;
            text-align: center;
        }

        p, ul {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

        ul {
            padding-left: 20px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #1b1b1b;
            color: #fff;
        }

        footer a {
            color: #ff4c4c;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            main {
                padding: 20px;
            }

            h2 {
                font-size: 1.6rem;
            }

            p, ul {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Sobre Nós</h1>
</header>

<main>
    <section>
        <h2>O Cara da Creatina</h2>
        <p>
            Bem-vindo ao O Cara da Creatina, seu destino número um para suplementação de qualidade. Nosso objetivo é oferecer as melhores creatinas do mercado, combinando preços acessíveis com uma experiência de compra prática e segura.
        </p>
    </section>

    <section>
        <h2>Nosso Compromisso</h2>
        <p>
            Estamos comprometidos em proporcionar produtos confiáveis, entrega ágil e atendimento excepcional. Valorizamos sua saúde e desempenho, e por isso, selecionamos cuidadosamente nossos produtos para garantir qualidade superior.
        </p>
    </section>

    <section>
        <h2>Por Que Escolher a Gente?</h2>
        <ul>
            <li>Entrega rápida e segura diretamente na sua porta.</li>
            <li>Os melhores preços do mercado.</li>
            <li>Suplementos selecionados e de alta qualidade.</li>
            <li>Atendimento dedicado e suporte ao cliente.</li>
        </ul>
    </section>
</main>

<?php include "template/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
