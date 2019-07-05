<!doctype html>
<html lang="fr">
<head>
  <?php include('head.inc.php'); ?>

  <title>My Coach Vélo by FFC</title>
</head>
<body id="apropos">
  <header class="container-fluid">
    <div class="container p-0">
        <?php $page = 'apropos'; include('menu.inc.php'); ?>
    </div>
    
  </header>
  <main class="container">
    <div class="row"> 
      <div class="col col-lg-8 offset-lg-2">       
        <h2 class="my-5 py-3 text-center">Votre inscription à la newsletter My Coach Vélo est enregistrée.</h2>
      </div>
    </div>
  </main>
  

<?php include('footer.inc.php'); ?>
<?php include('foot.inc.php'); ?>
<script>
$('html,body').animate({
  scrollTop: $(window.location.hash).offset().top
});
</script>
</body>
</html>