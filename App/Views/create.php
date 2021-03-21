
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
		<div class="alert alert-success" role="alert" id="msg">
			<h1 >Sistema de Protocolo Único</h1>
		</div>
		<form class="user" id="form">
		<div class="form-row">
		  <div class="col-9">
		    <label for="Protocolo"> <?php echo $config['protocolo']; ?></label>

		    <!-- Protocolos tem o formato : 00000-0000/2019 -->
		    <input title="o número do seu procolo será mostrado quando ele foi criado!" type="text" class="form-control"  readonly id="protocolo" name="protocolo" value='<?php echo '0000-0000/0000';?>'>
		  </div>
		  <div class="col-3">
		    <label for="data"> <?php echo $config['data']; ?> </label>
		    <?php date_default_timezone_set('America/Sao_Paulo');   $data = date("d/m/Y à\s H:i:s");?>
		    <input type="text" value="<?php echo $data ;?>" title="<?php echo $data ;?>" class="form-control" readonly >
		  </div>
		</div>

		<div class="form-row ">
		  <div class="col-9">
		    <label class="required" for="origem"> <?php echo $config['origem']; ?> </label>
		    <select class="form-control" id="origem" name="origem">
		      <option value="">-- Selecionar --</option>
		      <?php foreach( $args['origens'] as $origem): ?>
		      <option value="<?php echo $origem['nome'] ;?>"><?php echo ($origem['nome']) ;?></option>
		      <?php endforeach; ?>
		    </select>
		  </div>

		  <!-- Adicionar destino-->

		  <input type="hidden" id="destino" value="<?php echo $args['orgao']; ?>" >

		  <div class="col-3">
		    <div class="form-group">
		    	<input id="novaorigem" type="button" class="btn btn-primary form-control" value="Nova Origem" style="margin-top:32px" data-toggle="modal" data-target="#novaOrigemModal">
		    </div>
		  </div>
		</div>
		<div class="form-row">
				<div class="col-9">
					<label class="required" for="assunto"> <?php echo $config['assunto']; ?> </label>
					<select class="form-control" id="assunto" name="assunto">
						<option value="">-- Selecionar --</option>
						<!-- buscar todas as assuntos no banco de dados -->
						<?php foreach(  $args['assuntos'] as $assunto ): ?>
						<option value="<?php echo $assunto['nome'] ;?>"><?php echo  ($assunto['nome']) ;?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="col-3">
					<div class="form-group">
						<input id="novoassunto" type="button" class="btn btn-primary form-control" value="Novo Assunto" style="margin-top:32px" data-toggle="modal" data-target="#novoAssuntoModal" >
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="observacao"  data-validate = "Faça uma observação"> <?php echo $config['observacao']; ?> </label>
				<textarea class="form-control rounded-0" id="observacao" rows="3" name="observacao"></textarea>
			</div>

			<div class="form-group">
				<label class="required" for="autor"> <?php echo $config['autores']; ?> </label>
				<input type="text" class="form-control" id="autores" value="<?php echo $args['user']['nome'] ;?>"  disabled >
				<input type="hidden"  value="<?php echo $args['user']['id'] ;?>"  name="autores">
			</div>

			<div class="form-group">
				<label class="required" for="interessado"> <?php echo $config['interessado']; ?> </label>
				<input type="text" id="interessado" class="form-control" placeholder="Interessado" />
			</div>


		    <div class="form-group">
		      <label class="required" for="cpf"> <?php echo $config['cpf']; ?> </label>
		      <input type="text" class="form-control" id="cpf" placeholder="CPF / CNPJ" name="cpf">
		    </div>
		    <div class="form-group">
		      <label class="" for="cpf"> <?php echo $config['email']; ?> </label>
		      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
		    </div>
		    <div class="form-group">
		    	<input type="checkbox" checked id="etiqueta"><span>Deseja imprimir</span>
		    </div>

		    <input type="hidden" id="status" value="1">
		    <button type="submit" id="enviar" class="btn btn-primary"> Cadastrar </button>

</form>

		</div>
	</div>
</div>
<script src="/orm/e.js" > </script>
<script src="/orm/insert.js"></script>
<script src="/orm/spu.js"></script>



<!--- modail -->

<div class="modal fade" id="showDocumentData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">detalhes do protocolo!</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body" id="modal-body">
<!-- daado saqi -->
		</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Fechar</button>
      <a class="btn btn-primary" href="/orm/print?p=00189-0002/2021">Ir para</a>
    </div>
  </div>
</div>
</div>
