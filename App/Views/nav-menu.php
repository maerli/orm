<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small" id="user-name">
<!-- nome do usuário -->
<?php echo "click"; ?>
<img class="img-profile rounded-circle" src="<?php require('/var/www/html/spu/sistema/painel/ajax/img/'.$args['id'].'.php');?>"/>

</span>
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<a class="dropdown-item" href="javascript:void(0);">
	<?php echo $args['nome'].' '. $args['sobrenome'];?>
</a>
<a class="dropdown-item" href="/orm/perfil">
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Perfil
</a>
<a class="dropdown-item" href="/orm/config">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Configuração
</a>
<a class="dropdown-item" href="/orm/novidades">
<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
Timeline
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="/orm/logout" data-toggle="modal" data-target="#logoutModal">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Sair
</a>
</div>
</li>
