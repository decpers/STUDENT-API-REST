<?php
	
	header("Content-Type: application/json" );

	include_once('../class/student-rest.php');
	/* 
	 * Form data
	 */
	$id = $_POST['id'];
	$name = $_POST['name'];



	switch($_SERVER['REQUEST_METHOD']){
		case 'POST':
			$student = new Student($id,$name); 
			$student->insertStudent();
			echo "Usuario registrado correctamente";
		break;

		case 'GET': 

			echo "Return user";
		break;
		/* 
		case 'PUT':
		$_PUT = json_decode(file_get_contents('php://input'),true) ;
			echo "Save user: ".$_POST['nombre'];
		break;
		*/
	}


?>