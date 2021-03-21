<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/orm/png/link310.png" alt="1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/orm/png/link311.png" alt="2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/orm/png/link312.png" alt="3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
<br>
<?php


//Criando os indices para a quantidade de protocolos

if(true){
    //$id_user = $_SESSION['id'];
    //a coluna status do banco de dados mostra que se
    //status = 0 -> protocolo criado
    //status = 1 -> procotolo tramitando
    //status = 2 -> protocolo deferido
    //status = 3 -> protocolo indeferido

    $total_protocolos = ['criados'=>1, 'tramitando'=>2,'deferidos'=>3,'indeferidos'=>4];

    $criados = $total_protocolos['criados'];
    $tramitando = $total_protocolos['tramitando'];
    $deferidos = $total_protocolos['deferidos'];
    $indeferidos = $total_protocolos['indeferidos'];

}

?>
<div class="row">

            <!-- Processo criado -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="relatorio.php?type=0" class="text-primary">Processos criados</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $criados;?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-edit fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- processo trasmitando -->
            <div class="col-xl-3 col-md-6 mb-4">

              <div class="card border-left-warning shadow h-100 py-2">
                  <!--<div class="card border-left-success shadow h-100 py-2">-->
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="relatorio.php?type=1" class="text-warning">Processos tramitando</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $tramitando;?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-eye fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- processo deferido -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="relatorio.php?type=2" class="text-info">Processos deferidos</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <?php echo $deferidos; ?> </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- processo indeferido -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="relatorio.php?type=3" class="text-danger">Processos indeferidos</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $indeferidos; ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-window-close fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
