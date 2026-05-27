<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadêmicos | ReadIt</title>
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
                <input type="text" placeholder="Pesquisar livros acadêmicos..." class="input-busca">
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
        <h2 class="sessao-titulo">ACADÊMICOS</h2>
        
        <div class="grid-nacionais">
            
            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61TTIqA77QL._SY342_.jpg" class="book-cover">
                <h3>Algoritmos E Lógica Da Programação</h3>
                <p>Marco A. Furlan de Souza</p>
                <div class="book-details"><span class="price">R$ 77,54</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Algoritmos E Lógica Da Programação', 77.54)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81MNGKuzJcL._SY342_.jpg" class="book-cover">
                <h3>Estruturas de Dados e Algoritmos</h3>
                <p>Thomas Cormen</p>
                <div class="book-details"><span class="price">R$ 129,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Estruturas de Dados e Algoritmos', 129.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71afmekhEBL._SY342_.jpg" class="book-cover">
                <h3>Redes de Computadores</h3>
                <p>James Kurose</p>
                <div class="book-details"><span class="price">R$ 99,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Redes de Computadores', 99.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/518LD-MHw2L._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Inteligência Artificial</h3>
                <p>Stuart Russell</p>
                <div class="book-details"><span class="price">R$ 149,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Inteligência Artificial', 149.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71bdhn4espL._SY342_.jpg" class="book-cover">
                <h3>Sistemas Operacionais</h3>
                <p>Luiz Ricardo Mantovani</p>
                <div class="book-details"><span class="price">R$ 158,00</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Sistemas Operacionais', 158.00)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/513h09R6yTL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Engenharia de Software</h3>
                <p>Ian Sommerville</p>
                <div class="book-details"><span class="price">R$ 119,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Engenharia de Software', 119.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81EiIbA9l1L._SY342_.jpg" class="book-cover">
                <h3>Fundamentos de Física - Vol 1</h3>
                <p>David Halliday</p>
                <div class="book-details"><span class="price">R$ 212,25</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Fundamentos de Física - Vol 1', 212.25)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91fFv0Dk0+L._SY342_.jpg" class="book-cover">
                <h3>Química: A Ciência Central</h3>
                <p>Theodore Brown</p>
                <div class="book-details"><span class="price">R$ 279,20</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Química: A Ciência Central', 279.20)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/31W+zCPviCL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Cálculo: Volume 1</h3>
                <p>James Stewart</p>
                <div class="book-details"><span class="price">R$ 109,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Cálculo: Volume 1', 109.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51unCSBv4LL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Álgebra Linear</h3>
                <p>Gilbert Strang</p>
                <div class="book-details"><span class="price">R$ 99,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Álgebra Linear', 99.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81AZX+1-xPL._SY342_.jpg" class="book-cover">
                <h3>Estatistica Basica</h3>
                <p>Pedro A. Morettin</p>
                <div class="book-details"><span class="price">R$ 89,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Estatistica Basica', 89.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51smRT7UqVL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Biologia Molecular da Célula</h3>
                <p>Bruce Alberts</p>
                <div class="book-details"><span class="price">R$ 159,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Biologia Molecular da Célula', 159.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91d5vtwPIqL._SY342_.jpg" class="book-cover">
                <h3>História da Filosofia Ocidental</h3>
                <p>Bertrand Russell</p>
                <div class="book-details"><span class="price">R$ 69,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('História da Filosofia Ocidental', 69.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/A1YmAxoscJL._SY342_.jpg" class="book-cover">
                <h3>Crítica da Razão Pura</h3>
                <p>Immanuel Kant</p>
                <div class="book-details"><span class="price">R$ 76,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Crítica da Razão Pura', 76.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51xrMBKS-DL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>O Mundo de Sofia</h3>
                <p>Jostein Gaarder</p>
                <div class="book-details"><span class="price">R$ 49,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Mundo de Sofia', 49.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/61AWlxU5f1L._SY342_.jpg" class="book-cover">
                <h3>Ser e o nada</h3>
                <p>Jean-Paul Sartre</p>
                <div class="book-details"><span class="price">R$ 64,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Ser e o nada', 64.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/515B0GKmtpL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Assim Falou Zaratustra</h3>
                <p>Friedrich Nietzsche</p>
                <div class="book-details"><span class="price">R$ 54,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Assim Falou Zaratustra', 54.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/41rGw9ooMHL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Ética a Nicômaco</h3>
                <p>Aristóteles</p>
                <div class="book-details"><span class="price">R$ 44,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Ética a Nicômaco', 44.90)">ADICIONAR À SACOLA</button>
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