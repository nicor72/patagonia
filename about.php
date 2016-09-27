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
</head>
<body>

  <!-- Nav menu -->

  <div class="navbar-fixed">
    <nav role="navigation" class="patagonia-green-bg">
      <?php include("header.php"); ?>
    </nav>
  </div>

  <!-- About Us -->

<div class="row"></div>
<div class="row"></div>

<div class="container">

    <div class="row">

      <div class="col s12 m12 l12">
       
        <div id="about">
          <h2 class="no-margin">About Us</h2>
          <p class="no-margin">Patagonia Oils is one of the leading natural oil producers in Chile, South America. We are an Australian-Chilean business operating in both countries. We produce our oils using only the best ingredients and processes. Patagonia Oils is a socially responsible company, strongly committed in promoting: <br> 
            • Skin health for our customers <br>
            • Fair trade conditions with our business partners <br>
            • Clean business processes for our planet <br>
          </p>
          <p>Patagonia Oils has a local partner in Australia who runs the international operations.  Our partner is based in Sydney and has extensive local market knowledge.</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col s12 m12 l12">
       
        <div id="oils">
          <h2 class="no-margin">Our Oils and products</h2>
          <p class="no-margin">All our products are 100% free of pesticides, solvents, chemicals and toxic substances. We are committed to produce the most diverse range of oils at the highest quality. We follow strict controls and high quality industry standards in manufacturing our products. All our products are produced naturally. We use cold-press methods that preserve vitamins and antioxidants, enhancing quality, properties and benefits.</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col s12 m12 l12">
       
        <div id="rosehip">
          <h2 class="no-margin">Rosehip Oil</h2>
          <p class="no-margin">We produce Rosehip oil using only the best wild rose bushes seeds (Rosa rubiginosa and Rosa canina) from the south of Chile.</p>
        </div>
      </div>

    </div>

  <!-- Our Team  

    <div class="row">
      <h2 class="center">Our Team</h2>
      <div class="col s12 m4 l4 offset-m2 offset-l2">
        <div class="center">
          <img src="images/team/team2.png" class="circle photo-container" alt="Foto personal de miembro de patagonia oils">
          <h5>Cristián Molina Erazo</h5>
          <h6>Strategic Planning and Operations</h6>
          <p>Cristián is an engineer, with previous work experience in large mining and constructions companies such as BHP Billiton, Anglo American Plc and Bechtel.  Following his beliefs, he co-created Patagonia Oils giving sustainable and natural products companies a say in today’s world. Cristián is based in Santiago, Chile.</p>
        </div>
      </div>
      <div class="col s12 m4 l4"> 
        <div class="center">   
          <img src="images/team/team1.png" class="circle photo-container" alt="Foto personal de miembro de patagonia oils">
          <h5>Nicolás Ruiz-Tagle Panatt</h5> 
          <h6>Local Production and Supply Chain</h6>
          <p>Nicolás is a lawyer, a professional with a strong commitment towards community service and fair trade issues. Nicolás is also a highly motivated entrepreneur. He is based in Santiago, Chile.</p>
        </div>
      </div>
    </div>

   End Our Team -->  
    
    <div class="row">
      <div class="col s12 m2 l2 offset-m5 offset-l5">
        <a href="contacto.php" class="btn waves-effect waves-green blue lighten-1 hide-on-med-and-down" id="index-contact-button">Contact Us</a>
      </div>
    </div>
  </div> 

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
      /* Animacion Our Team 
      jQuery('.circle').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated bounceIn',
          offset: 200
      });
      jQuery('h5').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 0
      });
  */    
      jQuery('#about').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 100
      });
      jQuery('#oils').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 200
      });
      jQuery('#rosehip').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 300
      });
      jQuery('#index-contact-button').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 300
      });
    });
  </script>

</body>
</html>
