<?php
session_start();
require_once "php/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: pagamento.php");
    exit;
}

$usuarioId = $_SESSION["usuario_id"] ?? null;
$nome = trim($_POST["nome"] ?? "");
$email = trim($_POST["email"] ?? "");
$telefone = trim($_POST["telefone"] ?? "");
$endereco = trim($_POST["endereco"] ?? "");
$numero = trim($_POST["numero"] ?? "");
$complemento = trim($_POST["complemento"] ?? "");
$cep = trim($_POST["cep"] ?? "");
$bairro = trim($_POST["bairro"] ?? "");
$cidade = trim($_POST["cidade"] ?? "");
$uf = strtoupper(trim($_POST["uf"] ?? ""));
$metodo = trim($_POST["pgto"] ?? "");
$carrinhoJson = $_POST["carrinho"] ?? "[]";
$total = floatval($_POST["total"] ?? 0);
$itens = json_decode($carrinhoJson, true);

if (!$itens || count($itens) === 0) {
    die("Carrinho vazio. Volte para a loja e adicione produtos.");
}

$textoItens = "";
foreach ($itens as $item) {
    $itemNome = $item["nome"] ?? "Produto";
    $itemPreco = number_format(floatval($item["preco"] ?? 0), 2, ",", ".");
    $textoItens .= "- {$itemNome}: R$ {$itemPreco}\n";
}

$stmt = $conn->prepare("INSERT INTO pedidos (usuario_id, nome, email, telefone, endereco, numero, complemento, cep, bairro, cidade, uf, metodo_pagamento, itens, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssssssssd", $usuarioId, $nome, $email, $telefone, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $uf, $metodo, $textoItens, $total);
$stmt->execute();
$pedidoId = $conn->insert_id;

$assunto = "Pedido confirmado - ReadIt #" . $pedidoId;
$mensagem = "Olá, {$nome}!\n\nSeu pedido foi recebido.\n\nItens:\n{$textoItens}\nTotal: R$ " . number_format($total, 2, ",", ".") . "\nPagamento: {$metodo}\n\nEndereço:\n{$endereco}, {$numero} - {$complemento}\n{$bairro}, {$cidade} - {$uf}\nCEP: {$cep}\n\nObrigada por comprar na ReadIt!";
$headers = "From: ReadIt <no-reply@readit.com.br>\r\nContent-Type: text/plain; charset=UTF-8";

@mail($email, $assunto, $mensagem, $headers);
@mail("faleconosco@readit.com.br", "Novo pedido ReadIt #" . $pedidoId, $mensagem, $headers);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido Finalizado | ReadIt</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container caixa-checkout">
    <h2 class="checkout-titulo">PEDIDO FINALIZADO 💚</h2>
    <p>Seu pedido número <strong>#<?= $pedidoId ?></strong> foi registrado.</p>
    <p>Foi tentado o envio de confirmação para: <strong><?= htmlspecialchars($email) ?></strong></p>
    <p><strong>Atenção:</strong> no XAMPP local, o e-mail pode não enviar sem configurar SMTP.</p>
    <button class="btn-checkout" onclick="window.location.href='index.php';">VOLTAR PARA LOJA</button>
</main>
    <script>
    localStorage.removeItem("carrinho_" + (localStorage.getItem("usuarioAtual") || "visitante"));
</script>
</body>
</html>
