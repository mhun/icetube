<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'IceTube Contact'; 
    $to = 'xavier@icetube.fr'; 
    $subject = 'Message du site IceTube ';
    
    $body ="From: $name\n E-Mail: $email\n Tel:\n $tel Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }

    if (!$_POST['robot']) {
       $errRobot = 'Un Robot WTF !!!';  
    }
    
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errTel && !$errMessage && !$errRobot) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Merci! Nous vous recontacterons ASAP</div>';
  } else {
    $result='<div class="alert alert-danger">ERREUR</div>';
  }
}
  }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ice tube</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="m9uYDYcEkJidfxrps0jONF33az6SACj8LLElJ_FhWG8" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <link rel="stylesheet" href="https://use.typekit.net/wca5lzp.css"> 
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style></style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/scrolling-nav.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/animate.css/3.4.0/animate.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="//cdn.bootcss.com/masonry/3.3.2/masonry.pkgd.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header>
      <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
          
          <div class="logo">
            <a class="brand page-scroll" href="#carousel"><img src="./img/logo-icetube.png" alt="icetube logo" /></a>
          </div>

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ice Tube</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#jumbotron"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#intro">Qu'est-ce donc ?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#naturel">C'est Naturel ?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#technique">En vidéo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Nos prestations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Votre événement</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            <!-- <form class="navbar-form navbar-right" role="form">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form> -->
          </div><!--/.navbar-collapse -->
        </div>
      </nav>
    </header>

    <section id="jumbotron">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container animated fadeIn delay02">
          <div class="border">  
          <h1>Ice Tube</h1>
          <p>C’est le nouveau concept gourmand qui métamorphose à la minute et sous vos yeux, des ingrédients frais en tubes délicieusement glacés</p>
          </div>  
        </div>
      </div>
    </section>
    
    <section id="intro">
      <div class="container">

        <div class="row">
          <div class="row-header">
            <h2>Qu'est-ce donc ?</h2>
          </div>
          <div class="col-md-12 text-center">
              <img src="./img/qcd.jpg" alt="icetube ingredients" class="responsive">
              <div class="border absolute bg wow fadeInUp">
               <p>Nos Ice Cream Rolls se composent d'un fabuleux mix à glace fait-maison et de fruits frais, tropicaux ou locaux et de saison.</p>
                <p>Nous utilisons également des purées de fruits réalisées à base de fruits frais ainsi que des biscuits, des épices, des herbes aromatiques et autres gourmandises...</p>
                <p>Pour agrémenter votre glace roulée, peut-être pencherez-vous pour un coulis de fruits rouges, chocolat ou caramel ?</p>
                <p>Seriez-vous plutôt du genre à tenter l'expérience du sirop de gingembre au zestes de citron vert ou du sirop de fleur d'hibiscus ?</p> 
              </div>
          </div>
        </div>
       
       </div>
    </section>

    <section id="naturel">
      <div class="container">

        <div class="row">
          <div class="row-header">
            <h2>Est ce naturel ?</h2>
          </div>
          <div class="col-md-6 wow fadeInLeft"><img src="./img/ice.jpg" alt="icetube glace" class="responsive"></div>
          <div class="col-md-6 text-left wow fadeInRight">
                <div class="border"><p>Nos IceTube sont réalisées à la minute, sur une plancha glacée. Votre glace instantanée prend forme au contact de notre plaque à -25°C.</p>
                <p>Nous réalisons nous-même une base de crème glacée qui a bénéficié du savoir-faire de grands chefs glaciers mondialement reconnus et qui fait la différence de par sa qualité gustative.</p>
                </div>
          </div>
        </div>
       
       </div>
    </section>
    
    <section id="technique">
       <div class="container-fluid">
        <div class="row">
          <div class="row-header">
            <h2>En vidéo</h2>
          </div>
        <!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise -->
        <!-- warning: playback does not work on iOS3 if you include the poster attribute! fixed in iOS4.0 -->
        <video id="video" controls preload="none" poster="./vid/poster.jpg">
          <!-- MP4 must be first for iPad! -->
          <source src="./vid/icetube.mp4" type="video/mp4" /><!-- Safari / iOS video    -->
          <source src="./vid/icetube.ogv" type="video/ogg" /><!-- Firefox / Opera / Chrome10 -->
        </video>
          <!-- <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://player.vimeo.com/video/136721968?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div> -->
        </div>
       </div>
    </section>

    <section id="services">
       <div class="container">

        <div class="row">
          <div class="row-header">
            <h2>Nos prestations</h2>
          </div>
          <div class="col-md-6 text-left wow fadeInLeft">
            <img src="./img/xavier.jpg" alt="icetuber" class="responsive">
          </div>
          <div class="col-md-6 wow fadeInRight">
            <div class="border">
            <p>Ice Tube s'adapte à votre événement pour un show un peu givré.</p>
            <p>Une ambiance et une équipe sympa... un show culinaire bluffant, des recettes de glaces authentiques et originales, des offres Bio, 100% végétalien ou sans Gluten.</p>
            <p>Vous cherchez encore votre formule ? Contactez-nous et nous trouverons ensemble celle qui convient le mieux à votre événement.</p>
          </div>
          </div>
         <div class="col-md-12 text-center"><img src="./img/formules.jpg" alt="icetube formules"></div>
        </div>
      
      </div>
    </section>

<!--
        <section id="about">
       <div class="container">

        <div class="row">
          <div class="row-header">
            <h2>Votre événement</h2>
          </div>
          <div class="col-md-6 wow fadeInLeft">
          </div>
          <div class="col-md-6 wow fadeInRight">
            <p><strong>Pour avoir l'effet Ice Tube sur votre événement :</strong></p>
            <p>Pas la peine de vous armer d'un mix à glace industriel, d'un congélateur, d'une spatule et d'une paire de mouffles... aussi protectrice soit-elle.</p>

            <p>Il vous suffit d'avoir :</p> 
            <ul>
              <li>1 espace de 2m² (intérieur ou extérieur)</li>
              <li>1 prise de courant de 220v (1,1 kW par plancha)</li>
              <li>des gourmets et des gourmands</li>
              <li>une connexion internet ou un téléphone pour nous contacter (mais ça tombe bien, vous avez ce qu'il faut entre les mains)</li>
            </ul>
            </div>
      
      </div>
    </div>
    </section>
-->

    <section id="contact">
      <div class="container">

        <div class="row">

          <div class="row-header">
            <h2>Contact</h2>
          </div>

          <form class="contact col-md-6 horizontal-center" data-toggle="validator" role="form" method="post" action="index.php">
            <div class="form-group">
              <label class="control-label" for="name">Nom</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-error="Yo, c pas un mail ca!" required value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group">
              <label class="control-label" for="tel">Téléphone</label>
              <input type="tel" class="form-control" id="tel" name="tel" placeholder="Téléphone" data-error="Yo, c pas un numero de tel ca!" value="<?php echo htmlspecialchars($_POST['tel']); ?>" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
              <?php echo "<p class='text-danger'>$errTel</p>";?>
            </div>
            <div class="form-group">
              <label class="control-label" for="message">Message</label>
              <textarea class="form-control" name="message" rows="3"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label for="robot"><input id="robot" name="robot" type="checkbox" value="robot"><span class="small">Je ne suis pas un robot, faut pas croire ce que disent les…</span></label>
              <?php echo "<p class='text-danger'>$errRobot</p>";?>
              </div>
            </div>
            <p><input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-default"></p>
            <div class="form-group">
              <?php echo $result; ?> 
            </div>
          </form>

          <div class="col-md-12 text-center wow fadeInUp">

            <ul class="list-inline">
              <li><a href="mailto:xavier@icetube.fr?subject=message_icetube.fr"><i class="fa fa-envelope fa-fw"></i>&nbsp; xavier@icetube.fr</a></li>
              <li><a href="tel:+33603183255"><i class="fa fa-phone fa-fw"></i>&nbsp; +33 6 03 18 32 55</a></li>
              <li><a href="https://www.facebook.com/icetube.fr/" target="_blank"><i class="fa fa-facebook-official fa-fw"></i>&nbsp; Facebook</a></li>
              <li><a href="https://www.instagram.com/icetube.fr/" target="_blank"><i class="fa fa-instagram fa-fw"></i>&nbsp; Instagram</a></li>
            </ul>

          </div>

        </div>

       </div>
     </section>

      <footer>
        <div class="container">
          <p class="pull-left">&copy; Ice Tube 2016</p>
          <ul class="list-inline pull-right">
              <li><a class="nodeco" href="mailto:xavier@icetube.fr?subject=message_icetube.fr"><i class="fa fa-envelope fa-fw"></i>&nbsp; xavier@icetube.fr</a></li>
              <li><a class="nodeco" href="tel:+33603183255"><i class="fa fa-phone fa-fw"></i>&nbsp; +33 6 03 18 32 55</a></li>
              <li><a class="nodeco" href="https://www.facebook.com/icetube.fr/" target="_blank"><i class="fa fa-facebook-official fa-fw"></i>&nbsp; Facebook</a></li>
              <li><a class="nodeco" href="https://www.instagram.com/icetube.fr/" target="_blank"><i class="fa fa-instagram fa-fw"></i>&nbsp; Instagram</a></li>
          </ul>
        </div>
      </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script src="//cdn.bootcss.com/waypoints/4.0.0/jquery.waypoints.min.js"></script>
        <script src="//cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/vendor/jquery.easing.min.js"></script>
        <script src="js/vendor/scrolling-nav.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76827944-1', 'auto');
        ga('send', 'pageview');

      </script>
    </body>
</html>
