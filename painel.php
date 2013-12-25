<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Sistema de automação residencial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!--
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	-->
	
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile.js"></script>

</head>
<body>
	<div data-role="page" id="home">
		<header data-role="header">
			<h1>EcoHome</h1>
		</header>
		<div data-role="content">
			<ul data-role="listview" data-inset="true">
				<li data-role="list-divider">Sistemas</li>
				<li><a href="iluminacao.php"><img src="" class="ui-li-icon" />
				Iluminação
				<span class="ui-li-count">4</span>
				</a></li>
				<li><a href="refrigeracao.php"><img src="" class="ui-li-icon" />
				Refrigeração
				<span class="ui-li-count">2</span>
				</a></li>
				<li><a href="irrigacao.php"><img src="" class="ui-li-icon" />
				Irrigação
				<span class="ui-li-count">1</span>
				</a></li>
			</ul>
		</div>
		<footer data-role="footer" data-position="fixed">
			<h2>++ Soluctions</h2>
		</footer>
	</div>
</body>
</html>
