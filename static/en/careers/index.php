<!doctype html>
<html lang="en">
<head>
  <title>My Coach Sport - Join the adventure</title>
  <?php include('../head.inc.php'); ?>  
  <meta name="description" content="Looking for a dynamic and exciting work environment? Send us your application!" />
  <meta property="og:url" content="https://www.mycoachsport.com/en/careers/" />
  <meta property="og:title" content="My Coach Sport - Join the adventure" />
  <meta property="og:description" content="Looking for a dynamic and exciting work environment? Send us your application!" />
  <meta name="twitter:description" content="Looking for a dynamic and exciting work environment? Send us your application!" />
</head>
<body id="carriere">
    <div class="container p-0">
        <?php $page = 'carriere'; include('../menu.inc.php'); ?>
    </div>
  <main class="container-fluid">
    <div class="container">
      <div class="row"> 
        <div class="col-12 col-xl-11">       
           <h1 class="text-uppercase">Join the<br />My Coach Sport<br /><span>A</span>dventure</h1>
           
        </div>
        <div class="col-12">
          <p class="content">My Coach Sport is powered by 25 sport and technology enthusiasts. Developers and marketers, they are all motioned by the same ambition: make My Coach Sport become the reference french sport platform.</p>
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
          <p class="px-lg-5">Looking for a dynamic work environment and looking forward to investing in exciting project?</p>           
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
          <h4>We are permanently looking for new talents to expand our team.</h4>
          <span class="text-center text-lg-left"><a href="mailto:rh@mycoachsport.com" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Send my</em> application</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></span>
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