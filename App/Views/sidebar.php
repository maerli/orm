<?php
    $toggle = 'false';

?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion <?php echo $toggle=='true'?'toggled':'';?>" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
     <i><img src="data:image/png ;base64, iVBORw0KGgoAAAANSUhEUgAAAI4AAABWCAYAAAAZkK5KAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ4IDc5LjE2NDAzNiwgMjAxOS8wOC8xMy0wMTowNjo1NyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA3QzU1ODA5NjE2NTExRUJCRUMzRkJFNkFCM0JEMDkwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA3QzU1ODBBNjE2NTExRUJCRUMzRkJFNkFCM0JEMDkwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDdDNTU4MDc2MTY1MTFFQkJFQzNGQkU2QUIzQkQwOTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDdDNTU4MDg2MTY1MTFFQkJFQzNGQkU2QUIzQkQwOTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz66SqBSAAAHe0lEQVR42uxcaYhVZRg+V8dRM/fUFHPJMk2tpMSKEqUy0UwLFQmJ0UjJIAyVwMj6UWoW1Y/6Fa1YmUblUhmFlUnWNK2GmbhNOjnquDSus96et/ueePs4372OiGfO3OeBh7N827n3PPd932+7qXQ6HRBEQ9GMXwFB4RAUDkHhEBQOQVA4BIVDUDgEhUNQOARB4RAUDkHhEBQOQeEQBIVDUDgEhUNQOASFQxAUDkHhEBQOQeEQeYaCuBpOpVKxfeg9hZ274dAR3HZJ9aH6JL/AuDZU5qvFWQ/+Do6k7UiYxYkZ88Bh4NeeX3FXHG4DB4BtwaPgX+BGWMotlI2aujgY82cuAo9G3O8GvgPWpf3YBA7N9/fH4NiIBodicGoOF349+A3y57WbK6Bk/sNisFeoI/BtcDVYAXYHR6uoCsFW4OsQz2VwXbV0VXnsqnB90Lij+Z5yg8Gd4L+ioatq2j+MHuBisHmOrJ3N+WeeIYTfcBiIYxG43WnnEfDKfDE4zZq4aAbisAkcBLbIkX2vOX8UZdt6xFPlKd9bY58RdFUJdlVo42bwCPiya208ruppp/d0ClwHPgveD94ItsrRpgiuCpzS5N9fUxQO6p+sL/DxBsQ4bcCN6ewQMb0LXpWl7elgNTiXwkmQcFD3LLAGvO8sxnEKwTng5hwCEmHck6X+MeAJcAmD4+TgBh3lXd/QgohfqsEXwCG47AmOB8VyvAb+YbJKvPSqBN6eqmQ8aKs+C2OchFicC8C14H7wuoZYnDOoe5JamxBzIvL0BbeCJTp1QYuTBMBanMRhAvgh+BU+5LgGvISeYCpL3e/h8L65dblT/locvgV3gCOQ/wC748kSTx04C6eLwFV4oTNzCKY7+CJOd4JFOaq33fTTpo6xOGzQ0eY7VcDsjid15Bht3QuWgRf5XBXOX3IC3/lga6eeZuADYL3JO80E1eKeHsuX95eKa/j/fC7kkvEXtGetg1gVCYI7hBYHh1/ALqbYMbAEFHfTHpQuuA2Gd4GDQ8vitnE+hRMH8mKSM9cLRfo+vIDx6ma6Gpc0ylNEem0TrTuKQzSMcc4/DoObHfF8F2SmJp4Byzzl/gSfknzI/2uQx8gLV3WWLkDcksw/tQRPgbvxzPsbY4xK4RCJEQ5XABLJCo51oO3qiKTQLVTlicWQqY2NerkXn/smCic7ZKnDT540mdleiePccz36Kqv3jLssaiTvoDeD44Z9YTU58sjYyjC84JpzKJy0EU7sgRYep0+QGRMSlOKR+iQhxmks4zi7wYf1vB+4EGynrmwCvpyPgsxi8tCVSfp0sAe+6Cf0C5RxF1lAJRObrbTrvAbpJZou9y6OeGmCA2YgT9YST9bnkF2eso9qOdLLnbKttb3hQWa2XOanViDfTpNHvl+ZKxsZZHaOysL3L8BPkK/+DEQhbdwdZGbZLwwy40frUHZDo4jKY2KBGbr/2XmmhSbtSbCDua4EP7XldLXfQc/amVdkBaBsZ8myvmai1rPAmVIIcdKuv8F5P3B7RD5ZB/RgGLvI82XZm9UlFK+5v9u0MQTc5Sm/WlYBxPn+ktCrqnauxbKMNl+wzEGtAcO5qOPG9AtmgAuCzIRkqVNXqVKEMSnIDO6F7kt+3Yf0XH75b8pGPJmzwvkHapECtUplxoKL+DqJ9THBv2yh2QbW6bXszXorh6VZBfYxVlYsWuiXZJT7OVqczK93pFLW91aYtDsciyP4EhymOxjmmfubw0XmuhIwRIW+8MBW4nwPdtno89Lr02dca+7L4q0R5voY2F/Ly6q/JdI+ONyxVgM0z1BnPc+gKIuD41Rzr0w3C8r9cY51S+Xd0lFHOD58r7PSVjj1doEUzt8waQ/Z7r66tRA9cgjH5u1l7t9q7heDs831Ms+PcabJs8JJ+9ikTfUIZ5G5t9Qpv9WkFdBV/R9i/qU7PjYiiKx0uuj1ngHNlHE7gTHzPtRlqcfWkfak+epqnmXQ1fdM2dpoyGdq8iPH4r9HKaWX0gnimAIePIOyP5hzcXMd9Xy29kTCeKU8wjKIW2mjlz+apPlqsQpNby9sy05uTjBu6C5wuVqrEpNnbLhRT1cI3mLSSjyfqdicT9NlH1JeVjb2D8e6nB8Ne1URz2hdlbutpT24z6TL7oK9jsuzLqzMiX1Og53B250y5eDfztaYK1RQxU7ew+b8uPSYTM9PUCtuyPkXjJW+XpV+N1vMfRkQLXXaXBrn+0u8cDT9GnBHRIxUq/FCyuSdE5FviolNTkWkS1d/jKmjl2cLjYhwhuYRMX7uid0k4G6XozveN0t3XoL0FnEKJ86R45Tp0lbBLe3JIhxxqZeG8QPy7vLkkd5HB40rZECvPGrtrwbXYYBdKa4s/NcJpMkyCnENbTSGqNR6aiPm2sK/hJO2T4D73Dk2EVCQ2ZfeUocEKpDniDNIGHa7a5BW6rQh4z2dtKsv5fcjz7G4R47jFA6RYHBZBUHhEBQOQeEQFA5BUDgEhUNQOASFQ1A4BEHhEBQOQeEQFA5B4RAEhUNQOASFQ1A4BIVDEBQOQeEQFA5B4RD5hn8EGABGtKZ9z1IRCwAAAABJRU5ErkJggg=="/></i>
    </div>
    <!--<div class="sidebar-brand-text mx-3"><img src="<?php echo ( 'img/log.png' );?>" width="200"/></div>-->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Painel -->
    <li class="nav-item active">
    <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Geral</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Cadastrar
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Protocolo Único</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="z-index:11">
    <div class="bg-white py-2 collapse-inner rounded">
    <a class="collapse-item" href="/orm/protocolos/criar">Cadastrar</a>
    <!--<a class="collapse-item" href="transmitir.php">Transmitir</a>-->
    <a class="collapse-item" href="/orm/protocolos">Meus protocolos</a>
    <a class="collapse-item" href="/orm/buscar">Todos os protocolos</a>
    <a class="collapse-item" href="/orm/relatorio">Relatório</a>
    </div>
    </div>
    </li>

    <hr class="sidebar-divider">
     <div class="sidebar-heading">
    UsÚario
    </div>

    <li class="nav-item">

    <a class="nav-link" href="cadastrar.html">
    <i class="fas fa fa-id-badge"></i>
    <span>Adicionar</span></a>
    </li>

      <hr class="sidebar-divider">

    <li class="nav-item">
    <a class="nav-link" href="/orm/usuarios">
    <i class="fas fa fa-unlock"></i>
    <span>Liberar</span></a>
    </li>

        <hr class="sidebar-divider">
     <div class="sidebar-heading">
    Novidades
    </div>

    <li class="nav-item">
    <a class="nav-link" href="/orm/novidades">
    <i class="fas fa fa-microchip"></i>
    <span>Sistema</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

     <!--Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
