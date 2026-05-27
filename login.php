<?php
session_start();
require_once "php/conexao.php";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $senha = $_POST["senha"] ?? "";

    $stmt = $conn->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = $resultado->fetch_assoc();

    if ($usuario && password_verify($senha, $usuario["senha"])) {
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["usuario_nome"] = $usuario["nome"];
        $_SESSION["usuario_email"] = $usuario["email"];
        header("Location: entrar.php");
        exit;
    } else {
        $erro = "E-mail ou senha incorretos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login | ReadIt</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container caixa-checkout">
    <h2 class="checkout-titulo">LOGIN</h2>
    <?php if ($erro): ?><p style="color:red;"><?= htmlspecialchars($erro) ?></p><?php endif; ?>

    <form method="post">
        <label class="label-pagamento">E-mail:</label>
        <input type="email" name="email" class="input-pagamento" required>

        <label class="label-pagamento">Senha:</label>
        <input type="password" name="senha" class="input-pagamento" required>

        <button class="btn-checkout" type="submit">ENTRAR</button>
    </form>

    <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
    <p><a href="index.php">Voltar para loja</a></p>
</main>
</body>
</html>
