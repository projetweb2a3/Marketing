<?php 
include_once '../core/PromoC.php';
$p = new PromoC();
if(isset($_GET['id']))
  $p->supprimerPromo($_GET['id']);
?>
