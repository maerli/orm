<!DOCTYPE html>
<html lang="pt-BR" dir="ltr"
<head>
    <meta charset="utf-8">
    <link href="/spu/sistema/painel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/spu/sistema/painel/css/sb-admin-2.min.css" rel="stylesheet" />
    <title><?php echo $args['title'];?></title>
    <?php $this->render('scripts'); ?>
</head>
<body id="page-top">
    <div id="wrapper">
    <?php $this->render('sidebar'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
        <?php
            $user = json_decode($this->request->session['user'],true); ;
            $this->render('nav', $user);
            ?>
            <?php $this->render($args['template'], $args); ?>
        </div>
        <?php $this->render ( 'footer' ); ?>
    </div>
    

    </div>

	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<?php $this->render('modal-sair'); ?>
	</body>
</html>
