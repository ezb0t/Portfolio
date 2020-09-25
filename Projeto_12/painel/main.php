<?php
	if(isset($_GET['logout'])){
		Painel::logout();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image-x/png" href="<?php echo INCLUDE_PATH_PAINEL; ?>images/ico.ico">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
        <title>Painel de Controle</title>
    </head>
    <body>
        <div class="menu">
            <div class="menu-wraper">
                <div class="box-usuario">
                    <?php
                        if($_SESSION['img'] == ''){
                    ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                    </div><!--avatar-usuario-->
                    <?php }else{ ?>
                        <div class="imagem-usuario">
                            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>">
                        </div><!--avatar-usuario-->
                    <?php } ?>
                    <div class="nome-usuario">
                        <p><?php echo $_SESSION['nome']; ?></p>
                        <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                    </div><!--nome-usuario-->
                </div><!--box-usuario--> 
                <div class="items-menu">
                    <h2>Cadastro</h2>
                    <a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
		            <a <?php selecionadoMenu('cadastrar-servico'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
		            <a <?php selecionadoMenu('cadastrar-slides'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>
                    <h2>Gestão</h2>
                    <a <?php selecionadoMenu('listar-depoimentos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                    <a <?php selecionadoMenu('listar-servicos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                    <a <?php selecionadoMenu('listar-slides'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>
                    <h2>Administração do painel</h2>
                    <a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                    <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
                    <h2>Configuração Geral</h2>
                    <a <?php selecionadoMenu('editar-site'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
                </div><!--items-menu-->
            </div><!--menu-wraper-->   
        </div><!--menu-->

        <header>
            <div class="center">
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div><!--menu-btn-->
                <div class="logout">
                    <a <?php if(@$_GET['url'] == ''){ ?> style="background-color: #60727a; padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fas fa-home"></i> <span>Página Inicial</span></a>
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a>
                </div><!--logout-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </header>
        
        <section class="content">
            <?php Painel::carregarPagina(); ?>
        </section><!--content-->
        
        <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
        <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
        <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
    </body>
</html>