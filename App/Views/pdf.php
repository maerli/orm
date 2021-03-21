<?php

use Dompdf\Dompdf;
use Dompdf\Options;


$options = new Options();
$options->set('isRemoteEnabled', true);
//$options->set('isJavascriptEnabled',TRUE);
//$options->setRootDir(realpath(__DIR__ . "/../orm/public"));


$dompdf = new Dompdf($options);


//define("DOMPDF_ENABLE_REMOTE",TRUE);

$dompdf->setPaper('A4', 'portrait');

if($this->request->query['p']){
	$p = $this->request->query['p'];

	list($proto_primeira,$proto) = explode('-',$p);
	list($proto_segunda,$proto_ano) = explode('/',$proto);

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
		// 		}
		//
		//
    // }



		$dompdf->load_html($this->_render('pdf_template.php',[
			'protocolo'=>$n_protocolo,
			'origem'=>$origem,
			'observacao'=>$observacao,
			'interessado'=>$interessado,
			'assunto'=>$assunto,
			'autor'=>$autores,
			'history'=>$proto_1
		]));

		//$dompdf->load_html_file("http://localhost/orm/print?p=00189-0002/2021");

		$dompdf->render();
		$dompdf->stream("protocolo-".time().".pdf", array("Attachment" => false));
		//echo $dompdf->output();

	}
}

/*
$pdf = new \Clegginabox\PDFMerger\PDFMerger;

$pdf->addPDF('paypal.pdf', 'all');

$pdf->merge('browser', 'maaerli.pdf', 'P');
*/
