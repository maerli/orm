
_$ = id=>document.querySelector(id)
var values = {};

function msg(str){
	var style = {
		color: 'white',
		'background-color':'green',
		'font-weight':'bold',
		'border-radius':'10px'
	}
	var div = e('div',null,[
		e('div',{style}, str)
	]);
	DOMRender(div,'#msg');
	setTimeout(function(){
		DOMRender(Fragment([]), '#msg');
	},2000);
}


function add(elm, not=""){
	if(elm.value !== not){
		values[elm.id] = elm.value;
		elm.style.border = '1px solid green';
		elm.style.outline = 'none'
		return;
	}
	elm.scrollIntoView({
	  behavior:  "smooth",
	  block:    "center",
	  inline:   "center"
	});
	elm.style = 'border: 1px solid red';
	return false;
}

var elements = {
	'protocolo':
	{
		off: console.log
	},
	'origem':
	{
		on : function (elm) {
		},off : add
	},
	'assunto':{
		on : function(elm){

		},off :add
	},
	'observacao':
	{
		on : function (elm) {

		},off : add
	},
	'interessado':{
		on : function(elm){

		},off : add
	 	},
	 'autores':
	 {
		on:function(elm){

		},off: function(elm){
			values['autores'] = _$('[name=autores]').value;
		}
	 },
	 'destino':{
		 on:function(){},
		 off:add
	 },
	 'cpf':{
		 on: function(elm){

		 },off: add
	 	},
	 'email':{
		 on:function(elm){},
		 off:add
	 },
	 'status':{
		 off:add
	 },

	'enviar':
	{
		on : 	function (elm) {
			elm.addEventListener('click',fireAfter)
		},
		off : async function(elm){
			var req = await fetch('/orm/api/create',{
				method:'POST',
				headers:{
					'Content-Type':'application/json'
				},
				body: JSON.stringify(values)
			})
			console.log(values);
			var res = await req.json()


			_$('#protocolo').value = res.proto_primeira+'-'+res.proto_segunda+'/'+res.proto_ano
			_$('#protocolo').style = 'border:1px solid green;cursor:pointer';
			_$('#protocolo').title = 'click para ver detalhes';
			_$('#protocolo').style.backgroundColor = 'blue';

			var { proto_primeira,
						proto_segunda,
						proto_ano,
						origem,
						assunto,
						observacao,
						autores,
						interessado,
						cpf,
						data,
						status,
						destino,
						proto_referencia } = res;
			
			 var protocolo = proto_primeira+'-'+proto_segunda+'/'+proto_ano;

			var eprotocolo = e('div', null,protocolo);

			DOMRender(eprotocolo,'#modal-body')

			$('#showDocumentData').modal('toggle');
			_$('#protocolo').addEventListener('click',function(){


				//location.href = '/orm/print?p=00001-0002/2021'
			})

			_$('#protocolo').scrollIntoView({
				behavior:'smooth',
				block:    "center",
			 	inline:   "center"
			})

		}
	},
	'novaorigem':{
		on:function(elm){
			var click = function(event){
				var input = e('input',{
					id:'origem',
					'class':'form-control',
					placeholder: 'Digite nova origem'
				});
				DOMReplace(input,'#origem');
				elm.value = 'Criar';
				elm.removeEventListener('click',click);

				var create = function(){
					elm.addEventListener('click',click);
					_$('#origem').readOnly = true;
					insert('origens' , {nome:Math.random(),codigo:0 } , function(res){
						msg(JSON.stringify(res));
						elm.removeEventListener('click', create);
						elm.value = "Novo Assunto"
					})
				};

				elm.addEventListener('click',create);
			};

			elm.addEventListener('click',click);
		},
		off:add
	},
	'novoassunto':{
		on: function(elm){
			var click = function(event){
				var input = e('input',{
					id:'assunto',
					'class':'form-control',
					placeholder: 'Digite novo assunto'
				});
				DOMReplace(input,'#assunto');
				elm.value = 'Criar';
				elm.removeEventListener('click',click);

				var create = function(){
					elm.addEventListener('click',click);
					_$('#assunto').readOnly = true;
					insert('assuntos' , {nome:Math.random(),codigo:0 } , function(res){
						msg(JSON.stringify(res));
						elm.removeEventListener('click', create);
						elm.value = "Novo Assunto"
					})
				};

				elm.addEventListener('click',create);
			};

			elm.addEventListener('click',click);
		},
		off : add
	}
}

function fireAfter(event){
	event.preventDefault();
	for(let id in elements){
		let elm = _$('#'+id);
		console.log(id);
		if(elm){
			if( elements[id].off){
				if(elements[id].off(elm) === false){
					break;
				}
			}
		}
	}
}

for(let id in elements){
	let elm = _$('#'+id);
	if(elm){
		if(elements[id].on){
			elements[id].on(elm);
		}
	}
}
