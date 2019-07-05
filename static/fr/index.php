<!doctype html>
<html lang="fr">
<head>
  <title>My Coach Sport - Créateur de solutions numériques</title>
  <?php include('head.inc.php'); ?>
  <meta name="description" content="Start-up française créée en 2011 et spécialisée dans la conception de solutions numériques dans le secteur du sport." />
  <meta property="og:url" content="https://www.mycoachsport.com/fr/" />
  <meta property="og:title" content="My Coach Sport - Créateur de solutions numériques" />
  <meta property="og:description" content="Start-up française créée en 2011 et spécialisée dans la conception de solutions numériques dans le secteur du sport." />
  <meta name="twitter:description" content="Start-up française créée en 2011 et spécialisée dans la conception de solutions numériques dans le secteur du sport." />
  <link rel="alternate" hreflang="es" href="https://www.mycoachsport.com/es/" />
  <link rel="alternate" hreflang="en" href="https://www.mycoachsport.com/en/" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body id="homepage">
  <div class="container p-0">
    <?php $page = 'homepage'; include('menu.inc.php'); ?>
  </div>
  <main> 
   <section id="header" class="container d-flex align-items-lg-center">     
    <div class="row">    
      <div class="col-12 col-lg-10 offset-lg-2 text-left">
        <h1 data-text="Créateur">Créateur</h1>
        <h3 data-text="de solution numériques"><span>de s</span>olutions numériques</h3>
      </div>
    </div>
  </section>
  <section class="container-fluid d-flex align-items-center" id="quisommesnous">
    <div class="container">
      <div class="row align-items-top">   
        
        <div class="col-12 col-lg-6">
          <h2 class="intertitre text-center text-lg-left">Qui sommes-nous ?</h2>
          <p>Start-up française créée en 2011 et spécialisée dans le sport numérique. Nous développons des applications web et mobiles pour accompagner la transformation numérique du mouvement sportif.</p>
          <p class="text-center text-lg-left"><a href="qui-sommes-nous/" class="btn text-uppercase savoir"><span>En savoir plus</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
          
        </div>
        <div class="col-12 col-lg-6 p-0 d-flex align-items-center">
          <div class="embed-responsive embed-responsive-16by9 d-block ">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9_kcgL2xvmE?rel=0&amp;modestbranding=1&amp;loop=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <section class="container-fluid d-flex align-items-center" id="decouvrir">
    <div class="container ">
      <div class="row justify-content-lg-center">       
        <div class="col-12 col-lg-9">
          <h2 class="intertitre text-center text-white">Une série de solutions numériques adaptées à toutes les cibles et toutes les pratiques</h2>
          <p class="text-center"><a href="solutions/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Découvrir </em>nos solutions</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>          
        </div>
      </div>
    </div>
  </section>
</main>
<section class="container-fluid" id="references">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="intertitre text-center text-uppercase">Nos références fédérales</h2>
      </div>
      <div class="col offset-md-1">
        <div class="num"></div>
      </div>    
      <div class="col-12">
        <div id="refCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Cyclisme</h3>
                  <p>L’application smartphone My Coach Vélo by FFC à destination des pratiquants licenciés et non licenciés, comportant le contenu officiel de la fédération (conseils et parcours).</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffc.png" class="d-block mx-auto img-fluid" alt="FFF">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Football</h3>
                  <p>L'assistant numérique My Coach by FFF à destination des éducateurs et dirigeants licenciés pour gérer une équipe, retrouver ses informations de licenciés et accéder au contenu pédagogique de la DTN.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-fff.png" class="d-block mx-auto img-fluid" alt="FFF">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Hockey</h3>
                  <p>L'assistant numérique My Coach by FFHockey à destination des éducateurs licenciés pour gérer une équipe et accéder au contenu pédagogique de la DTN.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffh.png" class="d-block mx-auto img-fluid" alt="FFH">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Volley-Ball</h3>
                  <p>L'assistant numérique My Coach by FFvolley à destination des éducateurs licenciés pour gérer une équipe et accéder au contenu pédagogique de la DTN. La plateforme My Coach Pro mise à disposition des Équipes Nationales et Pôles Espoirs.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffvb.png" class="d-block mx-auto img-fluid" alt="FFVB">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Surf</h3>
                  <p>L'assistant numérique My Coach by FFSurf à destination des éducateurs licenciés pour gérer une école et accéder au contenu pédagogique de la DTN.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffs.png" class="d-block mx-auto img-fluid" alt="FFS">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Judo</h3>
                  <p>L'assistant numérique My Coach by FFJudo à destination des éducateurs licenciés pour gérer une école et accéder au contenu pédagogique de la DTN.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffj.png" class="d-bloc mx-auto img-fluid" alt="FFJ">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française d'Equitation</h3>
                  <p>L'assistant numérique à destination des enseignants licenciés et des clubs pour gérer un groupe de cavaliers et accéder au contenu pédagogique de la DTN. Une application mobile de suivi et de formation pour les cavaliers.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffe.png" class="d-bloc mx-auto img-fluid" alt="FFE">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                  <h3>Fédération Française de Handball</h3>
                  <p>L'assistant numérique à destination des éducateurs licenciés et des clubs pour gérer une équipe et accéder au contenu pédagogique de la DTN. Une application mobile de suivi et de formation pour les joueurs. La plateforme Pro pour les Équipes Nationales.</p>
                </div>
                <div class="col-md-5">
                  <img src="/img/reference-ffhand.png" class="d-bloc mx-auto img-fluid" alt="FFHandball">
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#refCarousel" role="button" data-slide="prev">
            <i class="fal fa-long-arrow-left fa-2x"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#refCarousel" role="button" data-slide="next">
            <i class="fal fa-long-arrow-right fa-2x"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>    
  </div>
</section>
<section class="container-fluid" id="detailcontact">
  <div class="container">
    <div class="row">       
      <div class="col">
        <h2 class="intertitre text-center text-white">Vous êtes un acteur du sport et souhaitez en savoir davantage sur nos solutions ? Contactez-nous et bénéficiez d'une énergie et d'un savoir-faire reconnus !</h2>
        <p class="text-center"><a href="mailto:contact@mycoachsport.com" class="btn text-uppercase savoir"><span>Contactez-nous</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>  
        
      </div>
    </div>
  </div>
</section>

<section class="container-fluid" id="adresses">
  <div class="container">
    <div class="row text-center">       
      <div class="col-lg-4 pb-5 pb-lg-0 p-0">
        <p><img src="/img/allianz.png" srcset="/img/allianz@2x.png 1.5x" class="d-block mx-auto" alt="Allianz Riviera"></p>
        <h4>Nice, Stade Allianz Riviera</h4>
        <p><em>Boulevard des jardiniers,<br />06205 Nice Cedex 3, FRANCE</em><br />+33 4 93 96 09 72</p>     
      </div>
      <div class="col-lg-4 p-0">
        <p><img src="/img/paris.png" srcset="/img/paris@2x.png 1.5x" class="d-block mx-auto" alt="Paris Le Tremplin"></p>
        <h4>Paris, Le Tremplin</h4> 
        <p><em>6 rue Claude Farrère,<br />75016 Paris, FRANCE</em></p>         
      </div>
      <div class="col-lg-4 p-0">
        <p><img src="/img/bastia.png" srcset="/img/bastia@2x.png 1.5x" class="d-block mx-auto" alt="Bastia"></p>
        <h4>Bastia</h4> 
        <p><em>Zone Industrielle de Tragone<br />Lotissement Ascosa<br />20620 Biguglia, FRANCE</em></p>         
      </div>
    </div>
  </div>
</section>
<?php include('footer.inc.php'); ?>
<?php include('foot.inc.php'); ?>

<script>
  $(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      var speed = 750; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
      return false;
    });
  });
</script>
<script>


  var totalItems = $('.carousel-item').length;
  var currentIndex = $('div.active').index() + 1;
  $('.num').html('<em>'+currentIndex+'</em> | '+totalItems+'');

  $('#refCarousel').carousel({
    interval: 4000
  });

  $('#refCarousel').bind('slid.bs.carousel', function() {
    currentIndex = $('div.active').index() + 1;
    $('.num').html('<em>'+currentIndex+'</em> | '+totalItems+'');
  });


</script>
</body>
</html>