<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/listaCliente.css">
    <link rel="icon" type="image/png" href="images/logoc.png"/>
    <title>Car System</title>
</head>
<body>
    <header class="nav-bar">
        <div class="hearder">
            <div class="logo-navbar">
                <a href="./telaInicial.php"><img src="../img/logoc.png" alt=""></a>
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
                    <h2>FUNCIONARIO</h2>
                </div>
                <div class="button-novo">
                    <a href="./cadFuncionario.php">
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
                <li>Nome</li>
                <li>CPF</li>
                <li>Editar</li>
                <li>Remover</li>
            </ul>
        </div>
        <div class="box-titulos-2">
            <ul>
                <li>Maria Cruz</li>
                <li>08257845200</li>
                <li> <a href="./editFuncionario.php">Editar</a> </li>
                <li> <input type="button" value="Remover" onclick="exibeAlert()"></li>
            </ul>
        </div>
    </div>

    <script>
        function exibeAlert() {
            alert("Deseja remover o item?");
        }
    </script>
    </body>
</html>