<?php print_r($this->params['id']); ?>
<form class="user" id="form">

					<div class="form-row">
					<div class="col-9">
					<label for="Protocolo"> <?php echo 'protocolo'; ?></label>

					<!-- Protocolos tem o formato : 00000-0000/2019 -->
					<input type="text" class="form-control"  readonly id="Protocolo" name="protocolo" value='<?php
							echo date("Y");
					?>'>
					</div>
					<div class="col-3">
					<label for="data"> DATA</label>
					<?php date_default_timezone_set('America/Sao_Paulo');   $data = date("d/m/Y à\s H:i:s");?>
					<input type="text" value="<?php echo $data ;?>" title="<?php echo $data ;?>" class="form-control" readonly >
					</div>
					</div>

					<div class="form-row ">
					<div class="col-9">
					<label class="required" for="origem"> <?php echo 'origem'; ?> </label>
					<select class="form-control" id="origem" name="origem">
					<option>-- Selecionar --</option>
					<!-- buscar todas as origens no banco de dados -->

					<?php foreach( $args['origens'] as $key=>$origem): ?>
					<option> <?php echo ($origem['nome']) ;?></option>

					<?php endforeach; ?>
				</select>
					</div>

					<!-- Adicionar destino-->

					<input type="hidden" name="destino" value="<?php echo $args['orgao']; ?>" >


					<div class="col-3">
					<div class="form-group">
					<input type="button" class="btn btn-primary form-control" value="Nova Origem" style="margin-top:32px" data-toggle="modal" data-target="#novaOrigemModal">
					</div>
					</div>
					</div>
					<div class="form-row">
					<div class="col-9">
					<label class="required" for="assunto"> <?php echo 'assunto'; ?> </label>
					<select class="form-control" id="assunto" name="assunto">
					<option>-- Selecionar --</option>
					<!-- buscar todas as assuntos no banco de dados -->
					<?php foreach( $args['assuntos'] as $key=>$assunto ): ?>
					<option value="<?php echo $assunto->nome;?>"><?php echo  ($assunto->nome) ;?></option>
					<?php endforeach; ?>

					</select>
					</div>
					<div class="col-3">
					<div class="form-group">
					<input type="button" class="btn btn-primary form-control" value="Novo Assunto" style="margin-top:32px" data-toggle="modal" data-target="#novoAssuntoModal" >
					</div>
					</div>
					</div>

					<div class="form-group">
					<label for="exampleFormControlTextarea2"  data-validate = "Faça uma observação"> <?php echo 'observacao'; ?> </label>
					<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="observacao"></textarea>
					</div>

					<div class="form-group">
					<label class="required" for="autor"> <?php echo 'Autores'; ?> </label>
					<input type="text" class="form-control" id="autor" value="<?php echo 'user' ;?>"  disabled >
					<input type="hidden"  value="<?php echo 'id' ;?>"  name="autores">
					</div>
					<div class="form-group">
					<label class="required" for="fait"> <?php echo 'Interessado'; ?> </label>
					<input type="text" class="form-control" id="fait" placeholder="Interessado" name="interessado">
					</div>

					<div class="form-group">
					<label class="required" for="cpf"> <?php echo 'cpf'; ?> </label>
					<input type="text" class="form-control" id="cpf" placeholder="CPF / CNPJ" name="cpf">
					</div>
					 <div class="form-group">
					<label class="" for="cpf"> <?php echo 'email'; ?> </label>
					<input type="email" class="form-control" id="email" placeholder="Email" name="email">
					</div>
					<div class="form-group">
					<input type="checkbox" checked id="etiqueta"><span>Deseja imprimir</span>
					</div>

					<!--
					<a href="index.html" class="btn btn-primary btn-user btn-block">
					Cadastrar
					</a>
					-->

					<input type="hidden" name="type" value="create">
					<button type="submit" id="enviar" class="btn btn-primary"> Cadastrar </button>


					</div>
			</form>
