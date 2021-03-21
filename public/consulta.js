function $(id){
	return document.querySelector(id);
}

//var hash = location.hash.slice(1);
//if(hash != ''){
//    $('#protocolo').value = hash;
//    mostrarConteudo();
//}

function mostrarConteudo(){
 var protocolo = $('#protocolo').value;
 consulta(protocolo);
}

elements = {
	proto_primeira:(value)=>e('div',null,value),
	proto_segunda:(value)=> e('div',null,value),
	proto_ano:(value)=> e('div',null,value),
	_data:(value)=> e('div',null,value),
	origem:(value)=> e('div',null,value),
	destino:(value)=> e('div',null,value),
	status:(value)=> e('div',null,value),
	observacao:(value)=> e('div',null,value),
	nome:(value)=> e('div',null,value),
	sobrenome:(value)=> e('div',null,value),
	file:(value)=> e('div',null,value)
}

function Table(children){
	return e('table',{border:1,style:"border:1px solid red;border-collapse:collapse"}, children);
}
function Tr(children){
	return e('tr',null,children);
}
function Td(children,t){
	return e(t,null,e('spam',{
		style:{color:"blue"}
	},children));
}

async function consulta(protocolo){
	var req = await fetch('/orm/history/api?p='+protocolo)
	try{
		var history = await req.json();
		var head = Tr( Object.keys( history[0]).map(lista=>Td(lista,'th')));
		var body = history.map(lista=>{
					return Tr(Object.keys(lista).map(p=>{
						return Td(lista[p],'td')
					}));
				})

		var table = Table([head, ...body])
		DOMRender(table,'#conteudo')
		$('#protocolo').style.border = "1px solid green";
	}catch(err){
		$('#protocolo').style.border = "1px solid red";
	}

}

function _focus(event){
	event.target.scrollIntoView();
	$('#protocolo').style.border = "1px solid blue";
}
