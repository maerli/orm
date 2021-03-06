<?php
// in a module awais need a $expor var
// it indicates the module exports content
$export = function ($protocolo) {
  list($proto_primeira,$proto) = explode('-',$protocolo);
  list($proto_segunda,$proto_ano) = explode('/',$proto);
  // Container para lista de protocolos
	$select = "proto_referencia,protocolos.id,proto_primeira,proto_segunda,proto_ano,assunto,DATE_FORMAT(data,'%d / %m / %Y') as _data,origem,destino,protocolos.status,observacao,users_admin.nome AS nome,users_admin.sobrenome AS sobrenome,file";
  $proto_1 = array();
  $protocolos = \App\Model\Protocolos::first(
		[
			'conditions'=>"protocolos.autores=users_admin.id AND proto_primeira=$proto_primeira AND proto_segunda=$proto_segunda AND proto_ano=$proto_ano",
			'select'=>$select,
			'from'=>'protocolos,users_admin'
		]);
		//print_r($protocolos);
		//exit;
		if($protocolos){
				$proto = $protocolos->to_array();
				$ref1 = $proto;
				while($ref1['proto_referencia'] != ''){
						list($p_p,$pp) = explode('-',$ref1['proto_referencia']);
						list($p_s,$p_a) = explode('/',$pp);
						$new_referencia1 = \App\Model\protocolos::first(
							[ 'select'=> $select,
							 'from'=> 'protocolos,users_admin',
							 'conditions'=> "protocolos.autores=users_admin.id AND proto_primeira=$p_p AND proto_segunda=$p_s AND proto_ano=$p_a"
						 ]);

						if($new_referencia1){
							$n1 = $new_referencia1->to_array();
							array_push($proto_1,$n1);
							$ref1 = $n1;
						}else{
							break;
						}
				}
		}

		$proto_1 = array_reverse($proto_1);

		array_push($proto_1,$proto);


		//procurar referencia

		$busca_referencias = \App\Model\Protocolos::first(
			[ 'select'=>$select,
			  'from'=> 'protocolos,users_admin',
				'conditions'=> "protocolos.autores=users_admin.id AND proto_referencia='".($proto_primeira.'-'.$proto_segunda.'/'.$proto_ano)."'"
			]);

			//print_r("protocolos.autores=users_admin.id AND proto_referencia='".($proto_primeira.'-'.$proto_segunda.'/'.$proto_ano)."'"
		if( $busca_referencias ){
		$referencias = $busca_referencias->to_array();


		array_push($proto_1,$referencias);
		$ref = $referencias;
		while($ref['proto_referencia'] != ''){
				list($p_p,$p_s,$p_a) = array($ref['proto_primeira'],$ref['proto_segunda'],$ref['proto_ano']);
				$new_referencia = \App\Model\Protocolos::first(
					[ 'select'=> $select,
						'from' => 'protocolos,users_admin',
						'conditions' => "protocolos.autores=users_admin.id AND proto_referencia='". $p_p.'-'.$p_s.'/'.$p_a."'"
					] );
				if($new_referencia){
					$n = $new_referencia->to_array();
					array_push($proto_1,$n);
					$ref = $n;
				}else{
					break;
				}
		}
		}
		$proto_1 = array_reverse($proto_1);
		return $proto_1;
};
