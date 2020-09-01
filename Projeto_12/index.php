<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Descrição do meu site.">
        <meta name="keywords" content="palavras-chave,do,meu,site">
        <link rel="shortcut icon" type="image-x/png" href="images/cinzaico.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Projeto_12</title>
	</head>
	<body>
		<header>
			<div class="center">
				<div class="logo left"><a href="#">Logomarca</a></div><!--logo-->
				<nav class="desktop right">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#especialidades">Especialidades</a></li>
						<li><a href="#depoimentos">Depoimentos</a></li>
						<li><a href="#servicos">Serviços</a></li>
					</ul>
				</nav><!--desktop-->
				<nav class="mobile right">
					<div class="btn-mobile">
						<i class="fas fa-bars"></i><!--fas fa-bars-->
					</div><!--btn-mobile-->
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#especialidades">Especialidades</a></li>
						<li><a href="#depoimentos">Depoimentos</a></li>
						<li><a href="#servicos">Serviços</a></li>
					</ul>
				</nav><!--mobile-->
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</header>

		<section id="home" class="banner-principal">
			<div class="overlay"></div><!--overlay-->
			<div class="center">
				<form>
				<h2>Seu e-mail</h2>
				<input type="email" name="email" required="">
				<input type="submit" name="acao" value="Enviar">
			</form>
			</div><!--center-->
		</section><!--banner-principal-->

		<section id="sobre" class="descricao-autor">
			<div class="center">
				<div class="w50 left">
				<h2 class="title">Alan Sato</h2>
				<p>Euismod mauris erat quisque hendrerit suspendisse venenatis fames habitasse netus ut malesuada, conubia et nam urna non primis hac nullam dui suscipit, nulla dapibus eget netus mattis in morbi adipiscing hac euismod. tempor suscipit class neque vitae eros sapien nulla aliquam dapibus risus eu non, mauris sodales quis primis luctus dictum sem aliquam consequat augue tincidunt, vulputate molestie torquent netus faucibus pellentesque id at convallis ligula magna.</p>
				<p>Adipiscing mattis porta fermentum quisque tempus potenti gravida curabitur ornare habitasse porttitor, purus commodo suscipit dictum sagittis mattis hendrerit fermentum iaculis tristique, ac mattis lacus nisi fringilla tincidunt sed faucibus etiam congue. consequat conubia pulvinar suscipit sagittis accumsan eleifend velit pharetra interdum iaculis leo id, enim proin risus id cubilia maecenas nullam vehicula curae potenti interdum. augue tristique aliquam convallis curabitur faucibus orci elementum class fames ipsum mi aliquet aliquam vivamus a, placerat porta feugiat habitasse erat aenean scelerisque faucibus curabitur platea tortor diam cubilia sollicitudin.</p>
				</div><!--w50-->
				<div class="w50 left">
					<img class="right" src="images/cinza.jpg">
				</div><!--w50-->
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</section><!--descricao-autor-->

		<section id="especialidades" class="especialidades">
			<div class="center">
				<h2 class="title">Minhas especialidades</h2><!--title-->
				<div class="box-especialidade w33 left">
					<h3><i class="fab fa-html5"></i></h3>
					<h4>HTML5</h4>
					<p>Per nulla fames adipiscing sociosqu inceptos diam fermentum ultrices aliquam, etiam sociosqu at leo laoreet etiam nisl class molestie purus, duis pretium viverra ullamcorper posuere vivamus adipiscing turpis. nunc phasellus ornare ullamcorper posuere, est taciti arcu.</p>
				</div><!--box-especialidade-->
				<div class="box-especialidade w33 left">
					<h3><i class="fab fa-css3-alt"></i></h3>
					<h4>CSS3</h4>
					<p>Ullamcorper phasellus nam metus neque egestas mauris hac, dolor lectus egestas felis sit platea arcu, laoreet eros lacus consequat faucibus vitae. molestie netus sodales porttitor consequat ullamcorper, imperdiet pretium turpis rhoncus potenti, imperdiet turpis curae integer.</p>
				</div><!--box-especialidade-->
				<div class="box-especialidade w33 left">
					<h3><i class="fab fa-js-square"></i></h3>
					<h4>JavaScript</h4>
					<p>Ligula sociosqu sodales cras faucibus nec fames eu sodales, non phasellus proin sodales consequat condimentum pellentesque donec molestie, hac mattis auctor erat nulla magna hendrerit. nec aliquam fermentum nostra aenean nibh rhoncus, consequat vivamus condimentum donec.</p>
				</div><!--box-especialidade-->
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</section><!--especialidades-->

		<section id="depoimentos" class="extras">
			<div class="center">
				<div class="w50 left depoimentos-container">
					<h2 class="title">Depoimentos dos nossos clientes</h2><!--title-->
					<div class="depoimento-single">
						<p class="depoimento-descricao">“Dolor mi sollicitudin pharetra velit sollicitudin ac, sit proin congue cursus curabitur, congue mi duis malesuada accumsan. quisque semper et aenean cras, maecenas elit sociosqu turpis accumsan, himenaeos augue potenti.”</p>
						<p class="nome-autor">Kauê Monteiro</p><!--nome-autor-->
					</div><!--depoimento-single-->
					<div class="depoimento-single">
						<p class="depoimento-descricao">“Etiam potenti imperdiet sed habitasse commodo praesent risus vestibulum nulla sem, tellus ad laoreet consequat nisi vitae viverra vel mattis phasellus, posuere pellentesque lobortis nulla sollicitudin dui lobortis posuere nec.”</p>
						<p class="nome-autor">Mateus da Paz</p><!--nome-autor-->
					</div><!--depoimento-single-->
					<div class="depoimento-single">
						<p class="depoimento-descricao">“Bibendum suspendisse egestas torquent tempus gravida sagittis duis sem mattis class in, platea cubilia platea pellentesque maecenas proin consequat netus aliquam. pretium sodales dui at nunc turpis, senectus elementum amet.”</p>
						<p class="nome-autor">Gustavo Viana</p><!--nome-autor-->
					</div><!--depoimento-single-->
				</div><!--w50-->
				<div class="w50 left servicos-container">
					<h2 class="title">Serviços</h2><!--title-->
					<div id="servicos" class="servicos">
						<ul>
							<li>Sapien turpis tempor porta sit ante est sodales vehicula, elementum placerat ultricies eleifend quisque nibh elit suscipit habitasse, curae rutrum hendrerit leo volutpat nisi feugiat. morbi platea sollicitudin vulputate etiam hac est dictum, sodales dictum diam aenean sem diam.</li>
							<li>Ut etiam lorem varius ultricies ad tempus nostra praesent nulla justo ultricies id proin, quis donec suscipit porttitor ullamcorper vestibulum nec metus leo hac molestie scelerisque rhoncus, malesuada conubia vel sem ad sodales tellus ultrices senectus cras porta quis.</li>
							<li>Vestibulum quisque tellus id enim imperdiet conubia viverra suscipit congue aliquam, tortor purus viverra aliquet cursus gravida ante orci at morbi, condimentum pretium vel diam gravida curabitur nisl libero torquent. nullam et mi duis id mauris, amet duis est.</li>
						</ul>
					</div><!--servicos-->
				</div><!--w50-->
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</section><!--extras-->

		<footer>
			<div class="center">
				<p>© Todos os direitos reservados.</p>
			</div><!--center-->
		</footer>

		<script src="js/jquery.js"></script>
		<script src="js/scripts.js"></script> 
	</body> 
</html>