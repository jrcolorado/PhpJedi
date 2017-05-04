<?php
class leis {

	private $db;

	public function __construct() {

		try {
			$this->db = new PDO("mysql:dbname=teste;host=localhost", "root", "475236");
		} catch(PDOException $e) {
			echo "FALHA: ".$e->getMessage();
		}

	}

	public function selecionar($id) {

		$sql = $this->db->prepare("SELECT * FROM leis WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		$array = array();
		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}


	public function inserir($codigo, $descricao) {

		$sql = $this->db->prepare("INSERT INTO leis SET codigo = :codigo, descricao = :descricao");
		$sql->bindParam(":codigo", $codigo);
		$sql->bindParam(":descricao", $descricao);
		$sql->execute();
	}

	public function atualizar($codigo, $descricao,$id) {

		$sql = $this->db->prepare("UPDATE leis SET codigo = ?, descricao = ? WHERE id = ?");
		$sql->execute(array($codigo, $descricao,$id));

	}

	public function excluir($id) {

		$sql = $this->db->prepare("DELETE FROM leis WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();

	}

}








