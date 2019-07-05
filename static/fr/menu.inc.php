<nav class="navbar fixed-top navbar-dark navbar-expand-lg" id="nav">
  <a class="navbar-brand" href="/fr/"><img src="/img/logo-mycoach-sport<?php echo ($page == 'homepage') ? '-white' :'';?>.svg" alt="My Coach Sport"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-center justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item<?php echo ($page == 'apropos') ? ' active' :'';?>">
                <a class="nav-link" href="/fr/qui-sommes-nous/">À propos</a>
              </li>
              <li class="nav-item<?php echo ($page == 'solutions') ? ' active' :'';?>">
                <a class="nav-link" href="/fr/solutions/">Nos solutions</a>
              </li>
              <li class="nav-item<?php echo ($page == 'presse') ? ' active' :'';?>">
                <a class="nav-link" href="/fr/presse/">Presse</a>
              </li>
              <li class="nav-item<?php echo ($page == 'carriere') ? ' active' :'';?>">
                <a class="nav-link" href="/fr/carriere/">Carrière</a>
              </li>
               <li class="nav-item dropdown language">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="d-inline-block d-sm-none">Langue :</span> FR
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/fr/" lang="fr">Français</a>
                  <a class="dropdown-item" href="/en/" lang="en">English</a> 
                  <a class="dropdown-item" href="/es/" lang="es">Español</a>                                   
                  <!-- <a class="dropdown-item" href="/it/" lang="it">Italiano</a>-->
                </div>
              </li>  
            </ul>
          </div>
</nav>