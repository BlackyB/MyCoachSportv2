<!doctype html>
<html lang="en">
<head>
  <title>Mobile and web applications for coaches, clubs, athletes...</title>
  <?php include('../head.inc.php'); ?>  
  <meta name="description" content="Our solutions are adapted to all kind of practices and all kind of practionners." />
  <meta property="og:url" content="https://www.mycoachsport.com/en/solutions/" />
  <meta property="og:title" content="Mobile and web applications for coaches, clubs, athletes..." />
  <meta property="og:description" content="Our solutions are adapted to all kind of practices and all kind of practionners." />
  <meta name="twitter:description" content="Our solutions are adapted to all kind of practices and all kind of practionners." />
</head>
<body id="solutions">
    <div class="container p-0">
        <?php $page = 'solutions'; include('../menu.inc.php'); ?>
    </div>
  <main class="container-fluid">
    <div class="container solution">
      <div class="row"> 
        <div class="col-12">       
           <h1 class="text-uppercase"><span>O</span>ur solutions</h1>
           <h3 class="soustitre">Our solutions address all sport stakeholders whatever their kind or level are.</h3>
        </div>
        <div class="col-12 col-md-10 offset-md-1 text-center px-0">       
           <img src="/img/solutions.png" srcset="/img/solutions@2x.png 1.5x" class="img-fluid" alt="Les solutions My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>The <strong>Pro</strong><br />Platform</h2>
           <p class="content">Data centralisation and performance optimisation for the high-level.</p>
           <p class="text-center text-lg-left"><a href="pro/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Discover </em>the platform</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 px-0 text-center">       
           <img src="/img/pro.png" srcset="/img/pro@2x.png 1.5x" class="img-fluid" alt="Pro Platform My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>The <strong>Classic</strong><br />Platform</h2>
           <p class="content">Team management and educational content sharing for amateur coaches</p>
           <p class="text-center text-lg-left"><a href="classic/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Discover </em>the platform</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 order-lg-first px-0 text-center">       
           <img src="/img/classic.png" srcset="/img/classic@2x.png 1.5x" class="img-fluid" alt="Classic Platform My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>The <strong>Practice</strong><br />App</h2>
           <p class="content">Support for the practice of the discipline and dissemination of federal content.</p>
           <p class="text-center text-lg-left"><a href="practice/" class="btn text-uppercase savoir"><span>Discover <em class="d-none d-md-inline">the app</em></span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 px-0 text-center">       
           <img src="/img/pratiquant.png" srcset="/img/pratiquant@2x.png 1.5x" class="img-fluid" alt="Practice app My Coach">
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