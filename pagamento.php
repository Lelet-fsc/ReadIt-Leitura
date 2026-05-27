<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagamento | ReadIt</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header-topo"><div class="container">
        <h1 class="titulo-site" onclick="window.location.href='index.php'">READ<span class="titulo-site-span">IT</span></h1>
    </div></header>
    
    <main class="container caixa-checkout">
        <h2 class="checkout-titulo">DADOS PARA ENTREGA</h2>

        <?php if (!isset($_SESSION["usuario_id"])): ?>
            <p style="color:#8a5a00;">Você pode finalizar sem login, <a href="login.php">entrar</a> ou <a href="cadastro.php">criar conta</a>.</p>
        <?php endif; ?>

        <form method="post" action="finalizar.php" onsubmit="return prepararPedido()">
            <label class="label-pagamento">Nome Completo:</label>
            <input type="text" name="nome" class="input-pagamento" value="<?= htmlspecialchars($_SESSION['usuario_nome'] ?? '') ?>" required>

            <label class="label-pagamento">Endereço:</label><input type="text" name="endereco" class="input-pagamento" required>
            <label class="label-pagamento">Número:</label><input type="text" name="numero" class="input-pagamento" required>
            <label class="label-pagamento">Complemento:</label><input type="text" name="complemento" class="input-pagamento">
            <label class="label-pagamento">CEP:</label><input type="text" name="cep" placeholder="00000-000" class="input-pagamento" required>
            <label class="label-pagamento">Bairro:</label><input type="text" name="bairro" class="input-pagamento" required>
            <label class="label-pagamento">Cidade:</label><input type="text" name="cidade" class="input-pagamento" required>
            <label class="label-pagamento">UF:</label><input type="text" name="uf" maxlength="2" class="input-pagamento" required>
            <label class="label-pagamento">E-mail:</label>
            <input type="email" name="email" class="input-pagamento" value="<?= htmlspecialchars($_SESSION['usuario_email'] ?? '') ?>" required>
            <label class="label-pagamento">Telefone:</label><input type="tel" name="telefone" placeholder="(21) 99999-9999" class="input-pagamento" required>
                
            <h2 class="checkout-titulo" style="margin-top: 40px;">MÉTODO DE PAGAMENTO</h2>
            <div class="pagamento-opcoes">
                <label class="metodo-item"><input type="radio" name="pgto" value="pix" onchange="mostrarPagamento()" required> 📱 Pix</label>
                <label class="metodo-item"><input type="radio" name="pgto" value="boleto" onchange="mostrarPagamento()"> 📄 Boleto Bancário</label>
            </div>

            <input type="hidden" name="carrinho" id="carrinho-json">
            <input type="hidden" name="total" id="carrinho-total">

            <div id="area-resultado"></div>
            <button class="btn-checkout" type="submit">FINALIZAR PEDIDO</button>
        </form>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
