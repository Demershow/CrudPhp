<!doctype html>
<html lang=''>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="../../../assets/styles/style.css" rel="stylesheet" />
	<link href="../../../assets/styles/consulta.css" rel="stylesheet" />

	<title>Consulta Usuário</title>

	<script src='../../buscaCep.js'></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
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
	<main>
		<section class='container-consulta'>
			<?php

			include_once('../../../conexao.php');
			try {
				$select = $conn->prepare('SELECT * FROM usuario');
				$select->execute();
				while ($row = $select->fetch()) {
					echo "<div class='group-consulta'>";
					echo "<label>Codigo: " . $row['codigo'] . "</label>";
					echo "<label>Nome Completo: " . $row['nome'] . "</label>";
					echo "<label>Login: " . $row['loginUsuario'] . "</label>";
					echo "<label>E-mail: " . $row['email'] . "</label>";
					echo "<label>Senha: " . $row['senha'] . "</label>";
			?>
					<button onclick="window.location.href='alterarUsuario.php?id=<?php echo $row['codigo']; ?>'">
						Alterar
					</button>

					<button onclick="window.location.href='../../DataExclude/Usuario/excluirUsuario.php?id=<?php echo $row['codigo']; ?>'">
						Excluir
					</button>
					</div>
			<?php
				}
			} catch (PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
			?>
		</section>
	</main>
</body>
<html>