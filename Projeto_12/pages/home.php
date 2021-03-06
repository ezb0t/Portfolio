<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg')" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg')" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form3.jpg')" class="banner-single"></div><!--banner-single-->
	<div class="overlay"></div><!--overlay-->
	<div class="center">
		<form method="post">
			<h2>Qual o seu melhor e-mail?</h2>
			<input type="email" name="email" required />
			<input type="hidden" name="identificador" value="form_home" />
			<input type="submit" name="acao" value="Cadastrar!">
		</form>
	</div><!--center-->
	<div class="bullets"></div><!--bullets-->
</section><!--banner-principal-->

<section class="descricao-autor">
	<div class="center">
		<div class="w50 left">
			<h2><?php echo $infoSite['nome_autor']; ?></h2>
			<p><?php echo $infoSite['descricao']; ?></p>
		</div><!--w50-->
		<div class="w50 left">
			<!--Pegar imagem depois-->
			<img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg" />
		</div><!--w50-->
		<div class="clear"></div><!--clear-->
	</div><!--center-->
</section><!--descricao-autor-->

<section class="especialidades">
	<div class="center">
		<h2 class="title">Especialidades</h2>
		<div class="w33 left box-especialidade">
			<h3><i style="color: #F16529" class="<?php echo $infoSite['icone1']; ?>"></i></h3>
			<h4>HTML5</h4>
			<p><?php echo $infoSite['descricao1']; ?></p>
		</div><!--box-especialidade-->
		<div class="w33 left box-especialidade">
			<h3><i style="color: #0070BA" class="<?php echo $infoSite['icone2']; ?>"></i></h3>
			<h4>CSS3</h4>
			<p><?php echo $infoSite['descricao2']; ?></p>
		</div><!--box-especialidade-->
		<div class="w33 left box-especialidade">
			<h3><i style="color: #F0BE25" class="<?php echo $infoSite['icone3']; ?>"></i></h3>
			<h4>JavaScript</h4>
			<p><?php echo $infoSite['descricao3']; ?></p>
		</div><!--box-especialidade-->
		<div class="w33 left box-especialidade">
			<h3><i style="color: #4AD5FF" class="<?php echo $infoSite['icone4']; ?>"></i></h3>
			<h4>React.JS</h4>
			<p><?php echo $infoSite['descricao4']; ?></p>
		</div><!--box-especialidade-->
		<div class="w33 left box-especialidade">
			<h3><i style="color: #87BD2F" class="<?php echo $infoSite['icone5']; ?>"></i></h3>
			<h4>Node.JS</h4>
			<p><?php echo $infoSite['descricao5']; ?></p>
		</div><!--box-especialidade-->
		<div class="w33 left box-especialidade">
			<h3><i style="color: #CE0303" class="<?php echo $infoSite['icone6']; ?>"></i></h3>
			<h4>Angular.JS</h4>
			<p><?php echo $infoSite['descricao6']; ?></p>
		</div><!--box-especialidade-->
		<div class="clear"></div><!--clear-->
	</div><!--center-->
</section><!--especialidades-->

<section class="extras">
	<div class="center">
		<div id="depoimentos" class="w50 left depoimentos-container">
			<h2 class="title">Depoimentos dos nossos clientes</h2>
			<?php
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
				$sql->execute();
				$depoimentos = $sql->fetchAll();
				foreach($depoimentos as $key => $value){
			?>
			<div class="depoimento-single">
				<p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
				<p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
			</div><!--depoimento-single-->
			<?php } ?>
		</div><!--w50-->
		<div id="servicos" class="w50 left servicos-container">
			<h2 class="title">Serviços</h2>
			<div class="servicos">
			<ul>
				<?php
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 3");
				$sql->execute();
				$servicos = $sql->fetchAll();
				foreach($servicos as $key => $value){
				?>
				<li><?php echo $value['servico']; ?></li>
				<?php } ?>
			</ul>
			</div><!--servicos-->
		</div><!--w50-->
		<div class="clear"></div><!--clear-->
	</div><!--center-->
</section><!--extras-->