<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacionais | ReadIt </title>
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
                <input type="text" placeholder="Pesquisar livros nacionais..." class="input-busca">
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
        <h2 class="sessao-titulo">NACIONAIS</h2>
        
        <div class="grid-nacionais">
            
           <article class="book-card">
    <img src="https://i.pinimg.com/736x/37/ec/7f/37ec7f577ee1cac921d62d13b583e3fc.jpg" class="book-cover">
    <h3>Dom Casmurro</h3>
    <p>Machado de Assis</p>
    <div class="book-details"><span class="price">R$ 24,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Dom Casmurro', 24.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/f5/2c/6f/f52c6f1e1719ceeaace4bab3640a3f70.jpg" class="book-cover">
    <h3>Memórias Póstumas de Brás Cubas</h3>
    <p>Machado de Assis</p>
    <div class="book-details"><span class="price">R$ 29,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Memórias Póstumas de Brás Cubas', 29.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/ec/6d/07/ec6d074280493dc75bd85323a06e594b.jpg" class="book-cover">
    <h3>Grande Sertão: Veredas</h3>
    <p>Guimarães Rosa</p>
    <div class="book-details"><span class="price">R$ 64,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Grande Sertão: Veredas', 64.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/fa/66/82/fa668288b8412a457c72b2ced897e112.jpg" class="book-cover">
    <h3>A Hora da Estrela</h3>
    <p>Clarice Lispector</p>
    <div class="book-details"><span class="price">R$ 34,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('A Hora da Estrela', 34.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/b0/c2/bd/b0c2bdada7ac027502b02132a1ac5640.jpg" class="book-cover">
    <h3>O Cortiço</h3>
    <p>Aluísio Azevedo</p>
    <div class="book-details"><span class="price">R$ 22,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('O Cortiço', 22.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/4a/48/b5/4a48b5acabae2b96404e5c1d367bcd6b.jpg" class="book-cover">
    <h3>Vidas Secas</h3>
    <p>Graciliano Ramos</p>
    <div class="book-details"><span class="price">R$ 39,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Vidas Secas', 39.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/a4/fa/7a/a4fa7a2df17cf0d1bff2b11711ac3202.jpg" class="book-cover">
    <h3>Capitães da Areia</h3>
    <p>Jorge Amado</p>
    <div class="book-details"><span class="price">R$ 42,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Capitães da Areia', 42.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/1200x/eb/ce/7d/ebce7d2db7d3a4ff8867fd4e3f65b40b.jpg" class="book-cover">
    <h3>Iracema</h3>
    <p>José de Alencar</p>
    <div class="book-details"><span class="price">R$ 19,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Iracema', 19.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/d0/66/02/d0660246a95fcfe2ad7bac4d9e38e6c1.jpg" class="book-cover">
    <h3>Quincas Borba</h3>
    <p>Machado de Assis</p>
    <div class="book-details"><span class="price">R$ 26,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Quincas Borba', 26.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/72/8d/d2/728dd28cc1db9b26b379820bfa43f072.jpg" class="book-cover">
    <h3>Auto da Compadecida</h3>
    <p>Ariano Suassuna</p>
    <div class="book-details"><span class="price">R$ 32,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Auto da Compadecida', 32.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/59/77/22/5977224c0a247cdef8239fbb6cb1b55b.jpg" class="book-cover">
    <h3>Morte e Vida Severina</h3>
    <p>João Cabral de Melo Neto</p>
    <div class="book-details"><span class="price">R$ 35,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Morte e Vida Severina', 35.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/95/c3/43/95c343be07c59b11b3b4035cce56f4ea.jpg" class="book-cover">
    <h3>Macunaíma</h3>
    <p>Mário de Andrade</p>
    <div class="book-details"><span class="price">R$ 28,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Macunaíma', 28.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/1200x/89/05/0d/89050d323332dfa97b132b72d38f44ba.jpg" class="book-cover">
    <h3>Gabriela, Cravo e Canela</h3>
    <p>Jorge Amado</p>
    <div class="book-details"><span class="price">R$ 45,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Gabriela, Cravo e Canela', 45.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/df/a3/8f/dfa38f14ed04b253030f24e1a9e1049d.jpg" class="book-cover">
    <h3>Uma Família Feliz</h3>
    <p>Raphael Montes</p>
    <div class="book-details"><span class="price">R$ 54,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Uma Família Feliz', 54.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://m.media-amazon.com/images/I/71gXpS2PAgL.jpg" class="book-cover">
    <h3>Torto Arado</h3>
    <p>Itamar Vieira Junior</p>
    <div class="book-details"><span class="price">R$ 49,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('Torto Arado', 49.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/d3/c3/a9/d3c3a929c662ada2a0068a5ddf8556c6.jpg" class="book-cover">
    <h3>A Cabeça do Santo</h3>
    <p>Socorro Acioli</p>
    <div class="book-details"><span class="price">R$ 44,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('A Cabeça do Santo', 44.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/d4/fd/19/d4fd19cbd2a62e0d30c6d26a77b8e7e6.jpg" class="book-cover">
    <h3>O Avesso da Pele</h3>
    <p>Jeferson Tenório</p>
    <div class="book-details"><span class="price">R$ 49,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('O Avesso da Pele', 49.90)">ADICIONAR À SACOLA</button>
</article>

<article class="book-card">
    <img src="https://i.pinimg.com/736x/0e/fa/12/0efa12fa2f13d0e0495178ecf38058f9.jpg" class="book-cover">
    <h3>A Palavra que Resta</h3>
    <p>Stênio Gardel</p>
    <div class="book-details"><span class="price">R$ 47,90</span></div>
    <button class="btn-add" onclick="adicionarAoCarrinho('A Palavra que Resta', 47.90)">ADICIONAR À SACOLA</button>
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
            <button class="btn-login" onclick="window.location.href='pagamento.html'">FINALIZAR PEDIDO</button>
        </div>
    </aside>

    <script src="js/script.js"></script>