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
        </div><!--menu-->

        <header>
            <div class="center">
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div><!--menu-btn-->
                <div class="logout">
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a>
                </div><!--logout-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </header>

    </body>
</html>