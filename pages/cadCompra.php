<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/cadastrarProduto.css">
    <link rel="stylesheet" href="../css/cadCompra.css">
    <link rel="icon" type="image/png" href="images/logoc.png"/>
    <title>Car System</title>
</head>
<body>
    <header class="nav-bar">
        <div class="hearder">
            <div class="logo-navbar">
                <a href="/pages/TelaInicial.php"><img src="../img/logoc.png" alt=""></a>
                <div class="usuario-navbar">
                    <a href="#"><img src="../img/user.png" alt=""></a>
            </div>
            </div>    
        </div>
        <div class="sub-navbar">
            <div class="sub-navbar-cont">
                <div class="search-sub">
                    <a href="#"><img src="../img/search.png" alt=""></a>
                </div>
                <div class="sub-titulo">
                    <h2>ADICIONAR COMPRA</h2>
                </div>
                <div class="button-novo">
                    <a href="">
                        <img src="../img/plus.svg" alt="">
                        <h3>ADCIONAR</h3>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar">
        <div class="side-bar-lista">
        <ul>
                <li> <a href="../pages/cadCompra.php">COMPRAS</a> </li>
                <li> <a href="../pages/cadVenda.php">VENDAS</a> </li>
                <li> <a href="../pages/listaProduto.php">PRODUTOS</a> </li>
                <li> <a href="../pages/listaCliente.php">CLIENTES</a> </li>
                <li> <a href="../pages/lisaFornecedor.php">FORNECEDORES</a> </li>
                <li> <a href="../pages/listaFuncionário.php">FUNCIONÁRIO</a> </li>
                <li> <a href="">PROMOÇÕES</a> </li>
            </ul>
        </div>
    </div>
    <div class="form-box">
        <div class="box-titulos">
            <ul>
                <li>Produto</li>
                <li>Quantidade</li>
                <li>Valor Bruto</li>
                <li>Total</li>
                <li>Editar</li>
                <li>Remover</li>
            </ul>
        </div>
    </div>

    <div class="compra-1">
        
    </div>

    <div class="box-final">
        <div class="cancel">
            <span>CANCELAR COMPRA</span>
        </div>
        <div class="cadastro">
        <input type="button" value="CONCLUIR COMPRA" onclick="exibeAlert()">
        </div>
    </div>

    <script>
        function exibeAlert() {
            alert("Compra Concluída");
        }
    </script>

    </body>
</html>