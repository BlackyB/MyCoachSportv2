<!doctype html>
<html lang="fr">
<head>
  <title>My Coach Sport - Rejoignez l'aventure</title>
  <?php include('../head.inc.php'); ?>  
  <meta name="description" content="Vous recherchez un cadre de travail dynamique et passionnant ? Envoyez-nous votre candidature !" />
  <meta property="og:url" content="https://www.mycoachsport.com/fr/carriere/" />
  <meta property="og:title" content="My Coach Sport - Rejoignez l'aventure" />
  <meta property="og:description" content="Vous recherchez un cadre de travail dynamique et passionnant ? Envoyez-nous votre candidature !" />
  <meta name="twitter:description" content="Vous recherchez un cadre de travail dynamique et passionnant ? Envoyez-nous votre candidature !" />
</head>
<body id="carriere">
    <div class="container p-0">
        <?php $page = 'carriere'; include('../menu.inc.php'); ?>
    </div>
  <main class="container-fluid">
    <div class="container">
      <div class="row"> 
        <div class="col-12 col-xl-11">       
           <h1 class="text-uppercase">Rejoindre l'aventure<br /><span>M</span>y Coach Sport</h1>
           
        </div>
        <div class="col-12">
          <p class="content">My Coach Sport compte dans son équipe 25 passionnés de sport et technologie. Développeurs et marketeurs, tous sont animés par la même ambition : faire de My Coach Sport la plateforme française du sport.</p>
        </div>
      </div>
    </div>
  </main>

  <section class="container-fluid px-0">
    <div class="row mx-0">
      <div class="col-md-6 px-0">
        <img src="/img/equipe2.jpg" class="w-100" alt="L'équipe My Coach">
      </div>
      <div class="col-md-6 px-0">
        <img src="/img/equipe3.jpg" class="w-100" alt="L'équipe My Coach">
      </div>
    </div>
  </section>
  <section id="cadretravail" class="container-fluid">   
      <div class="row">
        <div class="col-12 col-md-7 col-lg-8">                 
          <p class="px-lg-5">Vous recherchez un cadre de travail dynamique et souhaitez vous investir dans un projet passionnant&nbsp;?</p>           
        </div>
        <div class="col-12 col-md-5 col-lg-4"> 
        <img src="/img/equipe4.jpg" class="img-fluid d-md-none" alt="L'équipe My Coach">        
        </div>
      </div>
  </section>
  <section class="container-fluid px-0">
    <div class="row mx-0">
      <div class="col px-0">
        <img src="/img/equipe5.jpg" srcset="/img/equipe5.jpg 500w, /img/equipe5@2x.jpg 768w" sizes="100vw" class="w-100" alt="L'équipe My Coach">
      </div>
    </div>
  </section>
  <section id="nouveauxtalents" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4>Nous sommes toujours à la recherche de nouveaux talents pour agrandir notre équipe.</h4>
          <span class="text-center text-lg-left"><a href="mailto:rh@mycoachsport.com" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Envoyer ma</em> candidature</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></span>
        </div>        
      </div>
    </div>
  </section>

  

<?php include('../footer.inc.php'); ?>
<?php include('../foot.inc.php'); ?>
<script>
$('html,body').animate({
  scrollTop: $(window.location.hash).offset().top
});
</script>
</body>
</html>