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
			send_data($porta, "iluminacao.php");
			fwrite($porta, 'a');
			usleep(100000);
			
			$msg = fgets($porta);
			$data = explode(" ",$msg);
			for ($i=0;$i<=6;$i++)
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
	</script>
		<div data-role="content">
			<ul data-role="listview" data-inset="true">
				<li data-role="list-divider">Iluminação</li>
				<li><a href="?f=b">
				Sala de Estar
				<span class="ui-li-count"><?php echo $v['0'] ?></span>
				</a></li>
				<li><a href="?f=c">
				Quarto A
				<span class="ui-li-count"><?php echo $v['1'] ?></span>
				</a></li>
				<li><a href="?f=d">
				Banheiro
				<span class="ui-li-count"><?php echo $v['2'] ?></span>
				</a></li>
				<li><a href="?f=e">
				Quarto B
				<span class="ui-li-count"><?php echo $v['3'] ?></span>
				</a></li>
				<li><a href="?f=f">
				Sala de Jantar
				<span class="ui-li-count"><?php echo $v['4'] ?></span>
				</a></li>
				<li><a href="?f=g">
				Cozinha
				<span class="ui-li-count"><?php echo $v['5'] ?></span>
				</a></li>
			</ul>
		</div>
		<?php get_footer(); ?>
