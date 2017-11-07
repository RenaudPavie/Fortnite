<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img id="banniere" src="img/LogoFortnite.jpg" alt="banniere Fortnite"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li  class="nav-item active">    
        <a <?php echo $accueilON ?> class="nav-link" href="index.php?page=accueil">Accueil <span class="sr-only">(current)</span></a>
      </li>
 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sauver le monde
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?page=modeSurvie#trailer">Trailer</a>
          <a class="dropdown-item" href="index.php?page=modeSurvie#presentation">Présentation</a>
          <a class="dropdown-item" href="index.php?page=modeSurvie#modes">Modes de jeu</a>
        </div>
      </li>     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Battle Royale
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?page=modeBattleRoyal#Trailer">Trailer</a>
          <a class="dropdown-item" href="index.php?page=modeBattleRoyal#principe">Principe du mode</a>
          <a class="dropdown-item" href="index.php?page=modeBattleRoyal#armes">Les armes</a>
          <a class="dropdown-item" href="index.php?page=modeBattleRoyal#loot">Les loots&fonctionnalitées</a>
          <a class="dropdown-item" href="index.php?page=modeBattleRoyal#survivre">Comment survivre ?</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?page=contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>