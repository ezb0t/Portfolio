<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image-x/png" href="<?php echo INCLUDE_PATH_PAINEL; ?>images/ico.ico">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
        <title>Login painel de controle</title>
    </head>
    <body>
        <div class="box-login">
            <?php
                if(isset($_POST['acao'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                    $sql->execute(array($user,$password));
                    if($sql->rowCount() == 1){
                        $info = $sql->fetch();
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        $_SESSION['password'] = $password;
                        $_SESSION['cargo'] = $info['cargo'];
                        $_SESSION['nome'] = $info['nome']; 
                        $_SESSION['img'] = $info['img'];
                        header('Location: '.INCLUDE_PATH_PAINEL);
                        die();
                    }else{
                        //Falhou
                        echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
                    }
                }
            ?>
            <img src="<?php echo INCLUDE_PATH_PAINEL; ?>images/logo.png">
            <h2>Efetue o login</h2>
            <form method="post">
                <input type="text" name="user" placeholder="Login" required>
                <input type="password" name="password" placeholder="Senha" required>
                <input type="submit" name="acao" value="Logar">
            </form>
        </div><!--box-login-->
    </body>
</html>