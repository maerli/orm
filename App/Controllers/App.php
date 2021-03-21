<?php
namespace App\Controllers;
class App{
static function init(){
	$route = new Router();
	//Router::routes('/api',$routes);

	//set a public folther without login
	Router::set('static','public');
	$route->set(function($req,$res){
		$logged = isset( $req->session['user'] );
		$path = $req->path;
		if($path == "/login" || $path == "/"){
			return;
		}

		//echo $logged;
		if($logged){

		}else{
			if( $req->method === 'GET'){
				header('Location: /orm/login');
				exit;
			}
		}
	});

	Router::set('static','private');


	Router::set("views","App/Views");


	$route->post('/login',function($req,$res){
		$login = $res->module('login.php');
		if($req->body['email'] && $req->body['senha']){
			$email = $req->body['email'];
			$senha = $req->body['senha'];
			$res->json($login($email,$senha));
			//$res->json([$email,$senha]);
		}
	});

	$route->get('/login',function($req,$res){
		//$logged = $req->session['logged'];
		$res->render('entrar') ;
	});

	$route->get('/logout',function($req,$res){
		session_destroy();
		$past = time() - 3600;
		foreach ( $_COOKIE as $key => $value )
		{
		    setcookie( $key, $value, $past );
		}
		header('Location: /orm/login');
		exit;
	});

	$route->get('/pdf',function($req,$res){
		$res->render('pdf');
	});

	$route->get('/print',function($req,$res){
		//$options = ['template'=>'print', 'title'=>'Awseome feature Print'];
		$res->render('print');
	});

	$route->get('/',function($req,$res){
		$res->render('spu'); //this is for deployment

		//$res->render('development/spu');
	});


	$route->use('/history', function($router){
		  	$router->routes('/')->get(function($req,$res){
				$history = Router::module("history.php");
				$protocolos = $history($req->query['p']);
				$res->render('template',['template'=>'history','title'=>'historico','history'=>$protocolos]);
			});
			$router->get('/api',function($req,$res){
				$protocolo = $req->query['p'];
				$history = $res->module('history.php');
				$res->json($history($protocolo));
			});
	});

	$route->get('/detalhes',function($req,$res){
		$p = $req->query['p'];
		$protocolo = \App\Model\Protocolos::first(['conditions'=>['id=?',$p]]);
		$options = ['template'=>'detalhes', 'title'=>'Detalhes', 'protocolo'=>$protocolo->to_array()];
		$res->render('template', $options);
	});
	/// mostrar bases de dados

	$route->get('/usuarios',function($req,$res){
		$users = $res->module('users.php');
		$res->render('template', [ 'template'=>'user','title'=>'Usuários','users'=> $users()]);
	});
	$route->get('/assuntos',function($req,$res){
		$assuntos = \App\Model\Assuntos::all(['order'=>'id desc']);
		foreach ($assuntos as &$value) {
			$value = $value->to_array();
		}
		$options = ['title'=>'assuntos', 'template'=>'assuntos', 'assuntos'=>$assuntos];
		$res->render('template',$options);
	});
	$route->get('/origens',function($req,$res){
		$origens = \App\Model\Origens::all(['order'=>'id desc']);
		foreach ($origens as &$value) {
			$value = $value->to_array();
		}
		$options = ['title'=>'origens', 'template'=>'origens', 'origens'=>$origens];
		$res->render('template',$options);
	});
	/// end

	$route->both('/upload',function($req,$res){
			$res->render('upload');
		},Router::module('upload.php')
		);


	$route->get('/spu',function($req,$res){
		$options = [ 'title'=>'home', 'template'=>'main'];
		//print_r();
		$res->status(200);

		$res->render('template', $options );
	});
	$route->get('/home',function($req,$res){
		$options = ['title'=>'home','template'=>'home'];
		$res->render('template',$options);
	});

	$route->get('/perfil',function($req,$res){
		$user = json_decode($req->session['user'],true);

		$options = [
			'title'=>'Perfil',
			'template'=>'perfil',
			'perfil'=> $user
		];
		$res->render('template',$options);
	});

	$route->get('/config',function($req,$res){
		$options = ['template'=>'config','title'=>'Configurações'];
		$res->render('template',$options);
	});

	$route->get('/home/:id',function($req,$res){
		$id = $req->params['id'];
		//$name = $req->par•••••ams['name'];
		$res->json(array('id'=>$id));
	});

	$route->get('/protocolos',function($req,$res){
		$protocolos = \App\Model\Protocolos::find('all', ['conditions'=>'proto_segunda=0001']);
		foreach ($protocolos as &$value) {
			$value = $value->to_array();
		}
		$options = ['title'=>'protocolos', 'template'=>'protocolos', 'protocolos'=>$protocolos];
		$res->render('template', $options);
	});
	$route->get('/protocolos/criar',function($req,$res){
		$origens = \App\Model\Origens::find('all', ['conditions'=>'id < 70']);
		$orgao = \App\Model\Origens::first();
		$assuntos = \App\Model\Assuntos::find('all');
		$user = json_decode( $res->request->session['user'], true);

		foreach ($origens as &$value) {
			$value = $value->to_array();
		}
		foreach ($assuntos as $key => &$value) {
			$value = $value->to_array();
		}

		$res->render('template',
		[
				'title'=>'Criar protocolo',
				'template'=>'create',
				'origens'=>$origens,
				'orgao'=>$orgao->nome,
				'assuntos'=>$assuntos,
				'user'=>$user
		] );
	});

	$route->get('/protocolos/editar/:id',function($req,$res){
		$origens = \App\Model\Origens::find('all', ['conditions'=>'id < 70']);
		$orgao = \App\Model\Origens::first();
		$assuntos = \App\Model\Assuntos::find('all', ['conditions'=>'id < 10']);

		foreach ($origens as &$value) {
			$value = $value->to_array();
		}

		$res->render('template',
		[
				'title'=>'Editar protocolo',
				'template'=>'editar',
				'origens'=>$origens,
				'orgao'=>$orgao->nome,
				'assuntos'=>$assuntos
		] );
	});



	$route->post('/protocolos/:id',function($req,$res){
		$id = $req->params['id'];
		$p = App\Model\Protocolos::find_by_id($id);
		$p->proto_ano = '2020';
		$p->save();
		$res->send('ok');
	});


	$route->use('/relatorio',function($router){
		$router->get('/',function($req,$res){
			$res->render('relatorio');
		});
		$router->get('/total/:year',function($req,$res){
			$res->json($req->params);
		});
		$router->get('/count/:year',function($req,$res){
			['year'=>$year] = $req->params;
			$protocolos = \App\Model\Protocolos::first([
				'conditions'=> ["YEAR(data) = ?",$year],
				'select'=>"COUNT(IF(status=0,0,null)) AS criados,
        COUNT(IF(status=1,0,null)) AS tramitando,
        COUNT(IF(status=2,0,null)) AS deferidos,
        COUNT(IF(status=3,0,null)) AS indeferidos"
			]);
			if($protocolos){
				$res->json($protocolos->to_array());
			}
		});
	});
	// checks if is sub

	// this createas a grea trouter file
	$route->use("/api", Router::module('api.php'));


	$route->submit();
}
}
