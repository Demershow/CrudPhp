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

	<title>Consulta Fornecedor</title>

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
				$select = $conn->prepare('SELECT * FROM fornecedor');
				$select->execute();
				while ($row = $select->fetch()) {
					echo "<div class='group-consulta'>";
					echo "<label>Codigo: " . $row['codigo'] . "</label>";
					echo "<label>Nome Empresa: " . $row['nmEmpresa'] . "</label>";
					echo "<label>Nome Contato: " . $row['nmContato'] . "</label>";
					echo "<label>Produto: " . $row['produto'] . "</label>";
					echo "<label>CNPJ: " . $row['cnpj'] . "</label>";
					echo "<label>IE: " . $row['ie'] . "</label>";
					echo "<label>CEP: " . $row['cep'] . "</label>";
					echo "<label>Numero: " . $row['numero'] . "</label>";
					echo "<label>Celular: " . $row['celular'] . "</label>";
					echo "<label>Email: " . $row['email'] . "</label>";
			?>
					<button onclick="window.location.href='alterarFornecedor.php?id=<?php echo $row['codigo']; ?>'">
						Alterar
					</button>

					<button onclick="window.location.href='../../DataExclude/Fornecedor/excluirFornecedor.php?id=<?php echo $row['codigo']; ?>'">
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