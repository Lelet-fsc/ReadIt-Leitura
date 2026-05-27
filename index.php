<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ReadIt Store | Sua Próxima Leitura</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header-topo">
    <div class="container header-flex">

        <h1 class="titulo-site" onclick="window.location.href='index.php'">
            READ<span class="titulo-site-span">IT</span>
        </h1>

        <div class="busca-container">
            <input type="text" placeholder="Pesquisar sua próxima leitura..." class="input-busca">
            <button class="btn-busca">🔍</button>
        </div>

        <div class="acoes-usuario">

            <?php if (isset($_SESSION["usuario_nome"])): ?>

                <span style="margin-right:15px; color:#5E725C; font-weight:bold;">
                    <?= htmlspecialchars($_SESSION["usuario_nome"]) ?>
                </span>

                <button class="btn-login" onclick="window.location.href='logout.php'">
                    SAIR
                </button>

            <?php else: ?>

                <button class="btn-login" onclick="window.location.href='login.php'">
                    LOGIN
                </button>

            <?php endif; ?>

            <div class="carrinho-topo" onclick="toggleCarrinho()">
                🛒 <span id="carrinho-contador">0</span> <strong>CARRINHO</strong>
            </div>

        </div>
    </div>
</header>

<nav class="nav-sub">
    <div class="container nav-flex">
        <a href="nacionais.php">NACIONAIS</a>
        <a href="internacionais.php">INTERNACIONAIS</a>
        <a href="ebooks.php">E-BOOKS</a>
        <a href="academicos.php">ACADÊMICOS</a>
        <a href="importados.php">IMPORTADOS</a>
        <a href="papelaria.php">PAPELARIA</a>
        <a href="ofertas.php">LIVROS EM OFERTA</a>
    </div>
</nav>

<main class="container layout-grid">

    <section class="vitrine">
        <h2 class="sessao-titulo">SUCESSO EM VENDAS</h2>

        <div class="book-card-grid">

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91XBIxb9c4L.jpg" class="book-cover">
                <h3>Contos de Fadas</h3>
                <span class="price">R$ 54,90</span>
                <button class="btn-add" onclick="adicionarAoCarrinho('Contos de Fadas', 54.90)">
                    ADICIONAR À SACOLA
                </button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71gXpS2PAgL._AC_UF1000,1000_QL80_.jpg" class="book-cover">
                <h3>Torto Arado</h3>
                <p>Itamar Vieira Junior</p>

                <div class="book-details">
                    <span class="price">R$ 49,90</span>
                    <span class="rating">⭐ 4.9</span>
                </div>

                <button class="btn-add" onclick="adicionarAoCarrinho('Torto Arado', 49.90)">
                    ADICIONAR À SACOLA
                </button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81T6Suzjj8L._AC_UF1000,1000_QL80_.jpg" class="book-cover">
                <h3>A Mandíbula de Caim</h3>
                <p>Edward Powys Mathers</p>

                <div class="book-details">
                    <span class="price">R$ 39,90</span>
                    <span class="rating">⭐ 4.5</span>
                </div>

                <button class="btn-add" onclick="adicionarAoCarrinho('A Mandíbula de Caim', 39.90)">
                    ADICIONAR À SACOLA
                </button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81SZjMOvHxL._UF1000,1000_QL80_.jpg" class="book-cover">
                <h3>Tudo é Rio</h3>
                <p>Carla Madeira</p>

                <div class="book-details">
                    <span class="price">R$ 35,00</span>
                    <span class="rating">⭐ 4.7</span>
                </div>

                <button class="btn-add" onclick="adicionarAoCarrinho('Tudo é Rio', 35.00)">
                    ADICIONAR À SACOLA
                </button>
            </article>

        </div>
    </section>

    <aside class="sidebar-categorias">
        <h2 class="sessao-titulo">CATEGORIAS</h2>

        <div class="botoes-categorias">
            <button>Literatura e Ficção</button>
            <button>Romance</button>
            <button>Infantojuvenil</button>
            <button>Policial, Suspense e Mistério</button>
            <button>HQs e Mangás</button>
            <button>Fantasia e Horror</button>
            <button>Biografias</button>
            <button>Autoajuda</button>
            <button>Gastronomia e Culinária</button>
        </div>

        <a href="#" class="link-ver-mais">Ver mais >>></a>
    </aside>

</main>

<footer class="footer-comum">
    <div class="container">
        <h3>FALE CONOSCO</h3>
        <p>+55 (21) 99876-5432 ♦ faleconosco@readit.com.br</p>
    </div>
</footer>

<aside id="carrinho-painel" class="cart-sidebar">

    <div class="cart-header">
        <h3>MEU CARRINHO</h3>
        <button onclick="toggleCarrinho()">X</button>
    </div>

    <div id="carrinho-itens-lista"></div>

    <div class="cart-footer">
        <p>Total: <strong id="carrinho-subtotal">R$ 0,00</strong></p>

        <button class="btn-login" onclick="window.location.href='pagamento.php'">
            FINALIZAR PEDIDO
        </button>
    </div>

</aside>
<script>
    if (!localStorage.getItem("usuarioAtual")) {
        localStorage.setItem("usuarioAtual", "visitante");
    }
</script>

<script src="js/script.js"></script>

</body>
</html>