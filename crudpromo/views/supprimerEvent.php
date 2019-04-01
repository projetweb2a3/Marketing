<?php 
include_once '../core/EventC.php';
$p = new EventC();
if(isset($_GET['id']))
  $p->supprimerEvent($_GET['id']);
?>
