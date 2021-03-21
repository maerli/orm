
<?php ['perfil'=>$perfil] = $args;?>
<div class="p-5 text-center">
<div class="row"><h3>Perfil</h3></div><br>
<div class="progress col-lg-3">
		<div id="bar" class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="row col-lg-12">

		<div class="col-lg-3">
		 <img style="clip-path: circle(50% at 50% 50%);" width="150px" height="150px"
	 src="<?php require('/var/www/html/spu/sistema/painel/ajax/img/'.$perfil['id'].'.php');?>" id="image-perfil" onclick="makeUpload();">
	 </div>
	<br>
		 <div class="col">
		 <?php if ( $perfil) : ?>

				<form id="form" method="post" onsubmit="event.preventDefault();editar();">
						<div class="input-group mb-2" >
								<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">Nome</span>
								</div>
								<input name="nome" type="text" class="form-control p-3" value="<?php echo $perfil['nome']?>">
						</div>

						<div class="input-group mb-2" >
								<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2">Sobrenome</span>
								</div>
								<input name="sobrenome" type="text" class="form-control p-3" value="<?php echo $perfil['sobrenome']?>">
						</div>

						<div class="input-group mb-2" >
								<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3">E-mail</span>
								</div>
								<input name="email" type="email" readonly class="form-control p-3" value="<?php echo $perfil['email']?>">
						</div>
						<div class="input-group mb-2" >
								<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3">Orgão</span>
								</div>
								<input name="orgao" type="text" readonly class="form-control p-3" value="<?php echo $perfil['orgao']?>">
						</div>

						<br>
						<input name="id" type="hidden" value="<?php echo $perfil['id'];?>">
						<button type="submit" class="btn btn-primary" id="btn-editar">Editar</button>
				</form>

		 <?php endif ;?>
		 </div>

</div>
