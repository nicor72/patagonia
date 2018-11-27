<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Patagonia Oils</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

<!-- Nav menu -->

  <div class="navbar-fixed clear">
    <nav role="navigation">
      <?php include("header.php"); ?>
    </nav>
  </div>

<!-- Slider -->

  <div id="main-slider" class="slider fullscreen"> 
    <ul class="slides">
      <li>
        <img class="brightnessLess" src="images/patagonia-oils3.jpg">
        <div class="caption center-align text-shadow">
          <img src="images/patagonia-logo-slider.svg" id="logo-slider">
          <h5 class="no-margin">Patagonia Oils is one of the leading natural oil producers in Chile, South America. We are an Australian-Chilean business operating in both countries.</h5>
        </div>
      </li>
      <li>
        <img src="images/rosamosqueta.jpg">
        <div class="caption left-align text-shadow">
          <h3>Rosehip Oil</h3>
          <h5>We produce Rosehip oil using only the best wild rose bushes seeds (Rosa rubiginosa and Rosa canina) from the south of Chile.</h5>
        </div>
      </li>
      <li>
        <img src="images/aceites-naturales2.jpg">
        <div class="caption right-align text-shadow">
          <h3>Our Oils</h3>
          <h5>All our products are produced naturally. We use cold-press methods that preserve vitamins and antioxidants, enhancing their quality, properties and benefits.</h5>
        </div>
      </li>
      <li>
        <img src="images/productos-frescos2.jpg">
        <div class="caption left-align text-shadow">
          <h3>Natural oils</h3>
          <h5>All our products are 100% free of pesticides, solvents, chemicals and toxic substances.</h5>
        </div>
      </li>
    </ul>
  </div>   

<!--  -->
  <div class="container">
    <div class="row">

      <div class="col s12 m4 l4" id="left-index-description">
        <div class="center">
          <i class="large patagonia-green-text material-icons">invert_colors</i>
          <h5>Natural</h5>
          <p>All our products are 100% free of pesticides, solvents, chemicals and toxic substances. We are committed to produce the most diverse range of oils at the highest quality. We follow strict controls and high quality industry standards in manufacturing our products. All our products are produced naturally. We use cold-press methods that preserve vitamins and antioxidants, enhancing their quality, properties and benefits.</p>
        </div>
      </div>
      <div class="col s12 m4 l4" id="center-index-description">
        <div class="center">
          <i class="large patagonia-green-text material-icons">verified_user</i>
          <h5>Social Responsability</h5>
          <p>Patagonia Oils is a socially responsible company strongly committed in promoting:
            <li>Skin health for our customers</li>
            <li>Fair trade conditions with our business partners</li>
            <li>Clean business processes for our planet</li>
          </p>
        </div>
      </div>
      <div class="col s12 m4 l4" id="right-index-description">
        <div class="center">
          <i class="large patagonia-green-text material-icons">language</i>
          <h5>International</h5>
          <p>We are an Australian-Chilean business operating in both countries. Patagonia Oils has a local partner in Australia who runs the international operations. Our partner is based in Sydney and has extensive local market knowledge.</p>
        </div>
      </div>

    </div>
 
    <div class="row center">
      <div class="col s12 m6 l4 offset-m3 offset-l4">
        <a href="aceites.php" class="btn waves-effect waves-green blue lighten-1" id="index-contact-button">Check out our Products</a>
      </div>
    </div>

  </div>   

   <div class="row"></div>
   <div class="row"></div>

  <div class="parallax-container valign-wrapper">
    <div class="container">
      <div class="row center">
        <h5 class="header col l12 m12 s12 text-shadow">"I think it's not too late to build a utopia that allows us to share the land"</h5>
        <p class="col l11 m12 s12 right-align text-shadow"> - Gabriel García Márquez</p>
      </div>
    </div>
    <div class="parallax">
      <img src="images/campo.jpg" class="responsive-img"/>
    </div>
  </div>
  <!--  Footer -->  

  <?php include("footer.php"); ?>

  <!--  Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/viewportchecker.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
          $('nav').addClass('patagonia-green-bg');
        } else {
          $('nav').removeClass('patagonia-green-bg');
        }
      });
    });
  </script>

  <script type="text/javascript">
     jQuery(document).ready(function() {
      jQuery('#left-index-description').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInLeft',
          offset: 200
      });
      jQuery('#center-index-description').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeIn',
          offset: 200
      });
      jQuery('#right-index-description').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInRight',
          offset: 200
      });
      jQuery('#index-contact-button').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated bounceIn',
          offset: 200
      });
      jQuery('#know-us').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInUp',
          offset: 200
      });
      jQuery('#index-products-button').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated bounceIn',
          offset: 200
      });
    });
  </script>

  </body>
</html>
