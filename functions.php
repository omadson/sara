<?php
	include("config.php");
	function conectar() {
		mysql_connect(HOST, USER, PASS) or exit ("Erro / Conexão: ".mysql_error());
		mysql_select_db(BASE) or exit ("Erro / Seleção: ".mysql_error());
	}
	function validar() {
		session_start();
		if (! isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE) {
			header("Location: index.php");
		}
	}
	/*
	function serial($msg) {
		$Conexao = fopen("/dev/ttyACM0", "w");
		sleep(1);
		fwrite($Conexao, $msg);
		fclose($Conexao);
	}
	*/
	function get_header() {
		include("header.php");
	}
	function get_footer() {
		include("footer.php");
	}
	function get_title() {
		echo TITULO;
	}
	function get_subtitle() {
		echo SUBTITLE;
	}
	function send_data($porta, $url) {
		if (isset($_REQUEST['f']))
		{
			fwrite($porta, $_GET['f']);
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=$url'>";
		}
	}
?>
