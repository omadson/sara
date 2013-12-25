<?php
	include("functions.php");
	get_header();
?>
	<!-- Página de Irrigação -->
	<?php
		conectar();
		validar();
		atualizar("irrigacao");
	?>
		<div data-role="page" id="home">
		<header data-role="header">
			<a href="index.php" data-icon="home">Home</a>
			<h1><?php get_title(); ?></h1>
		</header>
		<div data-role="content">
			<ul data-role="listview" data-inset="true" >
				<li data-role="list-divider">Irrigação</li>
				<li>
				<h3>Configuração</h3>
				<form action="#irrigacao" method="get">
					<fieldset>
						<div data-role="fieldcontain">
						<label for="temp">Tempo (m)</label>
						<input type="range" value="2" min="1" max="5" name="temp" id="temp" />
						</div>
						<div data-role="fieldcontain">
						<label for="onoff">Alimentação</label>
						<select name="onoff" id="onoff" data-role="slider">
							<option value="1">ON</option>
							<option value="0">OFF</option>
						</select>
						</div>
						</fieldset>
						<input type="submit" value="Atualizar" name="Atualizar" />
					</div>
				</form>
				</li>
			</ul>
		</div>
		<?php get_footer(); ?>
