<?php
	if($this->request->query['p']){
		$p = $this->request->query['p'];
		list($proto_primeira,$proto) = explode('-',$p);
		list($proto_segunda,$proto_ano) = explode('/',$proto);
	}else{
		exit();
	}
?>
<script type="text/javascript">
		 function openWin() {
			if(!window.print()){
				window.print();
			}else{
					const w = window.open('',Math.random());
				const user = navigator. userAgent. toLowerCase();

				var html = document.querySelector('body');

					w.document.write(html.innerHTML);
					w.document.close();
					setTimeout(()=>{ w.print(); /*w.close() */}, 1000);
			}
		 }

		</script>
		<button type="button" name="button" onclick="window.print();"> Print </button>
		<a href="/orm/pdf?p=<?php echo $p; ?>">Ver como pdf</a> <hr> <a href="/orm/history?p=<?php echo $p; ?>"> histórico </a>

		<?php
	$buscar_protocolo = \App\Model\Protocolos::first([
		"select"=>"protocolos.proto_primeira,protocolos.proto_segunda,protocolos.proto_ano,protocolos.origem,protocolos.observacao,interessados.nome as _interessado,protocolos.assunto,protocolos.data,users_admin.nome as nome,users_admin.sobrenome as sobrenome",
		"from" => "users_admin,interessados,protocolos",
		"conditions" => "protocolos.interessado=interessados.id AND users_admin.id=protocolos.autores AND proto_primeira='$proto_primeira'"
	]);

	if($buscar_protocolo){
		$protocolo = $buscar_protocolo->to_array();

		$n_protocolo = $protocolo['proto_primeira'].'-'.$protocolo['proto_segunda'].'/'.$protocolo['proto_ano'];
    $origem      = $protocolo['origem'];
    $observacao  = $protocolo['observacao'];
    $interessado = $protocolo['_interessado'];
    $assunto     = $protocolo['assunto'];
    $data        = $protocolo['data'] ;
    $autores     = $protocolo['nome']. " " . $protocolo['sobrenome'];

		$history = $this->module('history.php');
		$proto_1 = $history($p);

		$de_para = '';
		$files = [];

    // foreach($proto_1 as $p){
    //     $referencia = $p;
		// 		if( $referencia['file']){
		// 			$files[] = 'ajax/files/'.$referencia['file'];
		// 		}else{
		// 			//echo 'file not exists!';
		// 		}$dompdf->loadHtml(
		//
		//
    // }
		$html = $this->_render('pdf_template.php',[
			'protocolo'=>$n_protocolo,
			'origem'=>$origem,
			'observacao'=>$observacao,
			'interessado'=>$interessado,
			'assunto'=>$assunto,
			'autor'=>$autores,
			'history'=>$proto_1
		]);

		echo $html;
	}
?>

<?php
/*
$pdf = new \Clegginabox\PDFMerger\PDFMerger;

$pdf->addPDF('paypal.pdf', 'all');

$pdf->merge('browser', 'maaerli.pdf', 'P');
*/
?>
