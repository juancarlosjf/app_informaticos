<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $helpers = array('Html', 'Form', 'Session');
	
	public $components = array(
		'Session',
        'Auth' => array(
			'authenticate' => array(
			'Form' => array( 
				'userModel' => 'Usuario', 
				'fields' => array( 
					'username' => 'usuario', 
					'password' => 'password' 
					), 
				), 
			),
			'loginAction' => array('controller' => 'Usuarios','action' => 'login'),	
			'loginRedirect' => array('controller' => 'Editores', 'action' => 'home'),
			'logoutRedirect' => array('controller' => 'Usuarios', 'action' => 'login')
		)
    );

    function fecha_hora(){
		$gmt_peru = -5;
		$fecha_gmt = gmmktime(gmdate("H")+$gmt_peru,gmdate("i"),gmdate("s"),gmdate("n"),gmdate("j"),gmdate("Y"));
		$fecha_hora = gmdate('Y-n-j H:i:s',$fecha_gmt);
		return $fecha_hora;
	}
	
	function fecha()
	{
		$gmt_peru = -5;
		$fecha_gmt = gmmktime(gmdate("H")+$gmt_peru,gmdate("i"),gmdate("s"),gmdate("n"),gmdate("j"),gmdate("Y"));
		$fecha = gmdate('Y-n-j',$fecha_gmt);
		return $fecha;
	}
	
	function hora()
	{
		$gmt_peru = -5;
		$fecha_gmt = gmmktime(gmdate("H")+$gmt_peru,gmdate("i"),gmdate("s"),gmdate("n"),gmdate("j"),gmdate("Y"));
		$hora = gmdate('H:i:s',$fecha_gmt);
		return $hora;
	}
	
}

?>
