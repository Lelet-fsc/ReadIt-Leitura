<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelaria | ReadIt Store</title>
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
                <input type="text" placeholder="Pesquisar itens de papelaria..." class="input-busca">
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
            
                <div class="carrinho-topo" onclick="toggleCarrinho()" style="cursor:pointer">
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


    <main class="container">
        <h2 class="sessao-titulo">PAPELARIA E ACESSÓRIOS</h2>
        
        <div class="grid-nacionais">
            
            <article class="book-card">
                <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSOhxTm79joMiajUi9TYHtkOtSaSO1f5UzJ9bscKC7LQeNkkpfrPXC6U5vW1Wlm7qBywdgywnjz5ma4XZM1P5rVbGyTrf-UxK8TRRExOiCdbj71JSa1Nwo7mvM" class="book-cover">
                <h3>Planner Semanal</h3>
                <p>Organização</p>
                <div class="book-details"><span class="price">R$ 25,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Planner Semanal', 25.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://img.kalunga.com.br/fotosdeprodutos/174823d.jpg" class="book-cover">
                <h3>Kit Canetas 10 Cores</h3>
                <p>Stabilo </p>
                <div class="book-details"><span class="price">R$ 89,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Kit Stabilo', 89.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSWYudXFCF0M8Ttyd9E3evn3EzUnBPIljMZQr0FE6G_uoGqJk0D0GYtrl0ybHXdppGtWNFND-MiaCWh0iIDFRv73ytoOM1mWfTB7GfoGHBt6Ua_O8Otaaho5_w" class="book-cover">
                <h3>Caderno Inteligente</h3>
                <p>Tamanho Médio - Rosa</p>
                <div class="book-details"><span class="price">R$ 115,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Caderno Inteligente', 115.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51pqa2hpPJL._AC_SY355_.jpg" class="book-cover">
                <h3>Marcador de Texto</h3>
                <p>Kit com 5 Cores - CIS Lumini Flex</p>
                <div class="book-details"><span class="price">R$ 15,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Marcadores Magnet', 15.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGNBuQRT3cKLZeEIS0-qxt96bcPhEjeqvOVA&s">
                <h3>Estojo c/ Divisórias</h3>
                <p>Organizador Funcional - Rosa</p>
                <div class="book-details"><span class="price">R$ 32,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Estojo com Divisórias', 32.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51CgYi8bZkL._AC_AIweblab1378949,T3_FMavif_SF480.0,480.0_QL54_.jpg?aicid=productui-image-1" class="book-cover">
                <h3>Marca-texto Pastel</h3>
                <p>Faber-Castell - 6 Cores</p>
                <div class="book-details"><span class="price">R$ 29,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Marca-texto Faber Castell', 29.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIoIHNjOwgd_5254JXDhMkkVLxbJB25HZp_g&s" class="book-cover">
                <h3>Caneta Gel Branca</h3>
                <p>Pilot</p>
                <div class="book-details"><span class="price">R$ 12,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Caneta Branca', 12.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/513ODDUYesL._AC_AIweblab1378949,T3_FMavif_SF480.0,480.0_QL54_.jpg?aicid=productui-image-1" class="book-cover">
                <h3>Borracha Dust Free</h3>
                <p>Faber-Castell</p>
                <div class="book-details"><span class="price">R$ 6,50</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Borracha Pink', 6.50)">ADICIONAR</button>
            </article>


            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71df8KSjoxL._AC_AIweblab1378949,T3_FMavif_SF480.0,480.0_QL54_.jpg?aicid=productui-image-1" class="book-cover">
                <h3>Mini Grampeador</h3>
                <p>Capacidade 20 folhas + Caixa com 400 Grampos</p>
                <div class="book-details"><span class="price">R$ 35,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Mini-Grampeador Rosa', 35.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61cltFiW06L._AC_AIweblab1378949,T3_FMavif_SF480.0,480.0_QL54_.jpg?aicid=productui-image-1" class="book-cover">
                <h3>Clips Rose Gold - Tilibra</h3>
                <p>Pote com 120 unidades</p>
                <div class="book-details"><span class="price">R$ 19,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Clips Rose', 19.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://img.kalunga.com.br/fotosdeprodutos/664017d.jpg" class="book-cover">
                <h3>Régua de Alumínio</h3>
                <p>30cm - Prateada</p>
                <div class="book-details"><span class="price">R$ 14,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Régua Alumínio', 14.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81lPsyrKoZL._AC_AIweblab1378949,T3_FMavif_SF480.0,480.0_QL54_.jpg?aicid=productui-image-1" class="book-cover">
                <h3>Porta Canetas</h3>
                <p>Aramado - Preto</p>
                <div class="book-details"><span class="price">R$ 28,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Porta Canetas', 28.00)">ADICIONAR</button>
            </article>

        </div>

        <div class="area-ver-mais">
            <button class="btn-login btn-carregar">VER MAIS LIVROS</button>
        </div>
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
            <button class="btn-login" onclick="window.location.href='pagamento.php'">FINALIZAR PEDIDO</button>
        </div>
    </aside>

    <script src="js/script.js"></script>
</body>
</html>
