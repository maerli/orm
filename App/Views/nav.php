<!---
Documentação

Este arquivo é a barra do usuário

Para as  páginas sem necessidade da caixa de pesquisa



-->



<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
<i class="fa fa-bars"></i>
</button>


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
<!--<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--  <i class="fas fa-search fa-fw"></i>-->
<!--</a>-->
<!-- Dropdown - Messages -->
<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">

<input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Buscar" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fas fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href=load_view"#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-bell fa-fw"></i>
<!-- Counter - Alerts -->
<span class="badge badge-danger badge-counter">2+</span>
</a>
<!-- Dropdown - Alerts -->
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
<h6 class="dropdown-header">
Mensagens
</h6>

<a class="dropdown-item d-flex align-items-center" href="#">
    <div class="mr-3">
    <div class="icon-circle bg-success">
        <i class="fas fa-assistive-listening-systems text-white"></i>
    </div>
    </div>
    <div>
        <div class="small text-gray-500"><?php echo date("F j, Y, g:i a");?></div>
        Bem-vindo ao SPU-SME!

    </div>
</a>

<?php echo( "nav/nav-message"); ?>

<!--
<a class="dropdown-item d-flex align-items-center" href="#">
    <div class="mr-3">
    <div class="icon-circle bg-primary">
    <i class="fas fa-file-alt text-white"></i>
    </div>
    </div>
    <div>
    <div class="small text-gray-500">December 12, 2019</div>
    <span class="font-weight-bold">A new monthly report is ready to download!</span>
    </div>
</a>
<a class="dropdown-item d-flex align-items-center" href="#">
    <div class="mr-3">
    <div class="icon-circle bg-warning">
    <i class="fas fa-exclamation-triangle text-white"></i>
    </div>
    </div>
    <div>
    <div class="small text-gray-500">December 2, 2019</div>
    Spending Alert: We've noticed unusually high spending for your account.
    </div>
</a>
-->
<a class="dropdown-item text-center small text-gray-500" href="#">Mostra notificações</a>
</div>
</li>

<div class="topbar-divider d-none d-sm-block"></div>
<?php $this->render('nav-menu',$args); ?>

</ul>
</nav>
