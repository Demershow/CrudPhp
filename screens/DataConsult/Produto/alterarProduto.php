<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="../../../assets/styles/style.css" rel="stylesheet" />
	<link href="../../../assets/styles/forms.css" rel="stylesheet" />

	<title>Alterar Produto</title>

	<script src='../../../buscaCep.js'></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>

	<?php

	$cod = $_GET['id'];

	include_once('../../../conexao.php');

	$select = $conn->prepare("SELECT * FROM produto where codigo=$cod");
	$select->execute();

	$row = $select->fetch();

	?>
	<header>
        <nav class="nav-content">
            <li id='cadastro'><a>Cadastro</a>
                <ul>
                    <li><a href='../../FormsCad/formCadCliente.php'>Clientes</a></li>
                    <li><a href='../../FormsCad/formCadFuncionario.php'>Funcionários</a></li>
                    <li><a href='../../FormsCad/formCadFornecedor.php'>Fornecedores</a></li>
                    <li><a href='../../FormsCad/formCadProduto.php'>Produtos</a></li>
                    <li><a href='../../FormsCad/formCadUsuario.php'>Usuários</a></li>
                </ul>
            </li>
            <li id='consulta'><a>Consulta</a>
                <ul>
                    <li><a href='../../DataConsult/Cliente/consultaCliente.php'>Clientes</a></li>
                    <li><a href='../../DataConsult/Funcionario/consultaFuncionario.php'>Funcionários</a></li>
                    <li><a href='../../DataConsult/Fornecedor/consultaFornecedor.php'>Fornecedores</a></li>
                    <li><a href='../../DataConsult/Produto/consultaProduto.php'>Produtos</a></li>
                    <li><a href='../../DataConsult/Usuario/consultaUsuario.php'>Usuários</a></li>
                </ul>
            </li>
            <li><a href='login.php'>Sair</a></li>
        </nav>
    </header>
	<div id="container-main">
		<main>
			<section id='form'>
				<article>
					<img src="../../../assets/images/formCadImage.jpg">
				</article>
				<article id='form-container'>
					<h1>Alterar Cliente</h1>
					<form action="confirmaAlterarProduto.php" method="POST">
						<div id='form-cad'>
							<div class="form-group">
								<label for="cname"><b>Código</b></label>
								<input type="text" id="codigo	" name="codigo" value="<?php echo $row['codigo']; ?>" readonly="true">
							</div>
							<div class='form-group'>
								<label>Nome: </label>
								<input type="text" id="nome" name="nome" maxlength="50" required value='<?php echo $row['nome']; ?>'>
							</div>
							<div class='form-group'>
								<label>Preço: </label>
								<input type="text" id="vlPreco" name="vlPreco" maxlength='11' required value='<?php echo $row['vlPreco']; ?>'>
							</div>
							<div class='form-group'>
								<label>Quantidade em Estoque: </label>
								<input type="number" id="qtEstoque" name="qtEstoque" maxlength='9' required value='<?php echo $row['qtEstoque']; ?>'>
							</div>
						</div>
						<div>
							<input type="submit" name="Cadastrar" class="form-button btnEnviar" value="Confirmar">
							<input type="reset" name="Limpar" id='btnCancelar' class="form-button btnRedefinir" value="Cancelar" onclick="location.href = 'consultaProduto.php'">
						</div>
					</form>
				</article>
			</section>
		</main>
	</div>
</body>

</html>