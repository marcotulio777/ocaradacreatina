<?php
include "template/header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - O Cara da Creatina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            color: #000;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px 0;
           
            width: 100%;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        main {
            padding: 20px;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            box-sizing: border-box;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form .form-group {
            margin-bottom: 15px;
        }

        form label {
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        form button {
            background-color: #1b1b1b;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        form button:hover {
            background-color: #333;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #1b1b1b;
            color: #fff;
            width: 100%;
        }

        footer a {
            color: #ff4c4c;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Contato</h1>
</header>

<main>
    <section>
        <h2>Fale Conosco</h2>
        <p>Se você tiver dúvidas, sugestões ou precisar de assistência, preencha o formulário abaixo. Retornaremos o mais breve possível!</p>
    </section>

    <form action="envia_contato.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem aqui..." required></textarea>
        </div>

        <button type="submit">Enviar</button>
    </form>
</main>
<br><br>
<?php include "template/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
