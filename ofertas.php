<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros em Oferta | ReadIt</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header-topo">
        <div class="container header-flex">
            <h1 class="titulo-site" onclick="window.location.href='index.html'">
                READ<span class="titulo-site-span">IT</span>
            </h1>
            <div class="busca-container">
                <input type="text" placeholder="Pesquisar livros em ofertas..." class="input-busca">
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
            <a href="nacionais.html">NACIONAIS</a>
            <a href="internacionais.html">INTERNACIONAIS</a>
            <a href="ebooks.html">E-BOOKS</a>
            <a href="academicos.html">ACADÊMICOS</a>
            <a href="importados.html">IMPORTADOS</a>
            <a href="papelaria.html">PAPELARIA</a>
            <a href="ofertas.html">LIVROS EM OFERTA</a>
        </div>
    </nav>

    <main class="container">
        <h2 class="sessao-titulo">LIVROS EM OFERTA</h2>
        
        <div class="grid-nacionais">
            
            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61+cCiPBnWL._SL1360_.jpg" class="book-cover">
                <h3>O Alienista</h3>
                <p>Machado de Assis</p>
                <div class="book-details"><span class="price">R$ 12,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Alienista', 12.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91BsZhxCRjL._SL1500_.jpg" class="book-cover">
                <h3>A Revolução dos Bichos</h3>
                <p>George Orwell</p>
                <div class="book-details"><span class="price">R$ 19,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Revolução dos Bichos', 19.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/819js3EQwbL._SL1500_.jpg" class="book-cover">
                <h3>1984</h3>
                <p>George Orwell</p>
                <div class="book-details"><span class="price">R$ 22,50</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('1984', 22.50)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81TmOZIXvzL._SL1500_.jpg" class="book-cover">
                <h3>O Pequeno Príncipe</h3>
                <p>Antoine de Saint-Exupéry</p>
                <div class="book-details"><span class="price">R$ 15,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Pequeno Príncipe', 15.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81eAcV387dL._SL1500_.jpg" class="book-cover">
                <h3>Alice no País das Maravilhas</h3>
                <p>Lewis Carroll</p>
                <div class="book-details"><span class="price">R$ 14,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Alice no País das Maravilhas', 14.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61GFsO7j0ZL._SL1021_.jpg" class="book-cover">
                <h3>Sherlock Holmes: Um Estudo em Vermelho</h3>
                <p>Arthur Conan Doyle</p>
                <div class="book-details"><span class="price">R$ 18,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Sherlock Holmes: Um Estudo em Vermelho', 18.00)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91Kz+sC5X0L._SL1500_.jpg" class="book-cover">
                <h3>Frankenstein</h3>
                <p>Mary Shelley</p>
                <div class="book-details"><span class="price">R$ 21,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Frankenstein', 21.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61MgodE1s0L._SL1360_.jpg" class="book-cover">
                <h3>Drácula</h3>
                <p>Bram Stoker</p>
                <div class="book-details"><span class="price">R$ 24,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Drácula', 24.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51qh7cI06QL._SL1050_.jpg" class="book-cover">
                <h3>O Retrato de Dorian Gray</h3>
                <p>Oscar Wilde</p>
                <div class="book-details"><span class="price">R$ 17,50</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Retrato de Dorian Gray', 17.50)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71FMCr5Z9rL._SL1360_.jpg" class="book-cover">
                <h3>A Arte da Guerra</h3>
                <p>Sun Tzu</p>
                <div class="book-details"><span class="price">R$ 13,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Arte da Guerra', 13.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/612B0id4gNL._SL1240_.jpg" class="book-cover">
                <h3>Meditações</h3>
                <p>Marco Aurélio</p>
                <div class="book-details"><span class="price">R$ 23,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Meditações', 23.00)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71Zy2zMjZ+L._SL1500_.jpg" class="book-cover">
                <h3>Manifesto Comunista</h3>
                <p>Karl Marx</p>
                <div class="book-details"><span class="price">R$ 11,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Manifesto Comunista', 11.90)">ADICIONAR À SACOLA</button>
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
</body>
</html>
