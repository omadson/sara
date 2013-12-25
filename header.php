<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php get_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/jquery.js"></script>
	<script type="text/javascript">
		$("#home").live("pageinit", function(){
			$("#p2").bind("click", function(e){
				$.mobile.changePage("iluminacao.php", {
					reloadPage: true
				});
			});
			$("#p3").bind("click", function(e){
				$.mobile.changePage("refrigeracao.php", {
					reloadPage: true
				});
			});
			$("#p4").bind("click", function(e){
				$.mobile.changePage("portao.php", {
					reloadPage: true
				});
			});
			$("#p5").bind("click", function(e){
				$.mobile.changePage("favoritos.php", {
					reloadPage: true
				});
			});
		});
	</script>
	<script src="js/jquery.mobile.js"></script>
	
</head>
<body>
