<?php 

	class ConectionModel {
		static public function Conection(){
			$conection = new PDO('mysql:host=localhost;dbname=simply', 'root', '',[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
			]);

			return $conection;
		}
	}