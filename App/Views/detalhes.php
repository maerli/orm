<?php
$protocolo = [
		'proto_primeira'=>$pp,
		'proto_segunda'=>$ps,
		'proto_ano'=>$pa,
		'origem'=>$origem,
		'assunto'=>$assunto,
		'observacao'=>$observacao,
		'autores'=>$autores,
		'interessado'=>$interessado,
		'cpf'=>$cpf,
		'data'=> $data,
		'status'=>$status,
		'destino'=>$destino,
		'proto_referencia'=>$pr
	] = $args['protocolo'];
?>

<?php
$config = array(
		'protocolo'=>'PROTOCOLO DO DOCUMENTO',
		'data'=>'DATA',
		'origem'=>'ORIGEM/Unidade do Órgão',
		'destino'=>'PARA',
		'assunto'=>'ASSUNTO',
		'observacao'=>'OBSERVAÇÕES',
		'anexo'=>'ANEXO',
		'autores'=>'AUTOR(ES)/ÓRGÃO CENTRAL',
		'interessado'=>'INTERESSADO',
		'cpf'=>'CPF/CNPJ DO INTERESSADO',
		'email'=>'EMAIL DO INTERESSADO',
		'status'=>'STATUS'
);
function serializeProtocolo($p_p,$p_s,$ano){
	$p_primeira = sprintf("%05d", $p_p);
	$p_segunda = sprintf("%04d", $p_s);
	return $p_primeira . '-' . $p_segunda.'/'.$ano;

	}
?>

<div class="container-fluid">
	<div class="col-lg-11">
	<div class="p-5">
		<div>
			 <button class="btn btn-success"> Tramitar </button>
			 <button class="btn btn-secondary" > Deferir</button>
		</div>
		<form class="user" id="form">
		<div class="form-row">
		  <div class="col-9">
		    <label for="Protocolo"> <?php echo $config['protocolo']; ?></label>
		    <!-- Protocolos tem o formato : 00000-0000/2019 -->
		    <input type="text" class="form-control"  readonly id="protocolo" name="protocolo" value='<?php echo serializeProtocolo($pp,$ps,$pa);?>'>
		  </div>
		  <div class="col-3">
		    <label for="data"> <?php echo $config['data']; ?> </label>
		    <input type="text" value="<?php $date = new Datetime($data) ; echo $date->format("d/m/Y à\s H:i:s"); ;?>" class="form-control" readonly >
		  </div>
		</div>

		<div class="form-row ">
		  <div class="col-9">
		    <label class="required" for="origem"> <?php echo $config['origem']; ?> </label>
		    <select class="form-control" id="origem" name="origem">
		      <option > <?php echo ($origem) ;?></option>

		    </select>
		  </div>

		  <!-- Adicionar destino-->

		  <input type="hidden" id="destino" value="<?php echo $destino; ?>" >

		  <div class="col-3">
		    <div class="form-group">
		    	<input id="novaorigem" type="button" class="btn btn-primary form-control" value="" style="margin-top:32px">
		    </div>
		  </div>
		</div>
		<div class="form-row">
				<div class="col-9">
					<label class="required" for="assunto"> <?php echo $config['assunto']; ?> </label>
					<select class="form-control" id="assunto" name="assunto">
						<option > <?php echo  ($assunto) ;?></option>

					</select>
				</div>
				<div class="col-3">
					<div class="form-group">
						<input id="novoassunto" type="button" class="btn btn-primary form-control" style="margin-top:32px" data-toggle="modal" data-target="#novoAssuntoModal" >
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="observacao"  data-validate = "Faça uma observação"> <?php echo $config['observacao']; ?> </label>
				<textarea  class="form-control rounded-0" id="observacao" rows="3" name="observacao"><?php echo $observacao; ?></textarea>
			</div>

			<div class="form-group">
				<label class="required" for="autor"> <?php echo $config['autores']; ?> </label>
				<input type="text" class="form-control" id="autores" value="<?php echo $autores;?>"  disabled >

			</div>

			<div class="form-group">
				<label class="required" for="interessado"> <?php echo $config['interessado']; ?> </label>
				<input readonly type="text" class="form-control" id="interessado" placeholder="Interessado" value="<?php echo $interessado; ?>"/>
			</div>


		    <div class="form-group">
		      <label class="required" for="cpf"> <?php echo $config['cpf']; ?> </label>
		      <input readonly type="text" class="form-control" id="cpf" placeholder="CPF / CNPJ" name="cpf" value="<?php echo $cpf; ?>">
		    </div>
		    <div class="form-group">
		      <label class="" for="cpf"> <?php echo $config['email']; ?> </label>
		      <input type="email" readonly class="form-control" id="email" placeholder="Email" value="<?php echo $email; ?>">
		    </div>
		   


</form>
		</div>
	</div>
</div>
<script src="/orm/e.js" > </script>
