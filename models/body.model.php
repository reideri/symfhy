<?php 

	require_once 'conection.model.php';

	class BodyModels {
		static public function mdlShowComponents($table, $item, $value){
			if ($item != null) {
				$stmt = ConectionModel::Conection()->prepare("SELECT * FROM $table WHERE $item = :$item");
				$stmt->bindParam(':'.$item, $value, PDO::PARAM_STR);
				$stmt->execute();

				return $stmt->fetch();
			} else {
				$stmt = ConectionModel::Conection()->prepare("SELECT * FROM $table");
				$stmt->execute();
				return $stmt->fetchAll();
			}

			$stmt->close();
			$stmt = null;
		}
	}