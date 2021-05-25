<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/cadastrarProduto.css">
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
                    <h2>ADICIONAR CLIENTE</h2>
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
                <li>COMPRAS</li>
                <li>VENDAS</li>
                <li>PRODUTOS</li>
                <li>CLIENTES</li>
                <li>FORNECEDORES</li>
                <li>FUNCIONÁRIO</li>
                <li>PROMOÇÕES</li>
            </ul>
        </div>
    </div>

        <div class="form-box">
            <form action="" class="form-produto">
                <div class="form-name">
                    <span>NOME</span>
                    <input type="text" name="user">
                </div>
                <div class="form-rg">
                    <span>RG</span>
                    <input type="text">
                </div>
                <div class="form-cpf">
                    <span>CPF/CNPJ</span>
                    <input type="text">
                </div>
                <div class="form-endereco">
                    <span>ENDEREÇO</span>
                    <input type="text">
                </div>
                <div class="form-tel">
                    <span>TELEFONE</span>
                    <input type="text">
                </div>
            </form>
        </div>

    <div class="box-final">
        <div class="cancel">
            <span>CANCELAR CADASTRO</span>
        </div>
        <div class="cadastro">
            <span>CONCLUIR CADASTRO</span>
        </div>
    </div>
          

</body>
</html>