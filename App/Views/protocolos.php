
		<?php foreach ($args['protocolos'] as $key => $value) : ?>
			<div>
				<?php
				['proto_primeira'=>$pp, 'proto_segunda'=>$ps, 'proto_ano'=>$pa,
				 'interessado'=>$interessado,
				 'cpf'=>$cpf
				] = $value;
				?>
				<a href="history?p=<?php echo $pp.'-'.$ps.'/'.$pa;   ?>" ><?php echo $pp.'-'.$ps.'/'.$pa;  ?></a>
				<span><?php echo $interessado; ?></span>
				<span> <?php echo $cpf;  ?></span>
			</div>
		<?php endforeach; ?>
