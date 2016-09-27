<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  <title>Patagonia Oils</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    main {
      flex: 1 0 auto;
    }
  </style>
</head>
<body>

<!-- Nav menu -->

  <div class="navbar-fixed">
    <nav role="navigation" class="patagonia-green-bg">
      <?php include("header.php"); ?>
    </nav>
  </div>

<main>

<div class="row"></div>
<div class="row"></div>

<div class="container">
  <div class="row center">
    <div class="col l5 m5 offset-l1 offset-m1">
      <i id="carta" class="material-icons large patagonia-blue-text">email</i>
      <h5>Contact Us</h5>
      <div class="col l12">
        <div class="card-panel left-align hoverable">
          <img class="right" src="images/patagonia-logo.svg" style="width: 7em;">
          <p style="font-family: 'Poiret One', cursive;">Patagonia Oils™<br>
          Las Verbenas 8055, <br> Las Condes, Santiago, Chile. <br>
          Phones: <span class="light" style="font-family: 'Roboto';">+(56) 9 65788787 - (+61) 4 10347293</span><br>
          Email: <a href="mailto:contac@patagoniaoils.com" class="hoverLinkBlue">contact@patagoniaoils.com</a>
          </p>
        </div>
      </div>
    </div>

    <?php 

      if(@$_GET['e']=='ok'){

        include("conexion-mysql.php");

        $ask_user=mysql_query("SELECT name FROM inbox ORDER BY id_inbox DESC LIMIT 0,1");
        while($show_user=mysql_fetch_array($ask_user)){
        ?>
        <div id="form-answer">
          <h4 class="chip"><?php        
                echo $show_user['name'];}
            ?>,</h4>
          <h5 class="col l6 m6">Your message has already been sent, we will contact you shortly, Thanks!<br>Atte.</h5>
          <img class="col l4 m4 offset-l1 offset-m1 responsive-img" src="images/patagonia-logo.svg">
        </div>
 
        <?php
      }else{
    ?>

    <form method="POST" action="inbox.php" class="col l6 m6 s12">
      <div class="row">
        <div class="input-field col l10 m10 s11">
          <i class="material-icons prefix light-green-text text-lighten-1">account_circle</i>
          <input name="name" id="name" type="text" class"validate" required>
          <label for="name">Name</label>
        </div>
      </div>  
      <div class="row">  
        <div class="input-field col l10 m10 s11">
          <i class="material-icons prefix light-green-text text-lighten-1">email</i>
          <input name="email" id="email" type="email" class"validate" required>
          <label for="email">Email</label>
        </div>
      </div>  
      <div class="row">
        <div class="input-field col l10 m10 s11">
          <i class="material-icons prefix light-green-text text-lighten-1">chat</i>
          <textarea name="message" id="message" class="materialize-textarea" required></textarea>
          <label for="message">Message</label>
        </div>
      </div> 
      <div class="row">
        <div class="col l10 m10 s12">
          <button class="btn waves-effect blue lighten-1" type="submit" name="action" id="send-button"><i class="material-icons left">send</i>Send</button>
        </div>
      </div> 
    </form>
    <?php } ?>
  </div>
</div>

</main>

 <div class="row"></div>
 <div class="row"></div>

  <!--  Footer -->  

  <?php include("footer.php"); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/viewportchecker.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('form').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInRight',
          offset: 200
      });
      jQuery('#form-answer').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInUp',
          offset: 200
      });
      jQuery('.material-icons').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated bounceIn',
          offset: 100
      });
      jQuery('.card-panel').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInLeft  ',
          offset: 200
      });
    });
  </script>

  </body>
</html>
