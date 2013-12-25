<?php
	include("functions.php");
	get_header();
?>
	<div data-role="page" id="home">
		<header data-role="header">
			<h1><?php get_title(); ?></h1>
		</header>
		<div data-role="content">
			<?php
				conectar();
				session_start();
				if (isset($_REQUEST['Entrar'])) {
					$login  = $_POST['login'];
					$senha  = $_POST['senha'];
					$sql	  = "select * from admin where login = '$login' and senha = '$senha'";
					$query  = mysql_query($sql) or die ('Erro na seleção: '.mysql_error());
					if ($result = mysql_fetch_array($query)) {
						$_SESSION['logado'] = TRUE;
						header("index.php");
					} else {
						echo "<h2>Login ou senha estão estão incorretos!</h2>";
					}
				}
				if (! isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE) {
					// Código caso o cara não esteja logado.
			?>
				<form action="" method="post">
					<div data-role="fieldcontain">
						<label for="login">Login</label>
						<input type="text" name="login" id="login" />
					</div>
					<div data-role="fieldcontain">
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" />
					</div>
					<input type="submit" value="Entrar" name="Entrar" />
				</form>
			<?php		
				} else {
					// Código caso o cara esteja logado.
			?>
			<ul data-role="listview" data-inset="true">
				<li data-role="list-divider">Sistemas</li>
				<li><a href="iluminacao.php" id="p2"><img src="img/luz1.png" class="ui-li-icon" />
				Iluminação
				<span class="ui-li-count">7</span>
				</a></li>
				<li><a href="refrigeracao.php" id="p3"><img src="img/ar.png" class="ui-li-icon" />
				Climatização
				<span class="ui-li-count">2</span>
				</a></li>
				<li><a href="portao.php" id="p4"><img src="img/port.png" class="ui-li-icon" />
				Segurança
				<span class="ui-li-count">1</span>
				</a></li>
				<!--
				<li><a href="favoritos.php" id="p5"><img src="img/star.png" class="ui-li-icon" />
				Favoritos
				<span class="ui-li-count">3</span>
				</a></li>
				-->
			</ul>
			<ul data-role="listview" data-inset="true" data-theme="b">
				<li><a href="sobre.php"><img src="img/info.png" class="ui-li-icon" />
				Sobre
				<span class="ui-li-count">4</span>
				</a></li>
			</ul>
			<?php	
				}
			?>
			</div>
<?php get_footer(); ?>
