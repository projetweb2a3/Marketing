
<?php
session_start();  
  include_once '../core/EventC.php';
    $produit = new EventC();
 ?>   
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event - Dashboard Admin Template</title>
    <script src="add-event.js">
</script>
    <!--

    Template 2108 Dashboard

  http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
   
</head>
<body class="bg02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                        <h1 class="tm-site-title mb-0">Dashboard</h1>
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                          
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Produits</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Comptes</a>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Marketing
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="ajouterEvent.php">Ajouter événement</a>
                                        <a class="dropdown-item" href="afficherEvent.php">Tous les événements</a>
                                        <a class="dropdown-item" href="ajouterPromo.php">Ajouter promotion</a>
                                        <a class="dropdown-item" href="afficherPromo.php">Toutes les promotions</a>
                                        
                                    </div>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Paramètres
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profil</a>
                                    
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="login.html">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- row -->
        <div class="row tm-mt-big">
             <!-- <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">-->
                 <div class="bg-white tm-block"> 
                      <!--<div class="row">
                       <div class="right_col" role="main"> 
       
        <div class="right_col" role="main">-->
       



   


                <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <h1>Statistiques de rating sur les événements</h1><br><br>
          

         

           <div class="rating">


      <span class="rating-num"><?php $total=$produit->trierEvent($_GET['id']) ;
      foreach ($total as $key) {
        echo round($key['moyenne'],1);
        $moyenne=$key['moyenne'];
       } ?></span>
      <div class="rating-stars">
        <?php for ($i=0; $i <$moyenne; $i++) { 
          # code...
        ?>
        <span><i class="active icon-star"></i></span> <?php } ?>
        <?php do  { ?>

        <span><i class=" icon-star"></i></span> <?php $i++; } while($i<5);?>

      </div>
      <div class="rating-users">
        <i class="icon-user"></i> <?php $p=$produit->count($_GET['id']);
        foreach ($p as $key ) {
          $count=$key['count'];
          echo $key['count'];

         }  ?> total
      </div>
    </div>





    <div class="histo">
      <div class="five histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 5           </span>
        <span class="bar-block">
          <span id="bar-five" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],4,5);
        foreach ($c as $keyc ) {
          $countinter1= $keyc['count'];
          echo $keyc['count'];
         } if($count!=0){ $counttotalinterval1=((($countinter1/$count)*100)+10);
          }else{
 $counttotalinterval1=10;

          }

          ?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="four histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 4           </span>
        <span class="bar-block">
          <span id="bar-four" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],3,4);
        foreach ($c as $keyc ) {
$countinter2= $keyc['count'];
          echo $keyc['count'];
         }if($count!=0){ $counttotalinterval2=((($countinter2/$count)*100)+10);

          }else{
 $counttotalinterval2=10;

          }?></span>&nbsp;
          </span> 
        </span>
      </div> 
      
      <div class="three histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 3           </span>
        <span class="bar-block">
          <span id="bar-three" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],2,3);
        foreach ($c as $keyc ) {
          $countinter3= $keyc['count'];
          echo $keyc['count'];
         }if($count!=0){ $counttotalinterval3=((($countinter3/$count)*100)+10);


          }else{
 $counttotalinterval3=10;

          }?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="two histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 2           </span>
        <span class="bar-block">
          <span id="bar-two" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],1,2);
                foreach ($c as $keyc ) {
        $countinter4= $keyc['count'];
          echo $keyc['count'];
         } if($count!=0){ $counttotalinterval4=((($countinter4/$count)*100)+10);
 }else{
 $counttotalinterval4=10;}
          ?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="one histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 1           </span>
        <span class="bar-block">
          <span id="bar-one" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],0,1);
                foreach ($c as $keyc ) {
        $countinter5= $keyc['count'];
          echo $keyc['count'];
         } if($count!=0){ $counttotalinterval5=((($countinter5/$count)*100)+10);
          }else{
 $counttotalinterval5=10;}?></span>&nbsp;
          </span> 
        </span>
      </div>
    </div>

   </div>
            </div>
            </div>

        <!-- /page content -->


                  
        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>
    <!--<script src="js/jquery-1.11.1.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
<script>
$(document).ready(function() {
  $('.bar span').hide();
  $('#bar-five').animate({
     width: '<?php echo $counttotalinterval1 ?>%'}, 1000);
  $('#bar-four').animate({
     width: '<?php echo $counttotalinterval2 ?>%'}, 1000);
  $('#bar-three').animate({
     width: '<?php echo $counttotalinterval3 ?>%'}, 1000);
  $('#bar-two').animate({
     width: '<?php echo $counttotalinterval4 ?>%'}, 1000);
  $('#bar-one').animate({
     width: '<?php echo $counttotalinterval5 ?>%'}, 1000);
  
  setTimeout(function() {
    $('.bar span').fadeIn('slow');
  }, 1000);
  
});</script>

  <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018. Created by
                    <a href="http://www.tooplate.com" class="text-white tm-footer-link">The Ninety Eight</a> 
                </p>
            </div>
        </footer>
    </div>
 <!-- Chart.js -->
    <script src="../vendor/Chart.js/dist/Chart.min.js"></script>

     <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
     <!-- Chart.js -->
    <script src="../vendor/Chart.js/dist/Chart.min.js"></script>
     <!-- bootstrap-progressbar -->
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
     <!-- gauge.js -->
    <script src="../vendor/gauge.js/dist/gauge.min.js"></script>
     <!-- NProgress -->
    <link href="../vendor/nprogress/nprogress.css" rel="stylesheet">
     <link href="css/stat.css" rel="stylesheet">
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>

  </body>
</html>


