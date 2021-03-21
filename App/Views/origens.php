
<script src="/orm/insert.js"></script>
<script src="/orm/e.js"></script>

<input type="text" name="" value="" id="origem">
<button type="button" id="button" > Nova origem </button>
<table class="p5">
	<thead>
		<tr>
			<th> id </th> <th> nome </th>
		</tr>
	</thead>
	<div id="conteudo">

	</div>
	<tbody >

		<?php foreach ($args['origens'] as $key => $value) : ?>
			<tr>
				<td> <?php echo $value['id'];  ?> </td>
				<td> <?php echo $value['nome'];  ?> </td>
			</tr>
		<?php endforeach; ?>
</tbody>
</table>
<script>
document.querySelector('#button').addEventListener('click',function(event){
	var nome = document.querySelector('#origem').value
	insert('origens', { nome, codigo: 0} , function(res){
		tr = e('tr',null,[e('td',null,res.id),e('td',null,res.nome)]);
		DOMRender(tr,'#conteudo',true); })
})
</script>
