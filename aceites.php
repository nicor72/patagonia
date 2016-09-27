<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  <title>Patagonia Oils</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <!-- Nav menu -->

  <div class="navbar-fixed">
    <nav role="navigation" class="patagonia-green-bg">
      <?php include("header.php"); ?>
    </nav>
  </div>

  <!--  -->

  <?php 
    include("conexion-mysql.php");
    
   ?>
   
    <div class="row">

      <div class="col hide-on-small-only m3 l1 offset-l1 offset-m1">
        <ul id="right-menu" class="section table-of-contents tabs-wrapper">
          <li><a href="#introduction">Top</a></li>
          <?php 
            for ($i=65; $i <= 90 ; $i++) { 
              $letra=chr($i);
              $consultar_oils_[$letra]=mysql_query("SELECT * FROM oils WHERE oil_name LIKE '$letra%'", $conect);
              if (mysql_num_rows($consultar_oils_[$letra]) != 0) {
                echo "<li><a href=#$letra>$letra</a></li>";
              }
                    
            }
           ?>
        </ul>
      </div>
    </div>  

    <div class="row">
      <div class="col s12 m8 l8 offset-l2 offset-m2">
        <div id="introduction" class="section scrollspy">
          <h2 class="no-margin">Natural Oils</h2>
          <p class="light no-margin">All our products are 100% free of pesticides, solvents, chemicals and toxic substances.  We are committed to produce the most diverse range of oils at the highest quality. We follow strict controls and high quality industry standards in manufacturing our products. All our products are produced naturally. We use cold-pressing methods that preserve vitamins and antioxidants, enhancing quality, properties and benefits.</p>
        </div>
      </div>
      
      <div class="col s12 m10 l10 offset-l2 offset-m2">  

        <?php 
          for ($i=65; $i <= 90 ; $i++) { 
            $letra2=chr($i);
            $consultar_oils_[$letra2]=mysql_query("SELECT * FROM oils WHERE oil_name LIKE '$letra2%'", $conect);
            if (mysql_num_rows($consultar_oils_[$letra2]) != 0) {         
          
         ?>
         <div class="row"></div>
          <div class="row">
            <h5><?php echo $letra2 ?></h5>
          </div>
         
         <?php  
           }
         while($mostrar_oils_[$letra2]=mysql_fetch_array($consultar_oils_[$letra2])){ ?>
 
          <div id="<?php echo $letra2 ?>" class="left card-panel hoverable card-dimensions scrollspy hide-on-med-and-down">
            <div class="light black-text" href="#<?php echo $mostrar_oils_[$letra2]['id'] ?>">
              <h6 class="center"><?php echo $mostrar_oils_[$letra2]['oil_name'] ?> Oil</h6>
              <div class="row center">
                <div class="col l12 m12 s12">
                  <img src="images/aceites/<?php echo $mostrar_oils_[$letra2]['oil_image'] ?>" class="responsive-img">
                </div>
              </div>
              <div class="row center">
                <div class="col l12 m12 s12">
                  <p class="text-card">INCI: <?php echo $mostrar_oils_[$letra2]['oil_inci'] ?> Oil.</p>
                </div>
              </div>
            </div>
          </div>

          <div id="<?php echo $letra2 ?>" class="col m2 s5 card-panel hoverable card-dimensions scrollspy hide-on-large-only">
            <div class="light black-text" href="#<?php echo $mostrar_oils_[$letra2]['id'] ?>">
              <h6 class="center"><?php echo $mostrar_oils_[$letra2]['oil_name'] ?> Oil</h6>
              <div class="row center">
                <div class="col l12 m12 s12">
                  <img src="images/aceites/<?php echo $mostrar_oils_[$letra2]['oil_image'] ?>" class="responsive-img">
                </div>
              </div>
              <div class="row center">
                <div class="col l12 m12 s12">
                  <p class="text-card">INCI: <?php echo $mostrar_oils_[$letra2]['oil_inci'] ?> Oil.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal 


          <div id="<?php echo $mostrar_oils_[$letra2]['id'] ?>" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4 class="center"><?php echo $mostrar_oils_[$letra2]['oil_name'] ?> Oil</h4>
              <img class="col l4" src="images/aceites/<?php echo $mostrar_oils_[$letra2]['oil_image'] ?>">
              <p><?php echo $mostrar_oils_[$letra2]['oil_description'] ?></p>
            </div>
            <div class="modal-footer">
              <p class="left">INCI: <?php echo $mostrar_oils_[$letra2]['oil_inci'] ?> Oil.</p>
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
          </div> -->

        <?php } }?>
      </div>
      
    </div>   

  <!--  Footer -->  

  <?php include("footer.php"); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/viewportchecker.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('.card-panel').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInUp',
          offset: 200
      });
    }); 
  </script>

</body>
</html>
