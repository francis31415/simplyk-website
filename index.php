<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Simplyk Website</title>
  <!--fonts-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Slabo+27px' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">

  <!-- JS -->
  <!-- <script type="text/javascript" src="js/changeForm.js"></script>-->

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="favicon/manifest.json">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="apple-mobile-web-app-title" content="Simplyk">
  <meta name="application-name" content="Simplyk">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>
<body>
  <div class="container-fluid mycontainer">

    <?php include("navbar.php"); ?>

    <div id="first-section" class="section">
      <div class="row">
        <div class="col-md-2"></div>
        <div id="logo" class="col-md-8">
          <img align="middle" src="images/simplyk.png">
        </div>
        <div class="col-md-2"></div>
      </div>
      <h1 class="text-center" id="vision">Construisons une société engagée dès maintenant</h1>
      <h4 class="text-center" id="mission">Mettons en relation les organismes et les bonnes volontés</h4>
    </div>

    <div id="description-section" class="container-fluid section">
      <h3 class="sous-titre text-center" id="titre-description-section">Que tu sois un citoyen ou un organisme</h3>

      <h6 class="sous-titre2 text-center">Trouve ce dont tu as besoin</h6>

      <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-3 force">
          <div class="panel-heading">
            <img src="images/community-bleu.png" class="img-responsive">
            <h3 class="text-center">Citoyen</h3>
          </div>
          <div class="panel-body">
            <p class="first text-center">Trouve une mission...</p>
            <p class="text-center">selon tes disponibilités</p>
            <p class="text-center">près de chez toi</p>
            <p class="text-center">en accord avec tes intérêts</p>
            <p class="text-center">avec tes amis !</p>
            <button class="btn btn-primary center-block register">S'enregistrer</button>
          </div>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-3 force">
          <div class="panel-heading">
            <img src="images/heart-bleu.png" class="img-responsive">
            <h3 class="text-center">Organisme</h3>
          </div>
          <div class="panel-body">
            <p class="first text-center">Trouve des bénévoles...</p>
            <p class="text-center">plus rapidement</p>
            <p class="text-center">pour des missions diversifiées</p>
            <p class="text-center">à la dernière minute</p>
            <p class="text-center">avec de nombreuses compétences !</p>
            <button class="btn btn-primary center-block register">S'enregistrer</button>
          </div>
        </div>

        <div class="col-md-2"></div>
      </div>
    </div>

    <div id="register-section" class="section">
      <h3 class="sous-titre text-center">Tiens-toi au courant de l'avancée de notre projet !</h3>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4 loupe center-block">
          <h3>Des missions et des bénévoles à portée de main</h3>
          <img id="loupe" src="images/loupe.png" class="img-responsive">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 form-wufoo">
          <div class="btn-group btn-group-justified" id="btn-group-register" role="group" data-toggle="buttons" aria-label="...">
            <label id="citoyen-button" class="btn btn-default active">
              <input type="radio" name="options"  autocomplete="off" checked><i class="fa fa-user"></i>   Citoyen
            </label>
            <label id="organisme-button" class="btn btn-default">
              <input type="radio" name="options" autocomplete="off"><i class="fa fa-university"></i>   Organisme
            </label>
          </div>
          <div id="php-form"><?php include("form-cit.php"); ?></div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

    <div id="partners-section" class="section">
      <h3 class="sous-titre text-center">Nos partenaires</h3>
      <div id="partners-row" class="row">
        <div class="col-md-3 center-block img-partners"><a href="http://d3center.ca/"><img src="http://d3center.ca/wp-content/uploads/2015/06/District3-Innovation-Center.png" class="img-responsive center-block"></a></div>
        <div class="col-md-3 center-block img-partners"><a href="http://cabm.net/en"><img id="cabm" src="https://pbs.twimg.com/profile_images/593854999202955264/xvNlID33.jpg" class="img-responsive center-block"></a></div>
        <div class="col-md-3 center-block img-partners"><a href="http://volunteerwica.com/accueuil/"><img src="http://volunteerwica.com/wp-content/themes/bhinneka-child/img/logofr.png" class="img-responsive center-block"></a></div>
        <div class="col-md-3 center-block img-partners"><a href="https://www.concordia.ca/"><img src="http://5days.ca/concordia/wp-content/uploads/sites/25/2014/03/Concordia_Logo2.png" class="img-responsive center-block"></a></div>
      </div>
    </div>

    <div id="fourth-page">
      <h3 class="sous-titre text-center">Vidéo de présentation</h3>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="center-block"><iframe width="560" height="315" align="middle" class="center-block" src="https://www.youtube.com/embed/GgUCo700JUw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
      <div class="col-md-2"></div>
    </div>

    <?php include("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </div>
</body>
</html>

<!-- SCRIPTS-->

<!-- Appui sur le bouton du formulaire organisme-->
<script type="text/javascript">
  var orga = document.getElementById("organisme-button");
  orga.addEventListener('click', function(){
    var form = document.getElementById("php-form");
    form.innerHTML= '<iframe height="560" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/m19bqvke0my1owd/"><a href="https://tjaurou.wufoo.com/forms/m19bqvke0my1owd/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">There are tons of <a href="http://www.wufoo.com/features/">Wufoo features</a> to help make your forms awesome.</span></div>'}, false);
</script>

<!-- Appui sur le bouton du formulaire citoyen-->
<script type="text/javascript">
  var cit = document.getElementById("citoyen-button");
  cit.addEventListener('click', function(){
    var form = document.getElementById("php-form");
    form.innerHTML= '<iframe height="564" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/z1ihgqmq177l9zv/"><a href="https://tjaurou.wufoo.com/forms/z1ihgqmq177l9zv/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">Online contact and registration forms from <a href="http://www.wufoo.com">Wufoo</a>.</span></div>'}, false);
</script>

<!-- Script GoogleAnalytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71659502-1', 'auto');
  ga('send', 'pageview');

</script>