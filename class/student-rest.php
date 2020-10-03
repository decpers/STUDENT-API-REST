<?php

class Student{
	private $id;
	private $name;
	public function __construct($id,$name){
		$this->id = $id;
		$this->name = $name;
	}

	public function insertStudent(){
	$Content = file_get_contents("data.json");
		$students = json_decode($Content,true);
		$students[]=array( "id"=>$this->id,
			           "nombre"=>$this->name
			          );

		$fileOpen = fopen('data.json', "w");
		fwrite($fileOpen, json_encode($students));
	}
}

?>