<link rel="stylesheet" href="http://localhost/orm/pdf.css?1" />

				<div class="center">
        <center> <img class="image" src="http://localhost/orm/logo.png"/> </center>

        <table>
                <tr>
                    <th> <strong>ORIGEM/Unidade do Órgão</strong> <br/> <?php echo $args['origem']; ?> </th><!-- Origem -->
                    <th> <strong>SPU/VIPROC </strong> <br/> <?php echo $args['protocolo']; ?> </th><!-- SPU/VIPROC  -->
                </tr>
                <tr>
                   	<th> <strong> ASSUNTO </strong> <br/> <?php echo $args['assunto'] ?> </th><!-- Assunto -->
                    <th> <strong> OBSERVAÇÕES </strong> <br/> <?php echo $args['observacao']; ?> </th><!-- Observação  -->
                </tr>
                <tr class="row">
                	<th> <strong> AUTOR(es)/Órgão Central </strong> <br/> <?php echo $args['autor']; ?> </th><!-- Autores -->
                  <th> <strong> FAVORECIDO(S)/ITERESSADO </strong> <br/> <?php echo $args['interessado'] ?> </th><!-- FAVORECIDO(S)/ITERESSADO  -->
                </tr>

        </table>


        		<table >
            <tr> <td colspan="4"> TRAMITAÇÃO DO PROCESSO </td> </tr>

            <tr>
              <th  > DE </th> <th > PARA</th> <th >DATA</th> <th > RESP. P/ TRÂMITE </th>
            </tr>

            <tbody>
                <?php foreach ($args['history'] as $key => $protocolo) : ?>
									<tr>
										<?php
											$response = [
												$protocolo['origem'],
												$protocolo['destino'],
												$protocolo['_data'],
												$protocolo['nome'].' '.$protocolo['sobrenome']
											];

										?>
										<?php foreach ($response as $key1 => $data): ?>
											<td><?php echo $data; ?></td>
										<?php endforeach; ?>
									</tr>
								<?php endforeach; ?>
            </tbody>
            </table>
					</center>
