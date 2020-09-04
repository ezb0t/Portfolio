<?php include('config.php'); ?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Descrição do meu site.">
        <meta name="keywords" content="palavras-chave,do,meu,site">
        <link rel="shortcut icon" type="image-x/png" href="images/ico1.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
        <title>Projeto_12</title>
	</head>
	<body>
		<div class="container-principal">
			<?php
				$url = isset($_GET['url']) ? $_GET['url'] : 'home';
				switch ($url) {
					case 'sobre':
						echo '<target target="sobre">';
					break;
					case 'servicos':
						echo '<target target="servicos">';
					break;
					case 'depoimentos':
						echo '<target target="depoimentos">';
					break;
				}
			?>
		</div><!--container-principal-->
		<header>
			<div class="center">
				<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a></div><!--logo-->
				<nav class="desktop right">
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
					</ul>
				</nav><!--desktop-->
				<nav class="mobile right">
					<div class="btn-mobile">
						<i class="fas fa-bars"></i><!--fas fa-bars-->
					</div><!--btn-mobile-->
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
					</ul>
				</nav><!--mobile-->
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</header>

		<?php
			if(file_exists('pages/'.$url.'.php')){
				include('pages/'.$url.'.php');
			}else{
				if($url != 'sobre' && $url != 'servicos' && $url != 'depoimentos'){
					$pagina404 = true;
					include('pages/404.php');
				}else{
					include('pages/home.php');
				}
			}
		?>

		<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"';?>>
			<div class="center">
				<p>© Todos os direitos reservados.</p>
			</div><!--center-->
		</footer>

		<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/load.js"></script>
	</body> 
</html>