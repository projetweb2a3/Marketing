<?php 
include_once '../config2.php';
class PromoC{
public function ajouterPromo($produit)
	{
		try{
			$it = $produit->getImageTmp();
			$i = $produit->getImage();
			//move the uploaded pictures
			move_uploaded_file($it,"../uploads/$i");
			
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('INSERT INTO promo(nom, description, prix, reduction , date, image) 
									  VALUES (:n, :de, :p, :r, :da, :i)');
			$n = $produit->getNom();
			$de = $produit->getDescription();
			$p = $produit->getPrix();
			$r = $produit->getReduction();
			$da = $produit->getDate();
			$i = $produit->getImage();
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':de', $de);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':r', $r);
			$stmt->bindparam(':da', $da);
			$stmt->bindparam(':i', $i);


			$stmt->execute();

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function   afficherPromo()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT `nom`, `description`, `prix`, `reduction`, `date`, `image`, `id` FROM `promo` ');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			return $produits;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}

	public function supprimerPromo($id){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('DELETE FROM promo WHERE id = :id');
			$stmt->bindparam(":id",$id);
			if($stmt->execute())
				header('location: afficherPromo.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function ModifierPromo($produit){
		try{
			$n = $produit->getNom();
			$de = $produit->getDescription();
			$p = $produit->getPrix();
			$r = $produit->getReduction();
			$da = $produit->getDate();
			$i = $produit->getId();

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('UPDATE promo SET nom = :n,description = :de, prix = :p, reduction = :r, date = :da where  id = :id');
			
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':de', $de);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':r', $r);
			$stmt->bindparam(':da', $da);
			$stmt->bindparam(':id', $i);
			if($stmt->execute())
				header('location: afficherPromo.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}


		public function chercherPromo($nom){
		$c = new Config();
		$driver = $c->getConnexion();
		$stmt = $driver->prepare("SELECT * FROM promo WHERE  nom LIKE:n");
		$stmt->bindparam(':n', $n);
	
		$stmt->execute();
		//var_dump($liste);
		$promotions=$stmt->fetchAll();
			return $promotions;
	}
 

}
 ?>