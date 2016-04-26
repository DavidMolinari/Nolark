<header>
  <nav>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <?php $pages = array("route.php", "cross.php", "piste.php", "enfants.php", "team.php", "nous-contacter.php");
    $noms = array("Route", "Cross", "Piste", "Enfants", "La team", "Nous contacter");
    $nbLiens = count($pages);
    for ($i=0; $i < $nbLiens; $i++)
    { ?>
        <li><a href="./pages/<?php echo $pages[$i]; ?>"><?php echo $noms[$i]; ?></a></li>
    <?php }
    ?>
  </ul>
  </nav>
</header>
