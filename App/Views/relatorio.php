<div class="p-5" style="width:800px">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <div class="row">
    <div class="col">
        <label for="meses">
            Ano
        </label>
        <select  class="inline-form form-control col-lg-6" id="meses" onchange="mostrarMes(this.value,document.querySelector('#protocolos').value);"></select>
    </div>upload
    <div class="col">
        <label for="protocolos">
            Protocolos:
        </label>
         <select class="inline-form form-control  col-lg-7" id="protocolos" onchange="mostrarMes(document.querySelector('#meses').value,this.value);"></select>
    </div>
    </div>
    <div id="div">
    </div>
		<button type="button" onclick="mostrarMes(2019,6)" >Ver</button>
<script>
var year = new Date().getFullYear();

async function getData(year,month){
	var res = await fetch('/orm/relatorio/count/'+year);
	var text = await res.json();
	return text;
}

const protocolos_list = [
    ['Criados','rgba(0,255,255,0.5)'],
    ['Tramitando','rgba(255,255,34,0.5)'],
    ['Deferidos','rgba(0,255,0)'],
    ['Indeferidos','rgba(255,0,0,0.5)']
    ];
// mostrarMes(year,mes);

 const meses = [
    ['Jan','Janeiro',31],
    ['Fev','Fevereiro',28],
    ['Mar','Março',31],
    ['Abr','Abril',30],
    ['Mai','Maio',31],
    ['Jun','Junho',30],
    ['Jul','Julho',31],
    ['Ago','Agosto',31],
    ['Set','setembro',30],
    ['Out','Outubro',31],
    ['Nov','Novembro',30],
    ['Dez','Dezembro',31]
  ];
  document.querySelector('#meses').innerHTML =  "<option value='2019'>2019</option>";

  // document.querySelector('#protocolos').innerHTML = protocolos_list.map(function(proto,index){
  //     return "<option value='"+index+"' "+(index == proto_index?'selected':'')+">"+proto[0]+"</option>";
  // });



async function mostrarMes(year,month){
    var div = document.getElementById('div');
    var canvas = document.createElement('canvas');
    canvas.id = 'mychart';
    div.innerHTML = canvas.outerHTML;
    var ctx = document.getElementById('mychart').getContext('2d');

		var data = await getData(year,month);

    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our// document.querySelector('#protocolos').innerHTML = protocolos_list.map(function(proto,index){
  //     return "<option value='"+index+"' "+(index == proto_index?'selected':'')+">"+proto[0]+"</option>";
  // }); dataset
    data: {
        labels: meses.map(function(x){return x[1]}),
        datasets: [{
            label: 'Protocolos de '+year,
            backgroundColor: protocolos_list[0][1],
            borderColor: 'rgb(0, 0, 0)',
            data: [data]
        }]
    },

    // Configuration options go here
    options: {}
});
}


</script>

</div>
<br>
