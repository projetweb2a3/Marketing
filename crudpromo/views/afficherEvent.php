<?php
session_start();
  include_once '../core/EventC.php';
    $p = new EventC();
    $liste = $p->afficherEvent();
     
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
                      <div class="row">
                       <!-- <div class="right_col" role="main"> -->
       
        <!--<div class="right_col" role="main">-->
       
<br>
<br><br>
<br><br><input class="form-control" id="myI" type="text" placeholder="Search.."><br><br><br>
</div>
          <table id="myT" class="table" border="1">

            <tr style="background-color: #00cc99" >
  
              <td><h3>#</h3></td>
              <td><h3>Image</h3></td>
              <td><h3>Nom</h3></td>
              <td><h3>Description</h3></td>
              <td><h3>Localisation</h3></td>
              <td><h3>Date</h3></td>
              <td><h3>Action</h3></td>
            </tr>
            <?php 
              foreach($liste as $l){
            ?>
            <tr>
              <td><?php echo $l['id'] ?></td>


<td><img src=<?php echo $l['image']; ?> alt=""></td>
                
              <td><?php echo $l['nom'] ?></td>
              <td><?php echo $l['description'] ?></td>
              <td><?php echo $l['localisation'] ?></td>
               <td><?php echo $l['date'] ?></td>
              
              <td>
                <a href="modifierEvent.php?id=<?php echo $l['id'] ?>">Modifier</a>
                <a href="supprimerEvent.php?id=<?php echo $l['id'] ?>">Supprimer</a>
                <a href="chart.php?id=<?php echo $l['id'] ?>">Statistique</a>
              </td>
            </tr>
            <?php } ?>
          </table>
          <div class="form-actions">
          <a class="btn btn-success" href="ajouterEvent.php">ajouter</a>  
          </div>
          
        </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018. Created by
                    <a href="http://www.tooplate.com" class="text-white tm-footer-link">The Ninety Eight</a> 
                </p>
            </div>
        </footer>
    </div>

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
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>