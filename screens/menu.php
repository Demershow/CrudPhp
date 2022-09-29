<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="../assets/styles/style.css" rel="stylesheet" />
    <link href="../assets/styles/menu.css" rel="stylesheet" />

    <title>Cadastro de Cliente</title>

    <script src='../buscaCep.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
    <header>
        <nav id="nav-content">
            <li id='cadastro'><a>Cadastro</a>
                <ul>
                    <li><a href='FormsCad/formCadCliente.php'>Clientes</a></li>
                    <li><a href='FormsCad/formCadFuncionario.php'>Funcionários</a></li>
                    <li><a href='FormsCad/formCadFornecedor.php'>Fornecedores</a></li>
                    <li><a href='FormsCad/formCadProduto.php'>Produtos</a></li>
                    <li><a href='FormsCad/formCadUsuario.php'>Usuários</a></li>
                </ul>
            </li>
            <li id='consulta'><a>Consulta</a>
                <ul>
                    <li><a href='DataConsult/Cliente/consultaCliente.php'>Clientes</a></li>
                    <li><a href='DataConsult/Funcionario/consultaFuncionario.php'>Funcionários</a></li>
                    <li><a href='DataConsult/Fornecedor/consultaFornecedor.php'>Fornecedores</a></li>
                    <li><a href='DataConsult/Produto/consultaProduto.php'>Produtos</a></li>
                    <li><a href='DataConsult/Usuario/consultaUsuario.php'>Usuários</a></li>
                </ul>
            </li>
            <li><a href='login.php'>Sair</a></li>
        </nav>
    </header>
    <div id="container-main">
        <main>
            <section>
                <img src='../assets/images/menu-image.png'>
            </section>
            <section>
                <h1>Menu</h1>
                <p>Bem vindo ao Meu CRUD</p>
            </section>
        </main>
    </div>
</body>

</html>