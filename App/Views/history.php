<div class="container">
<?php
$protocolo = $this->request->query['p'];
if($protocolo != ''){
    $proto_1 = $args['history'];

   function getStatus($status,$protocolo){
       if($status == 0){
           return "Protocolo criadparamso";
       }else if($status == 1){
           return "Tramitando";
       }else if($status == 2){
           return "<a href='transmitir.php?protocolo=".$protocolo."'>Deferido</a>";
       }else if($status == 3){
           return "Indeferido";
       }
   }
}
?>

<div class="p-5">
<h1> Histórico <a class="btn btn-outline-success" href="pdf.php?protocolo=<?php echo $protocolo ; ?>" > IMPRIMIR TRÂMITE </a></h1>
<table class="table" id="table">
<thead>
    <tr>
        <th>Protocolo</th>
        <th>Orgão de Origem</th>
        <th> Data </th>
        <th>Situação</th>

    </tr>
</thead>
<?php foreach($proto_1 as $p) : ?>
<?php
    $p1 = $p['proto_primeira'];
    $p2 = $p['proto_segunda'];
    $p3 = $p['proto_ano'];
    $p_se = $p1.'-'.$p2.'/'.$p3;
?>
<tr style="<?php echo $p_se == $protocolo?'font-weight:bold;border-width:0 0 0 5px;border-style:solid;border-color:black':'';?>">
    <td><a href="?p=<?php echo $p_se; ?>".> <?php echo $p_se;?></a></td>
    <td><?php echo $p['destino']; ?></td>
    <td><?php echo $p['data'];?></td>
    <td><?php echo getStatus($p['status'],$p_se); ?></td>

</tr>
<?php endforeach ;?>
<div class="alert alert-primary" role="alert">
  <a href="<?php echo 'https://spu.belacruz.ce.gov.br#'.$protocolo; ?>"> Ver como usuário </a>
</div>
</table>
</div>
</div>
