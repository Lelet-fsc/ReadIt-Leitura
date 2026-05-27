<?php
session_start();
include("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-books | ReadIt</title>
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
                <input type="text" placeholder="Pesquisar e-books..." class="input-busca">
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
        <h2 class="sessao-titulo">E-BOOKS</h2>
        
        <div class="grid-nacionais">
            
            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/615xknuR6CL._SY342_.jpg" class="book-cover">
                <h3>Sociedade do Cansaço</h3>
                <p>Byung-Chul Han</p>
                <div class="book-details"><span class="price">R$ 31,85</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Sociedade do Cansaço', 31.85)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/41F+fhjpcFL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>O Avesso da Pele</h3>
                <p>Jeferson Tenório</p>
                <div class="book-details"><span class="price">R$ 29,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Avesso da Pele', 29.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51nln+k1PQL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Cem Anos de Solidão</h3>
                <p>Gabriel García Márquez</p>
                <div class="book-details"><span class="price">R$ 44,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Cem Anos de Solidão', 44.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/41MRn6hy8-L._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Duna</h3>
                <p>Frank Herbert</p>
                <div class="book-details"><span class="price">R$ 49,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Duna', 49.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51ryWW7kBDL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>O Problema dos Três Corpos</h3>
                <p>Cixin Liu</p>
                <div class="book-details"><span class="price">R$ 42,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Problema dos Três Corpos', 42.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/81CGmkRG9GL._SY342_.jpg" class="book-cover">
                <h3>O Nome do Vento</h3>
                <p>Patrick Rothfuss</p>
                <div class="book-details"><span class="price">R$ 39,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Nome do Vento', 39.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/715JOcuqSSL._SY342_.jpg" class="book-cover">
                <h3>A Metamorfose</h3>
                <p>Franz Kafka</p>
                <div class="book-details"><span class="price">R$ 24,95</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Metamorfose', 24.95)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51Q954CZD1L._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Kindred: Laços de Sangue</h3>
                <p>Octavia Butler</p>
                <div class="book-details"><span class="price">R$ 36,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Kindred: Laços de Sangue', 36.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51DOkmV31rL._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Hábitos Atômicos</h3>
                <p>James Clear</p>
                <div class="book-details"><span class="price">R$ 31,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Hábitos Atômicos', 31.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://skoob.s3.amazonaws.com/livros/12110657/NAO_DOPAMINA_EBOOK_3396508765B.jpg" class="book-cover">
                <h3>Nação Dopamina</h3>
                <p>Dra. Anna Lembke</p>
                <div class="book-details"><span class="price">R$ 46,85</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Nação Dopamina', 46.85)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51x5aXdYW-L._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>A Coragem de Ser Imperfeito</h3>
                <p>Brené Brown</p>
                <div class="book-details"><span class="price">R$ 35,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Coragem de Ser Imperfeito', 35.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71sh8JtiZbL._SY342_.jpg" class="book-cover">
                <h3>O Poder do Agora</h3>
                <p>Eckhart Tolle</p>
                <div class="book-details"><span class="price">R$ 29,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Poder do Agora', 29.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91AG2JfRDUL._SY342_.jpg" class="book-cover">
                <h3>Algoritmos para Viver</h3>
                <p>Brian Christian</p>
                <div class="book-details"><span class="price">R$ 41,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Algoritmos para Viver', 41.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/51FBILW8cWS._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>Uma Breve História do Tempo</h3>
                <p>Stephen Hawking</p>
                <div class="book-details"><span class="price">R$ 37,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Uma Breve História do Tempo', 37.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://covers.openlibrary.org/b/id/15167284-M.jpg" class="book-cover">
                <h3>Pálido Ponto Azul</h3>
                <p>Carl Sagan</p>
                <div class="book-details"><span class="price">R$ 74,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Pálido Ponto Azul', 74.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/413th2NQc8L._SY445_SX342_ML2_.jpg" class="book-cover">
                <h3>A Paciente Silenciosa</h3>
                <p>Alex Michaelides</p>
                <div class="book-details"><span class="price">R$ 28,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('A Paciente Silenciosa', 28.90)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/91DZobBc1BL._SY342_.jpg" class="book-cover">
                <h3>Coraline</h3>
                <p>Neil Gaiman</p>
                <div class="book-details"><span class="price">R$ 54,12</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('Coraline', 54.12)">ADICIONAR À SACOLA</button>
            </article>

            <article class="book-card">
                <img src="https://m.media-amazon.com/images/I/71oxE2vkZmL._SY342_.jpg" class="book-cover">
                <h3>O Homem de Giz</h3>
                <p>C.J. Tudor</p>
                <div class="book-details"><span class="price">R$ 26,90</span></div>
                <button class="btn-add" onclick="adicionarAoCarrinho('O Homem de Giz', 26.90)">ADICIONAR À SACOLA</button>
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
