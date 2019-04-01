<?php
session_start();
  include_once '../core/PromoC.php';
  include_once '../entities/Promo.php';
  if(isset($_GET['id'])){
    $p = new PromoC();
    $produit = $p->afficherPromo();
  }  
  if(isset($_POST['modifier-p'])){
    $pam = new Promo(null, null, null, null, null, null,null);
    $pam->setId           ($_GET['id']);
    $pam->setNom          ($_POST['nom-p']);
    $pam->setDescription  ($_POST['desc-p']);
    $pam->setPrix  ($_POST['prix-p']);
    $pam->setReduction  ($_POST['red-p']);
    $pam->setDate    ($_POST['date-p']);

    $p->ModifierPromo($pam);
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
                            
                           
                                <li class="nav-item">
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
                      <!--  <div class="right_col" role="main"> -->
       

          <table id="myT" class="table" border="1">


            <div class="right_col" role="main">
          

              <!-- top tiles -->
          <h1>Modifier Evénement!</h1>
          <form method="post" enctype="multipart/form-data">
           <div class="form-group">
              <label>Nom </label>
              <input type="text" name="nom-p" class="form-control" value="<?php echo ""; ?>">
            </div>
          
            <div class="form-group">
              <label>Description</label>
              <input  required="" min="1" type="text" name="desc-p" class="form-control" value="<?php echo ""; ?>">
            </div>

            <div class="form-group">
              <label>Prix</label>
              <input type="number" name="prix-p" class="form-control" value="<?php echo ""; ?>">
            </div>
            <div class="form-group">
              <label>Réduction</label>
              <input type="number" name="red-p" class="form-control" value="<?php echo ""; ?>">
            </div>
            <div class="form-group">
              <label>Date</label>
              <input type="date" name="date-p" class="form-control" value="<?php echo ""; ?>">
            </div>


            <input type="submit" name="modifier-p" value="Modifier" class="btn btn-success">
            <a class="btn btn-primary" href="afficherPromo.php">Liste des promos</a>
          </form>
        </div>
      </div>
            </div>
        </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                
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