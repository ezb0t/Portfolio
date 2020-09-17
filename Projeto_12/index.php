<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Descrição do meu site.">
        <meta name="keywords" content="palavras-chave,do,meu,site">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link rel="shortcut icon" type="image-x/png" href="<?php echo INCLUDE_PATH; ?>images/ico.ico">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
        <title>Projeto_12</title>
    </head>
    <body>
        <base base="<?php echo INCLUDE_PATH; ?>">
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            switch($url){
                case 'sobre':
                    echo '<target target="sobre" />';
                    break;
                
                case 'depoimentos':
                    echo '<target target="depoimentos" />';
                    break;

                case 'servicos':
                    echo '<target target="servicos" />';
                    break;
            }
        ?>

        <div class="sucesso">
            <i class="fas fa-check"></i> Formulário enviado com sucesso!
        </div><!--sucesso-->
        <div class="overlay-loading">
            <img src="<?php echo INCLUDE_PATH; ?>images/ajax-loader.gif">
        </div><!--overlay-loading-->

        <header>
            <div class="center">
                <div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>home"><img src="<?php echo INCLUDE_PATH; ?>images/logo.png"></a></div><!--logo-->
                <nav class="desktop right">
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                        <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </nav><!--desktop-->
                <nav class="mobile right">
                    <div class="botao-menu-mobile">
                        <i class="fas fa-bars"></i>
                    </div><!--botao-menu-mobile-->
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></>
                        <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </nav><!--mobile-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </header>

        <div class="container-principal">
            <?php
                if(file_exists('pages/'.$url.'.php')){
                    include('pages/'.$url.'.php');
                }else{
                    if($url != 'sobre' && $url != 'depoimentos' && $url != 'servicos'){
                        $pagina404 = true;
                        include('pages/404.php');
                    }else{
                        include('pages/home.php');
                    }
                }
            ?>
        </div><!--container-principal-->

        <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
            <div class="center">
                <p>© Todos os direitos  reservados.</p>
            </div><!--center-->
        </footer>

        <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA-viP9c4u8mTdyWG7wGtDA3DymgvOHi-k"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
        <?php
            if($url == 'home' || $url == ''){
        ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
        <?php } ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/forms.js"></script>
    </body>
</html>