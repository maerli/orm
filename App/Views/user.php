<div class="p-5">
<table class="table">
<thead>
		<tr>
				<th>Nome</th>
				<th>Sobrenome</th>
				<th>Email</th>
				<th>Status</th>
				<th>Tipo de acesso</th>
				<th> Orgão </th>
		</tr></thead>
<tbody>
<?php foreach($args['users'] as $user) : ?>
 <tr>
		<td><?php echo $user['nome']; ?></td>
		<td><?php echo $user['sobrenome']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td>
				<input type="checkbox"><span class="text-success">
				<?php echo $user['status']==0?'autorizar':'permitido'; ?>
				</span></td>
		<td>
				<select id="level" class="form-control">
						<option value="0" <?php echo $user['level']==0? 'selected':'';?>>Apenas Leitura </option>
						<option value="1" <?php echo $user['level']==1? 'selected':'';?> > Acesso total  </option>
						<option value="2" <?php echo $user['level']==2? 'selected':'';?> > Apenas Criar Protocolos</option>
				</select>
		</td>

		<td>
		<select id="level" class="form-control">

		<option> --selecionar--</option>

		</select>
		</td>
 </tr>
<?php endforeach;?>
</tbody>
</table>

</div>
