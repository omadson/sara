<?php
	include("functions.php");
	get_header();
?>
	<!-- Página de Iluminação -->
	<?php
		conectar();
		validar();
	?>
		<div data-role="page" id="portao">
		<header data-role="header">
			<a href="index.php" data-icon="home">Home</a>
			<h1><?php get_title(); ?></h1>
		</header>
		<?php
			$porta = fopen(PORT, "w+");
			send_data($porta, "portao.php");
			fwrite($porta, 'k');
			usleep(100000);
			$data = fgets($porta);
			$v = ($data == '0')?"Aberto":"Fechado";
		?>
		<div data-role="content">
			<ul data-role="listview" data-inset="true">
				<li data-role="list-divider">Segurança</li>
				<li><a href="?f=l">
				Portao 1
				<span class="ui-li-count"><?php echo $v; ?></span>
				</a></li>
			</ul>
		</div>
		<?php get_footer(); ?>
