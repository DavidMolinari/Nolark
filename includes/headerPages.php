<?php $pages = array("route.php", "cross.php", "piste.php", "enfants.php", "team.php", "nous-contacter.php");
    $noms = array("Route", "Cross", "Piste", "Enfants", "La team", "Nous contacter");
    $nbLiens = count($pages);
    for ($i=0; $i < $nbLiens; $i++)
    { ?>
        <li><a href=""<?php echo $pages[$i]; ?>"><?php echo $noms[$i]; ?></a></li>
    <?php }
    ?>
