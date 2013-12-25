<?php
	include("functions.php");
	get_header();
?>
	<!-- Página de Iluminação -->
	<?php
		conectar();
		validar();
	?>
		<div data-role="page" id="iluminacao">
		<header data-role="header" >
			<a href="index.php" data-icon="home">Home</a>
			<h1><?php get_title(); ?></h1>
		</header>
		<?php
			$porta = fopen(PORT, "w+");
			send_data($porta, "favoritos.php");
			
			fwrite($porta, 's');
			sleep(1);
			
			$msg = fgets($porta);
			$data = explode(" ",$msg);
			for ($i=0;$i<=1;$i++)
			{
				if ($data[$i] == '0')
				{
					$v[$i] = "Desligado";
				}
				elseif ($data[$i] == '10')
				{
					$v[$i] = "Ligado";
				}
				else
				{
					$v[$i] = "Parcial";
				}
			}
			
			if (($v[0] == "Desligado") && ($v[1] == "Desligado"))
			{
				$v[2] = "Desligado";
			}
			elseif (($v[0] == "Ligado") && ($v[1] == "Ligado"))
			{
				$v[2] = "Ligado";
			}
			else
			{
				$v[2] = "Parcial";
			}
		?>
	</script>
		<div data-role="content">
			<ul data-role="listview" data-inset="true">
				<li data-role="list-divider">Favoritos</li>
				<li><a href="?f=u">
				Iluminação
				<span class="ui-li-count"><?php echo $v['0'] ?></span>
				</a></li>
				<li><a href="?f=v">
				Refrigeração
				<span class="ui-li-count"><?php echo $v['1'] ?></span>
				</a></li>
				<li><a href="?f=t">
				Tudo
				<span class="ui-li-count"><?php echo $v['2'] ?></span>
				</a></li>
			</ul>
		</div>
		<?php get_footer(); ?>
