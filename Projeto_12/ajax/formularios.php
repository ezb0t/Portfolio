<?php
    include('../config.php');
    $data = array();
    $assunto = 'Nova mensagem do site!';
    $corpo = '';
    foreach($_POST as $key => $value){
        $corpo.=ucfirst($key).": ".$value;
        $corpo.="<hr>";
    }
    $info = array('assunto'=>$assunto,'corpo'=>$corpo);
    $mail = new Email('host','email','username','name');
    $mail->addAdress('email','nome');
    $mail->formatarEmail($info);
    if($mail->enviarEmail()){
        $data['sucesso'] = true;
    }else{
        $data['erro'] = true;
    }
    die(json_encode($data));
?>