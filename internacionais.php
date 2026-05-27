<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internacionais | ReadIt </title>
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
                <input type="text" placeholder="Pesquisar livros internacionais..." class="input-busca">
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
        <h2 class="sessao-titulo">INTERNACIONAIS</h2>
        
        <div class="grid-nacionais">
            
            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91yEPgRcELL._SL1500_.jpg" class="book-cover">
                <h3>Os Sete Maridos de Evelyn Hugo</h3>
                <p>Taylor Jenkins Reid</p>
                <div class="book-details"><span class="price">R$ 54,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Os Sete Maridos de Evelyn Hugo', 54.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91r5G8RxqfL._SL1500_.jpg" class="book-cover">
                <h3>É Assim que Acaba</h3>
                <p>Colleen Hoover</p>
                <div class="book-details"><span class="price">R$ 49,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('É Assim que Acaba', 49.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81OmtVkUTcL._SL1500_.jpg" class="book-cover">
                <h3>Corte de Espinhos e Rosas</h3>
                <p>Sarah J. Maas</p>
                <div class="book-details"><span class="price">R$ 62,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Corte de Espinhos e Rosas', 62.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81iqH8dpjuL._SL1500_.jpg" class="book-cover">
                <h3>A Biblioteca da Meia-Noite</h3>
                <p>Matt Haig</p>
                <div class="book-details"><span class="price">R$ 44,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Biblioteca da Meia-Noite', 44.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91SDZ2eUj+L._SL1500_.jpg" class="book-cover">
                <h3>Verity</h3>
                <p>Colleen Hoover</p>
                <div class="book-details"><span class="price">R$ 41,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Verity', 41.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/41HptMSPwgL.jpg" class="book-cover">
                <h3>Lições de Química</h3>
                <p>Bonnie Garmus</p>
                <div class="book-details"><span class="price">R$ 56,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Lições de Química', 56.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81Eh8kIXCrL._SL1500_.jpg" class="book-cover">
                <h3>A Inquilina</h3>
                <p>Freida McFadden</p>
                <div class="book-details"><span class="price">R$ 47,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Inquilina', 47.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://imagens.disal.com.br/produtos/ampliada/9913440.jpg" class="book-cover">
                <h3>Quarta Asa</h3>
                <p>Rebecca Yarros</p>
                <div class="book-details"><span class="price">R$ 69,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Quarta Asa', 69.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/4128BOZ-OhL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Pessoas Normais</h3>
                <p>Sally Rooney</p>
                <div class="book-details"><span class="price">R$ 48,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Pessoas Normais', 48.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91KL76cFphL._SL1500_.jpg" class="book-cover">
                <h3>Daisy Jones & The Six</h3>
                <p>Taylor Jenkins Reid</p>
                <div class="book-details"><span class="price">R$ 52,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Daisy Jones & The Six', 52.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81LTEfXYgcL._SL1500_.jpg" class="book-cover">
                <h3>A Hipótese do Amor</h3>
                <p>Ali Hazelwood</p>
                <div class="book-details"><span class="price">R$ 45,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Hipótese do Amor', 45.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71SYepTUsDL._SL1500_.jpg" class="book-cover">
                <h3>Vermelho, Branco e Sangue Azul</h3>
                <p>Casey McQuiston</p>
                <div class="book-details"><span class="price">R$ 46,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Vermelho, Branco e Sangue Azul', 46.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91R8S52UP6L._SL1500_.jpg" class="book-cover">
                <h3>A Paciente Silenciosa</h3>
                <p>Alex Michaelides</p>
                <div class="book-details"><span class="price">R$ 49,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Paciente Silenciosa', 49.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61y5iLUKS3L._SL1005_.jpg" class="book-cover">
                <h3>Melhor do que nos Filmes</h3>
                <p>Lynn Painter</p>
                <div class="book-details"><span class="price">R$ 42,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Melhor do que nos Filmes', 42.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51FZttDo1tL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Chama de Ferro</h3>
                <p>Rebecca Yarros</p>
                <div class="book-details"><span class="price">R$ 89,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Chama de Ferro', 89.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91-j7Y9j+CL._SL1500_.jpg" class="book-cover">
                <h3>Amanhã, Amanhã e Ainda Outro Amanhã</h3>
                <p>Gabrielle Zevin</p>
                <div class="book-details"><span class="price">R$ 58,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Amanhã, Amanhã e Ainda Outro Amanhã', 58.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91mdEwOzdGS._SL1500_.jpg" class="book-cover">
                <h3>Uma Vida Pequena</h3>
                <p>Hanya Yanagihara</p>
                <div class="book-details"><span class="price">R$ 94,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Uma Vida Pequena', 94.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81qMz8Yl2YL._SL1500_.jpg" class="book-cover">
                <h3>Circe</h3>
                <p>Madeline Miller</p>
                <div class="book-details"><span class="price">R$ 51,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Circe', 51.90)">ADICIONAR À SACOLA</button>
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
