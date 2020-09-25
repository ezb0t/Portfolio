<?php
	$usuariosOnline = Painel::listarUsuariosOnline();
	$pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
	$pegarVisitasTotais->execute();
	$pegarVisitasTotais = $pegarVisitasTotais->rowCount();
	$pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
	$pegarVisitasHoje->execute(array(date('Y-m-d')));
	$pegarVisitasHoje = $pegarVisitasHoje->rowCount();
?>
<div class="box-content w100">
    <h2><i class="fas fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>
    <div class="box-metricas">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuários Online</h2>
                <p><?php echo count($usuariosOnline); ?></p>
            </div><!--box-metrica-wraper-->
        </div><!--box-metrica-single-->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de Visitas</h2>
                <p><?php echo $pegarVisitasTotais; ?></p>
            </div><!--box-metrica-wraper-->
        </div><!--box-metrica-single-->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas Hoje</h2>
                <p><?php echo $pegarVisitasHoje; ?></p>
            </div><!--box-metrica-wraper-->
        </div><!--box-metrica-single-->
        <div class="clear"></div><!--clear-->
    </div><!--box-metricas-->
</div><!--box-content w100-->

<div class="box-content w100">
    <h2><i class="fas fa-users"></i> Usuários Online no Site</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span><i style="color: blue" class="fas fa-map-marker-alt"></i> IP</span>
            </div><!--col-->
            <div class="col">
                <span><i style="color: red" class="fas fa-exclamation"></i> Última Ação</span>
            </div><!--col-->
            <div class="clear"></div><!--clear-->
        </div><!--row-->
        <?php
            foreach($usuariosOnline as $key => $value){
        ?>
        <div class="row">
            <div class="col">
                <span><?php echo $value['ip'] ?></span>
            </div><!--col-->
            <div class="col">
                <span><?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao'])) ?></span>
            </div><!--col-->
            <div class="clear"></div><!--clear-->
        </div><!--row-->
        <?php } ?>
    </div><!--table-responsive-->
</div><!--box-content w100-->

<div class="box-content w100">
    <h2><i class="fas fa-user-friends"></i> Usuários do Painel</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span><i style="color: black" class="fas fa-angle-double-right"></i> Nome</span>
            </div><!--col-->
            <div class="col">
                <span><i style="color: black" class="fas fa-angle-double-right"></i> Cargo</span>
            </div><!--col-->
            <div class="clear"></div><!--clear-->
        </div><!--row-->
        <?php
            $usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
            $usuariosPainel->execute();
            $usuariosPainel = $usuariosPainel->fetchAll();
            foreach($usuariosPainel as $key => $value){
        ?>
        <div class="row">
            <div class="col">
                <span><?php echo $value['user'] ?></span>
            </div><!--col-->
            <div class="col">
                <span><?php echo pegaCargo($value['cargo']); ?></span>
            </div><!--col-->
            <div class="clear"></div><!--clear-->
        </div><!--row-->
        <?php } ?>
    </div><!--table-responsive-->
</div><!--box-content w100-->
<div class="clear"></div><!--clear-->