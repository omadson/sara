<?php
	include("functions.php");
	get_header();
?>
	<!-- Página de Irrigação -->
	<?php
		conectar();
		validar();
	?>
	<div data-role="page" id="irrigacao">
		<header data-role="header">
			<a href="index.php" data-icon="home">Home</a>
			<h1><?php get_title(); ?></h1>
			<style type="text/css">
				p {
					text-align: justify !important;
				}
			</style>
		</header>
		<div data-role="content">
			<div data-role="collapsible-set">
				<div data-role="collapsible">
					<h3>Introdução</h3>
					<p>
					Sistemas de automação residencial permitem aos usuários controlarem os eletroeletrônicos de sua residência como lâmpadas, televisores e home theaters, através de interfaces de controle. Sua proposta principal é trazer conforto e comodidade para as residências, porém, podem ser utilizados também para segurança, com a utilização de câmeras de vigilância e sensores de presença.
					</p>
					<p>
Sistemas de automação residencial são tipicamente compostos por controladores de dispositivos, um servidor central e interfaces de controle. Os controladores de dispositivos são responsáveis por executar efetivamente os comandos nos eletroeletrônicos. Os servidores são responsáveis pelo envio das mensagens das interfaces de controle para os controladores de dispositivos. Por fim, as interfaces de controle podem ser representadas por painéis ﬁxados em paredes ou mesmo em forma de páginas Web, que podem ser visualizadas, inclusive, em telefones celulares. Interagindo com essas interfaces o usuário consegue acionar determinado dispositivo ou executar determinada funcionalidade do sistema.
					</p>
					<p>
Para o desenvolvimento em hardware é fundamental a realização de testes antes da fabricação do equipamento. Por isso, a plataforma Arduíno se mostra ideal no desenvolvimento de dispositivos programáveis que tenham que exercer funções de controle, principalmente para prototipagem de equipamentos em fase de projetos.
</p>
<p>
Nesse trabalho é apresentado o SIARA - Sistema de Automação Residencial com o Arduino, um protótipo de baixo custo para um sistema de automação residencial onde o usuário utiliza uma aplicação web como interface de controle, utilizado para isso a plataforma arduino, um servidor web, além de vários sensores e atuadores que serão tratados mais adiante. Nesse sistema podem ser controlados eletroeletrônicos, como lâmpadas, por uma rede IP local, ou em qualquer lugar do mundo pela Internet.
					</p>
				</div>
				<div data-role="collapsible">
					<h3>Metodologia</h3>
					<p>Depois de escolhido o tema do projeto, com a ajuda do professor orientador, dividimos o seu desenvolvimento em sete etapas fundamentais: Planejamento, no qual descrevemos detalhadamente os princípios da ideia. Além disso, escolhemos a ferramenta de gestão de tempo que seria usada para otimização de tarefas, optamos então por usar o ciclo PDCA. A segunda etapa foi a revisão bibliográfica, onde foi estudada todas as tecnologias e ferramentas que seriam utilizadas. O próximo passo foi a criação do circuito eletrônico para o protótipo, para ele utilizamos como sistema de controle o arduino. Em seguida partimos para a criação das instruções operacionais programadas para o Arduino. Passamos para a próxima fase, onde, utilizando o JQuery Mobile e PHP, começamos a criar o aplicativo web que seria a interface de controle do sistema. O ultimo passo, de grande importância, foi a realização dos testes para posterior correção das falhas.</p>
				</div>
				<div data-role="collapsible">
					<h3>Resultados</h3>
					<p>Após o desenvolvimento das diferentes etapas propostas na metodologia, é possível afirmar que a pesquisa realizada atingiu os objetivos propostos, dentre os quais, o projeto e a construção de um protótipo de automação residencial utilizando a plataforma Arduíno com acesso via WEB, além de tecnologia simplificada e baixo custo. O projeto está pronto à integração nas residencias, permitindo que os usuários possam desfrutar, da melhor forma, de seus benefícios, sendo ele um sistema mais rápido e de código aberto, sendo possível o seu melhoramento.</p>
				</div>
				<div data-role="collapsible">
					<h3>Considerações finais</h3>
					<p>De acordo com a construção do protótipo, observou-se que o sistema proposto é uma alternativa viável aos sistemas presentes no mercado, tanto do ponto de vista econômico quanto das facilidades de utilização, operação e manutenção. Como continuidade deste trabalho, a principal tarefa a ser desenvolvida é o aperfeiçoamento do firmware presente no arduino e do software presente no servidor web, além de aplicação em um ambiente real.</p>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
