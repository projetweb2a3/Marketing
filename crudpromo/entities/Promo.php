<?php  
class Promo
{
	private $id;
	private $nom;
	private $description;
	private $prix;
	private $reduction;
	private $reference;
	private $date;
	private $image;
	private $imageTmp;

	public function setNom($n){
		$this->nom = $n;
	}
	public function setDescription($de){
		$this->description = $de;
	}
	public function setPrix($p){
		$this->prix = $p;
	}	
	public function setReduction($r){
		$this->reduction = $r;
	}	
	public function setReference($ref){
		$this->reference = $ref;
	}	
	public function setDate($da){
		$this->date = $da;
	}	
	
	public function setId($id){
		$this->id = $id;
	}
	public function setImage($i){
		$this->image = $i;
	}
	public function setImageTmp($i){
		$this->imageTmp = $i;
	}
	public function getImage(){
		return $this->image;
	}
	public function getImageTmp(){
		return $this->imageTmp;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getDate(){
		return $this->date;
	}	
	public function getReference(){
		return $this->reference;
	}	
	public function getPrix(){
		return $this->prix;
	}	
	public function getReduction(){
		return $this->reduction;
	}	
	public function getDescription(){
		return $this->description;
	}	
	public function getId(){
		return $this->id;
	}
	function __construct($n,$de, $p, $r, $da, $i, $it){
		$this->nom  	   = $n;
		$this->description = $de;
		$this->prix         =$p;
		$this->reduction=$r;
		$this->date    = $da;
		$this->image       = $i;
		$this->imageTmp    = $it;
		
	}
}
	?>