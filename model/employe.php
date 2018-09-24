<?php

require_once 'connexionDB.php';

class employe extends ConnexionDB  {

	public function getAllEmploye() {
        return $this->cnx->query("SELECT * FROM employes")->fetchAll();
	}

	public function getEmploye($id) {
		$sql = $this->cnx->prepare("SELECT * FROM employes WHERE id=?");
		$sql->execute( array($id) );
		return $sql->fetch();
	}

	public function add($empl)
	{
		$sql = $this->cnx->prepare("INSERT INTO employes (prenom,nom,email,age,ville,mdp,grade) 
        VALUES (?,?,?,?,?,?,?)");
		$sql->execute( array($empl['prenom'],$empl['nom'],$empl['email'],$empl['age'],$empl['ville'],$empl['pass'],$empl['grade']) );
		return $sql->rowCount();
	}

	public function edit($empl,$id)
	{
		$sql = $this->cnx->prepare("UPDATE employes 
                                    SET prenom=?,nom=?,email=?,age=?,ville=?,mdp=?,grade=? 
                                    WHERE id=?");
        $sql->execute( array($empl['prenom'],$empl['nom'],$empl['email'],$empl['age'],$empl['ville'],$empl['pass'],$empl['grade'],$id) );
		return $sql->rowCount();
	}

	public function connect($mail, $mdp)
	{
		$sql = $this->cnx->prepare("SELECT * 
									FROM employes 
                                    WHERE email=? and mdp=?");
		$sql->execute(array($mail, $mdp));
		$userexist = $sql->rowCount();
		
		if ($userexist == 1) {
        	$userinfo = $sql->fetch();
        	$_SESSION['id'] = $userinfo['id'];
        	$_SESSION['prenom'] = $userinfo['prenom'];
        	$_SESSION['email'] = $userinfo['email'];
        	$_SESSION['grade'] = $userinfo['grade'];
		}
		return $userexist;
	}

	public function delete($id)
	{
		$sql = $this->cnx->prepare("DELETE FROM employes WHERE id = ?");
		$sql->execute( array($id) );
		return $sql->rowCount();
	}
}