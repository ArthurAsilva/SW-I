<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Simples</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: #f4f4f4;
        }
        .caixa {
            background: white;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
        }
        button {
            background: blue;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="caixa">
    <h2>Login</h2>

    <?php
    static $email_correto = "";
    static $senha_correta = "";
    static $registrado = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if ($email_correto == "" && $senha_correta == "") {
            $email_correto = $email;
            $senha_correta = $senha;
            $registrado = true;
            echo "<p style='color: blue;'>Primeiro login salvo, tente novamente.</p>";
        } elseif ($email == $email_correto && $senha == $senha_correta) {
            echo "<p style='color: green;'>Bem-vindo, $email!</p>";
        } else {
            echo "<p style='color: red;'>Email ou senha incorretos.</p>";
            echo "<a href='login.php'>Voltar</a>";
        }
    }
    ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>