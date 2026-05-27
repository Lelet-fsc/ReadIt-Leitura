<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importados | ReadIt</title>
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
                <input type="text" placeholder="Pesquisar livros importados..." class="input-busca">
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

    <main class="container">
        <h2 class="sessao-titulo">IMPORTADOS</h2>
        
        <div class="grid-nacionais">
            
            <article class="book-card">
                <img src="https://i1-e.pinimg.com/736x/b7/7a/6b/b77a6beac72cc7a5256c563928f3e5ee.jpg" class="book-cover">
                <h3>The Perfect Match</h3>
                <p>Lyla Mars</p>
                <div class="book-details"><span class="price">R$ 94,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('The Perfect Match', 94.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/54/d2/fd/54d2fd1de472264b658a4a5915e57061.jpg" class="book-cover">
                <h3>Book Lovers</h3>
                <p>Emily Henry</p>
                <div class="book-details"><span class="price">R$ 72,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Book Lovers', 72.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/95/50/a0/9550a06e214c5cdb29274c9376177132.jpg" class="book-cover">
                <h3>Happy Place</h3>
                <p>Emily Henry</p>
                <div class="book-details"><span class="price">R$ 79,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Happy Place', 79.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/86/c4/51/86c4512e843f4c86d55de6a0f8c2afbd.jpg" class="book-cover">
                <h3>Friends, Lovers, and the Big Terrible Thing</h3>
                <p>Matthew Perry</p>
                <div class="book-details"><span class="price">R$ 115,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Friends, Lovers, and the Big Terrible Thing', 115.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/31bM43ICUjL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>I Want to Die but I Want to Eat Tteokbokki</h3>
                <p>Baek Sehee</p>
                <div class="book-details"><span class="price">R$ 92,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('I Want to Die but I Want to Eat Tteokbokki', 92.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/8d/43/5d/8d435db34ef0441e823a718fbc13a1d4.jpg" class="book-cover">
                <h3>Almond</h3>
                <p>Won-pyung Sohn</p>
                <div class="book-details"><span class="price">R$ 84,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Almond', 84.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i.pinimg.com/736x/f4/dc/cf/f4dccf8fdfaf0c9b8818412425b190a5.jpg" class="book-cover">
                <h3>The Perks of Being a Wallflower</h3>
                <p>Stephen Chbosky</p>
                <div class="book-details"><span class="price">R$ 68,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('The Perks of Being a Wallflower', 68.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/ad/d4/5d/add45d056d42ebf4f734cd9673aeba7e.jpg" class="book-cover">
                <h3>Wicked</h3>
                <p>Gregory Maguire</p>
                <div class="book-details"><span class="price">R$ 95,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Wicked', 95.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/736x/d1/21/c9/d121c9e6f6e778bad96b89d17f59fc4f.jpg" class="book-cover">
                <h3>Flowers for Algernon</h3>
                <p>Daniel Keyes</p>
                <div class="book-details"><span class="price">R$ 72,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Flowers for Algernon', 72.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/b0/79/01/b07901fbfbd997b201d3591bee16f603.jpg" class="book-cover">
                <h3>Forgive Me, Leonard Peacock</h3>
                <p>Matthew Quick</p>
                <div class="book-details"><span class="price">R$ 65,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Forgive Me, Leonard Peacock', 65.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/736x/9a/0b/80/9a0b808e23b9700b6bbd37069d026a39.jpg" class="book-cover">
                <h3>Sunrise on the Reaping</h3>
                <p>Suzanne Collins</p>
                <div class="book-details"><span class="price">R$ 99,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Sunrise on the Reaping', 99.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/736x/48/80/1f/48801f435af51e9f360eff64f83e2980.jpg" class="book-cover">
                <h3>Little Women</h3>
                <p>Louisa May Alcott</p>
                <div class="book-details"><span class="price">R$ 58,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Little Women', 58.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/736x/02/53/e0/0253e0e687517b12411f55988a0dc277.jpg" class="book-cover">
                <h3>Battle Royale</h3>
                <p>Koushun Takami</p>
                <div class="book-details"><span class="price">R$ 105,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Battle Royale', 105.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/39/41/67/39416792c5dcce3fbfaa34ae03571229.jpg" class="book-cover">
                <h3>The Seven Husbands of Evelyn Hugo</h3>
                <p>Taylor Jenkins Reid</p>
                <div class="book-details"><span class="price">R$ 82,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('The Seven Husbands of Evelyn Hugo', 82.90)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i.pinimg.com/736x/09/8b/d1/098bd1bc20f853640ce7c7e92fa6e061.jpg" class="book-cover">
                <h3>It Ends with Us</h3>
                <p>Colleen Hoover</p>
                <div class="book-details"><span class="price">R$ 78,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('It Ends with Us', 78.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/ee/06/da/ee06da4b1bb681c5b9e9bc03b0d9f7ae.jpg" class="book-cover">
                <h3>A Court of Thorns and Roses</h3>
                <p>Sarah J. Maas</p>
                <div class="book-details"><span class="price">R$ 96,50</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Court of Thorns and Roses', 96.50)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i1-e.pinimg.com/1200x/57/f3/c8/57f3c8e26f7841e92acba841eec6c9c1.jpg" class="book-cover">
                <h3>The Midnight Library</h3>
                <p>Matt Haig</p>
                <div class="book-details"><span class="price">R$ 75,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('The Midnight Library', 75.00)">ADICIONAR</button>
            </article>

            <article class="book-card">
                <img src="https://i.pinimg.com/736x/3a/73/23/3a73238012f149534b21a00078c3ff2c.jpg" class="book-cover">
                <h3>Normal People</h3>
                <p>Sally Rooney</p>
                <div class="book-details"><span class="price">R$ 74,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Normal People', 74.90)">ADICIONAR</button>
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
