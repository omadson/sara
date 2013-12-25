<?php
	include("functions.php");
	get_header();
?>
	<!-- Página de Refrigeração -->
	<?php
		conectar();
		validar();
	?>
		<div data-role="page" id="refrigeracao">
		<header data-role="header">
			<a href="index.php" data-icon="home">Home</a>
			<h1><?php get_title(); ?></h1>
		</header>
		<?php
			$porta = fopen(PORT, "w+");
			send_data($porta, "refrigeracao.php");
			fwrite($porta, 'm');
			usleep(100000);
			$msg = fgets($porta);
			$data = explode(" ",$msg);
			for ($i=0;$i<=1;$i++)
			{
				if ($data[$i] == '0')
				{
					$v[$i] = "Desligado";
				}
				else
				{
					$v[$i] = "Ligado";
				}
			}
		?>
		<div data-role="content">
			<ul data-role="listview" data-inset="true">
				<li data-role="list-divider">Climatização</li>
				<li><a href="?f=n">
				Quarto A
				<span class="ui-li-count"><?php echo $v['0'] ?></span>
				</a></li>
				<li><a href="?f=o">
				Quarto B
				<span class="ui-li-count"><?php echo $v['1'] ?></span>
				</a></li>
			</ul>
		</div>
		<?php get_footer(); ?>
