function chaveCarrinho() {
    var usuario = localStorage.getItem('usuarioAtual') || 'visitante';
    return 'carrinho_' + usuario;
}

var itens = JSON.parse(localStorage.getItem(chaveCarrinho())) || [];
var totalCompra = calcularTotal();

function salvarCarrinho() {
    localStorage.setItem(chaveCarrinho(), JSON.stringify(itens));
}

function calcularTotal() {
    return itens.reduce(function(total, item) {
        return total + Number(item.preco);
    }, 0);
}

function atualizarContador() {
    var contador = document.getElementById('carrinho-contador');
    if (contador) contador.innerText = itens.length;
}

function adicionarAoCarrinho(nome, preco) {
    itens.push({ nome: nome, preco: Number(preco) });
    totalCompra = calcularTotal();
    salvarCarrinho();
    atualizarContador();
    renderizarCarrinho();

    var painel = document.getElementById('carrinho-painel');
    if (painel) painel.classList.add('active');
}

function remover(index) {
    itens.splice(index, 1);
    totalCompra = calcularTotal();
    salvarCarrinho();
    atualizarContador();
    renderizarCarrinho();
}

function renderizarCarrinho() {
    var lista = document.getElementById('carrinho-itens-lista');
    var displayTotal = document.getElementById('carrinho-subtotal');

    if (!lista || !displayTotal) return;

    lista.innerHTML = '';

    if (itens.length === 0) {
        lista.innerHTML = '<p style="padding:15px;">Seu carrinho está vazio.</p>';
    } else {
        itens.forEach(function(item, i) {
            lista.innerHTML += `
                <div style="display:flex; justify-content:space-between; padding:15px; border-bottom:1px solid #eee;">
                    <span style="font-size:12px;">${item.nome}</span>
                    <span>R$ ${Number(item.preco).toFixed(2)} <button class="btn-remover" onclick="remover(${i})">🗑️</button></span>
                </div>`;
        });
    }

    displayTotal.innerText = 'R$ ' + totalCompra.toFixed(2);
}

function toggleCarrinho() {
    var painel = document.getElementById('carrinho-painel');
    if (painel) painel.classList.toggle('active');
}

function finalizarPedido() {
    alert('Pedido Finalizado com Sucesso!');
    localStorage.removeItem(chaveCarrinho());
    itens = [];
    totalCompra = 0;
    atualizarContador();
    renderizarCarrinho();
}

function mostrarPagamento() {
    var selecionado = document.querySelector('input[name="pgto"]:checked');
    if (!selecionado) return;

    var opcao = selecionado.value;
    var area = document.getElementById('area-resultado');
    if (!area) return;
    
    if (opcao === 'pix') {
        var urlQR = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=00020126580014br.gov.bcb.pix0136readit@loja.com.br';
        
        area.innerHTML = `
            <br>
            <h3 style="color: #5E725C;">Escaneie o QR Code:</h3>
            <img src="${urlQR}" alt="QR Code PIX">
        `;
        
    } else if (opcao === 'boleto') {
        var n1 = Math.floor(Math.random() * 90000) + 10000;
        var n2 = Math.floor(Math.random() * 90000) + 10000;
        var n3 = Math.floor(Math.random() * 90000) + 10000;
        var n4 = Math.floor(Math.random() * 9000) + 1000;
        var codigo = `34191.${n1} 02345.${n2} 98765.${n3} 1 ${n4}00000000`;
        
        area.innerHTML = `
            <br>
            <h3 style="color: #5E725C;">Boleto Gerado:</h3>
            <p style="font-size: 1.2rem; font-weight: bold; background: #eee; padding: 10px;">${codigo}</p>
        `;
    }
}

function prepararPedido() {
    var carrinhoAtual = JSON.parse(localStorage.getItem(chaveCarrinho())) || [];

    if (carrinhoAtual.length === 0) {
        alert('Seu carrinho está vazio.');
        return false;
    }

    var totalAtual = carrinhoAtual.reduce(function(total, item) {
        return total + Number(item.preco);
    }, 0);

    var campoCarrinho = document.getElementById('carrinho-json');
    var campoTotal = document.getElementById('carrinho-total');

    if (campoCarrinho) campoCarrinho.value = JSON.stringify(carrinhoAtual);
    if (campoTotal) campoTotal.value = totalAtual.toFixed(2);

    return true;
}

window.addEventListener('load', function() {
    itens = JSON.parse(localStorage.getItem(chaveCarrinho())) || [];
    totalCompra = calcularTotal();
    atualizarContador();
    renderizarCarrinho();
});