<script src="/orm/insert.js" charset="utf-8"></script>
<input type="text" id="assunto" />
<button type="button" id="button"> Novo assunto</button>
<div id="result"></div>
<table>
	<?php foreach ($args['assuntos'] as $key => $value) : ?>
		<tr>
			<?php foreach ($value as $key => $tr): ?>
				<td> <?php echo $tr; ?></td>
			<?php endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>
<script>
document.querySelector('#button').addEventListener('click',function(event){
	var nome = document.querySelector('#assunto').value;
	insert('assuntos', {nome,codigo:0}, function(res){
		document.querySelector('#result').innerHTML = JSON.stringify(res)
	} );
});
</script>
