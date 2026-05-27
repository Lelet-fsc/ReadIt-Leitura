<?php
session_start();
require_once "php/conexao.php";

$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $senha = $_POST["senha"] ?? "";

    if ($nome === "" || $email === "" || $senha === "") {
        $erro = "Preencha todos os campos.";
    } else {
        $verifica = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
        $verifica->bind_param("s", $email);
        $verifica->execute();
        $resultado = $verifica->get_result();

        if ($resultado->num_rows > 0) {
            $erro = "Este e-mail já está cadastrado.";
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome, $email, $senhaHash);

            if ($stmt->execute()) {
                header("Location: cadastro_sucesso.php");
                exit;
            } else {
                $erro = "Erro ao cadastrar. Tente novamente.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro | ReadIt</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container caixa-checkout">
    <h2 class="checkout-titulo">CADASTRO</h2>

    <?php if ($erro): ?>
        <p style="color:red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>

    <?php if ($sucesso): ?>
        <p style="color:green;"><?= htmlspecialchars($sucesso) ?></p>
    <?php endif; ?>

    <form method="post">
        <label class="label-pagamento">Nome:</label>
        <input type="text" name="nome" class="input-pagamento" required>

        <label class="label-pagamento">E-mail:</label>
        <input type="email" name="email" class="input-pagamento" required>

        <label class="label-pagamento">Senha:</label>
        <input type="password" name="senha" class="input-pagamento" required>

        <button class="btn-checkout" type="submit">CADASTRAR</button>
    </form>

    <p>Já tem conta? <a href="login.php">Entrar</a></p>
    <p><a href="index.php">Voltar para loja</a></p>
</main>
</body>
</html>