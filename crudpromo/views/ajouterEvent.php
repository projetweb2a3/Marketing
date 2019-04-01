<?php 
session_start();
  include_once '../core/EventC.php';
  include_once '../entities/Event.php';
  $produitC = new EventC();

  if (isset($_POST['Ajouter'])) {
    $produit = new Event($_POST['nom-p'], $_POST['desc-p'], $_POST['locali-p'], $_POST['date-p'], $_FILES['img-p']['name'], $_FILES['img-p']['tmp_name']);
    $produitC->ajouterEvent($produit);
  }
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
                                <a class="nav-link" href="#">Produtis</a>
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
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Ajouter Evénement</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                             <form method="post" enctype="multipart/form-data" name="ajouterEvent">



                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Nom de l'événement
                                
                                    </label>
                                    <input type="text" required pattern = "" placeholder ='Lettres Majuscules '  name="nom-p" class="form-control" value="" required="" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "  onblur="verifname(this);" >                               
                                </div>

                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <input  required pattern = ""type="text" name="desc-p" class="form-control" value="" required="" placeholder ='Lettres Majuscules '>
                                                                    </div>
                                
                               
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Localisation</label>
                                    <textarea  required pattern = "" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"  name="locali-p" rows="2" required placeholder ='Lettres Majuscules '></textarea>
  
                                </div>

                                 <div class="input-group mb-3">
                                    <label for="expire_date" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Date
          
                                    </label>
                                    <input  required pattern = "" id="expire_date" name="date-p" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" data-large-mode="true">
                                     
                                </div>

              <div><label >Image</label></div>
              <div>  <input class="input-group mb-3" type="file" name="img-p" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required="" value=""></div>
              
             
                

              
                                     
                                </div>

                                

                                	 <div>              <tr>
              <td><input   type="submit" name="Ajouter" class="btn btn-success" value="Ajouter"></td>
            </tr></div>


            </div>
                            </form>
                        
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
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>