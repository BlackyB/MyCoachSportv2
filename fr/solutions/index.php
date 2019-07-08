<!doctype html>
<html lang="fr">
<head>
  <title>Des applications web et mobiles pour entraîneurs, clubs, sportifs...</title>
  <?php include('../head.inc.php'); ?>  
  <meta name="description" content="Nos solutions s'adaptent à tous types de pratiques et tous types de pratiquants." />
  <meta property="og:url" content="https://www.mycoachsport.com/fr/solutions/" />
  <meta property="og:title" content="Des applications web et mobiles pour entraîneurs, clubs, sportifs..." />
  <meta property="og:description" content="Nos solutions s'adaptent à tous types de pratiques et tous types de pratiquants." />
  <meta name="twitter:description" content="Nos solutions s'adaptent à tous types de pratiques et tous types de pratiquants." />
</head>
<body id="solutions">
    <div class="container p-0">
        <?php $page = 'solutions'; include('../menu.inc.php'); ?>
    </div>
  <main class="container-fluid">
    <div class="container solution">
      <div class="row"> 
        <div class="col-12">       
           <h1 class="text-uppercase"><span>N</span>os solutions</h1>
           <h3 class="soustitre">Nos solutions s'adressent à tous les acteurs du sport, quels que soient leur type de pratique et leur niveau.</h3>
        </div>
        <div class="col-12 col-md-10 offset-md-1 text-center px-0">       
           <img src="/img/solutions.png" srcset="/img/solutions@2x.png 1.5x" class="img-fluid" alt="Les solutions My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>La plateforme<br /><strong>Pro</strong></h2>
           <p class="content">Centralisation des données et optimisation de la performance pour le haut-niveau.</p>
           <p class="text-center text-lg-left"><a href="pro/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Découvrir </em>la plateforme</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 px-0 text-center">       
           <img src="/img/pro.png" srcset="/img/pro@2x.png 1.5x" class="img-fluid" alt="Plateforme Pro My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>La plateforme<br /><strong>Classic</strong></h2>
           <p class="content">Gestion d'équipe et partage de contenus pédagogiques pour les entraîneurs amateurs.</p>
           <p class="text-center text-lg-left"><a href="classic/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Découvrir </em>la plateforme</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 order-lg-first px-0 text-center">       
           <img src="/img/classic.png" srcset="/img/classic@2x.png 1.5x" class="img-fluid" alt="Plateforme Classic My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>L'application<br /><strong>Pratiquant</strong></h2>
           <p class="content">Accompagnement du sportif dans la pratique de sa discipline et diffusion du contenu fédéral.</p>
           <p class="text-center text-lg-left"><a href="pratiquant/" class="btn text-uppercase savoir"><span>Découvrir l'app<em class="d-none d-md-inline">lication</em></span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 px-0 text-center">       
           <img src="/img/pratiquant.png" srcset="/img/pratiquant@2x.png 1.5x" class="img-fluid" alt="Application My Coach">
        </div>
      </div>
    </div>
  </main>
<?php include('../footer.inc.php'); ?>
<?php include('../foot.inc.php'); ?>
<script>
$('html,body').animate({
  scrollTop: $(window.location.hash).offset().top
});
</script>
</body>
</html>