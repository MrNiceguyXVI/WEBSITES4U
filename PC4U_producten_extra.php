<?php

  //wanneer de form verstuurd word
  if(isset($_POST['submit'])){
    //pad naar de plek waar afbeeldgen opgeslagen worden
    $target = "Scripts/img/product_img/".basename($_FILES['image']['name']); 

    //verbinding maken met de database
    $db = mysqli_connect("localhost", "root", "", "accounts");

    //de data uit de form halen
    $title = $_POST['title'];
    $image = $_FILES['image']['name']; 
    $description = $_POST['description'];
    $specs = $_POST['specifications'];


    $sql = "INSERT INTO producten (title, image, description, specs) VALUES ('$title', '$image', '$description', '$specs')";
    mysqli_query($db, $sql); //slaat de gestuurde gevens op in de 'producten' tabel in de database

    //verplaatst de gestuurde afbeelding naar de 'product_img' map in img
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      $msg = "image uploaded successfully!";
    }else{
        $msg = "there was a problem uploadng the image";
    }
  }
?>

<!DOCTYPE html>
<html>
    <!-- header -->
    <head>
        <title>PC4U</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="Scripts/bootstrap.css" type="text/css">
        <link rel="icon" href="Scripts/img/Websites4U.webp">
    </head>
    <!-- end of header -->
    <body>  
    <!-- Navigation bar -->    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="Home.html">
          <img src="Scripts/img/Websites4U.webp" class="navlogo" width="50" height="50">          
        </a>
        <a class="navbar-brand" href="Home.html">
          <h5 class="d-md-none">Computers</h5>        
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Computers<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reparatiepagina.html">Reparatie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact_page.html">Contact</a>
            </li>
          </ul>
        </div>
        <div class="dropdown show">
          <b style="color:white">Ingelogd als:&nbsp</b>
          <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i id="User"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Accountinfo</a>
              <div class="dropdown-divider"></div>
            <a style="cursor: pointer;" class="dropdown-item" id="Logtext" onclick="Log()"></a>
          </div>
        </div>
      </nav>
      <!-- end of navigation bar -->
      <!-- main body -->
      <!--START knoppen voor modals product toevoegen en verwijderen-->
      <div class="container p-0 col-12 pt-3">    
      <div id="Admindiv" style="display:none;">  
        <div class="row m-0">  
          <div class="ml-md-auto pr-md-5 pr-lg-4 text-center">          
            <button type="button" class="btn btn-dark mb-1 mb-md-0" data-toggle="modal" data-target="#Pform">Producten toevoegen</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delform">Producten verwijderen</button>
          </div>
        </div>
      </div>
      <!--EIND knoppen voor modals product toevoegen en verwijderen-->
        <!--START Product toevoegen modal-->
        <div class="modal fade" id="Pform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product toevoegen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="PC4U_producten_extra.php" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="titel">Product titel</label>
                    <input type="text" name="title" class="form-control" required> 
                  </div>

                  <div class="form-group">
                    <label for="afbeelding">Product afbeelding</label>
                    <input type="file" name="image" class="form-control-file" required> 
                  </div>

                  <div class="form-group">
                  <label for="descriptie">Product descriptie</label>
                    <input type="text" name="description" class="form-control" required> 
                  </div>

                  <div class="form-group">
                    <label for="specificaties">Product specificaties</label>
                    <textarea cols="30" rows="6" name="specifications" class="form-control" placeholder="specificaties" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                  <input type="submit" class="btn btn-success" name="submit" value="Product toevoegen">
                </div>
              </form>  
            </div>
          </div>
        </div>
        <!--EIND Product toevoegen modal-->
        
        <!--START Product verwijderen modal-->
        <div class="modal fade" id="Delform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product verwijderen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="post" action="PC4U_producten_extra.php">
                        <div class="modal-body">

                          <div class="form-group">
                            <label for="verwijderen">Product Verwijderen</label>
                            <!--START php voor het laten verschijnen van alles wat verwijderd kan worden-->
                            <select class="form-control" name="P_del" required>
                              <?php
                                $db = mysqli_connect("localhost", "root", "", "accounts");
                                $sql = "SELECT * FROM producten";
                                $result = mysqli_query($db, $sql);
                                while($row = mysqli_fetch_array($result)){
                                  echo "<option name='".$row['id']."' value='".$row['id']."'>".$row['title']."</option>";
                                }
                              ?>
                            <!--EIND php voor het laten verschijnen van alles wat verwijderd kan worden-->
                            </select>
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                          <input type="submit" class="btn btn-danger" name="delete" value="Product verwijderen">
                        </div>
                      </form>  
                    </div>
                  </div>
                </div>
        <!--EIND Product verwijderen modal-->

        <!--START php code om sql rijen te verwijderen-->
                <?php
                if(!empty($_POST['P_del'])){
                  if(isset($_POST['delete'])){
                    $db = mysqli_connect("localhost", "root", "", "accounts");
                    $sql = "DELETE FROM producten WHERE id =".$_POST['P_del'];
                    $result = mysqli_query($db, $sql);
                  }else{
                    $_POST['delete'] == null;
                  }
                }
                ?>
        <!--EIND php code om sql rijen te verwijderen-->

        <!--START Php code die producten uit de sql database toevoegd-->
        <div class="row justify-content-center m-0">
          <?php
            $db = mysqli_connect("localhost", "root", "", "accounts");
            $sql = "SELECT * FROM producten";
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_array($result)){
              echo "<div class='card col-12 col-md-3 my-3 mx-4 mx-md-4 mx-xl-5 rounded-0'>";
              echo "<div class='card-body px-0 py-3'>";
              echo "<h5 class='card-title mx-2 mx-md-0'>".$row['title']."</h5>";
              echo "<img src='Scripts/img/product_img/".$row['image']."' class='card-img-top pb-1 d-lg-none' alt='".$row['title']."' height='166' width='288'>";
              echo "<img src='Scripts/img/product_img/".$row['image']."' class='card-img-top pb-1 d-none d-lg-flex' alt='".$row['title']."' height='253' width='443'>";
              echo "<p class='card-text h6 font-weight-normal mx-2 mx-md-0'>".$row['description']."</p>";
              echo "<hr class='mx-1'>";
              echo "<pre>".$row['specs']."</pre>";
              echo "</div>";
              echo "</div>";
            }
          ?>
        </div>
        <!--EIND Php code die producten uit de sql database toevoegd-->
      </div>
      <!-- end of main body -->
      <!-- footer -->
      <footer class="bg-dark text-light mt-3">
        <div>
          <br/>
          <br/>
            <p class="text-center">&copy;<script>document.write(new Date().getFullYear());</script> - PC4U</p></p>
          <br/>
        </div>
      </footer>
      <!-- end of footer -->
      <!-- Javascript -->
      <script src="Scripts/Inlogsysteem.js"></script>
      <script src="Scripts/jquery-3.3.1.slim.min.js"></script>
      <script src="Scripts/popper.min.js"></script>
      <script src="Scripts/bootstrap.js"></script>
      <script>
        var Admin = sessionStorage.getItem("Admin");
        if (Admin == "YES")
        {
          document.getElementById("Admindiv").style.display = "block";
        }
      </script>
      <!-- end of javascript -->
    </body>

</html>
