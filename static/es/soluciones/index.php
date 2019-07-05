<!doctype html>
<html lang="es">
<head>
  <title>Software, aplicaciones, coaches, coaches y practicantes.</title>
  <?php include('../head.inc.php'); ?>  
  <meta name="description" content="Descubra nuestras soluciones digitales personalizables, adaptadas a cada tipo de uso y todas las prácticas." />
  <meta property="og:url" content="https://www.mycoachsport.com/es/soluciones/" />
  <meta property="og:title" content="Software, aplicaciones, coaches, coaches y practicantes." />
  <meta property="og:description" content="Descubra nuestras soluciones digitales personalizables, adaptadas a cada tipo de uso y todas las prácticas." />
  <meta name="twitter:description" content="Descubra nuestras soluciones digitales personalizables, adaptadas a cada tipo de uso y todas las prácticas." />
</head>
<body id="solutions">
    <div class="container p-0">
        <?php $page = 'solutions'; include('../menu.inc.php'); ?>
    </div>
  <main class="container-fluid">
    <div class="container solution">
      <div class="row"> 
        <div class="col-12">       
           <h1 class="text-uppercase"><span>N</span>uestras soluciones</h1>
           <h3 class="soustitre">Nuestras soluciones están dirigidas a todos los interesados en deportes, independientemente de su tipo de práctica y nivel.</h3>
        </div>
        <div class="col-12 col-md-10 offset-md-1 text-center px-0">       
           <img src="/img/solutions.png" srcset="/img/solutions@2x.png 1.5x" class="img-fluid" alt="Las soluciones My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>La plataforma<br /><strong>Pro</strong></h2>
           <p class="content">Centralización de datos y optimización de rendimiento para alto nivel.</p>
           <p class="text-center text-lg-left"><a href="la-plataforma-pro/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Descubre </em>la plataforma</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 px-0 text-center">       
           <img src="/img/pro-es.png" srcset="/img/pro-es@2x.png 1.5x" class="img-fluid" alt="Plataforma Pro My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>La plataforma<br /><strong>Clásica</strong></h2>
           <p class="content">Gestión de equipos e intercambio de contenidos educativos para entrenadores amateurs.</p>
           <p class="text-center text-lg-left"><a href="la-plataforma-clasica/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Descubre </em>la plataforma</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 order-lg-first px-0 text-center">       
           <img src="/img/classic.png" srcset="/img/classic@2x.png 1.5x" class="img-fluid" alt="Plataforma Classic My Coach">
        </div>
      </div>
    </div>
    <div class="container solutions">
      <div class="row"> 
        <div class="col-lg-6">       
           <h2>La aplicación<br /><strong>Practicante</strong></h2>
           <p class="content">Acompañamiento del deportista en la práctica de su disciplina y difusión del contenido federal.</p>
           <p class="text-center text-lg-left"><a href="la-aplicacion-practicante/" class="btn text-uppercase savoir"><span><em class="d-none d-md-inline">Descubre </em>la aplicación</span> <i class="fal fa-long-arrow-right fa-2x"></i></a></p>
        </div>
        <div class="col-lg-6 px-0 text-center">       
           <img src="/img/pratiquant.png" srcset="/img/pratiquant@2x.png 1.5x" class="img-fluid" alt="Aplicacion My Coach">
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