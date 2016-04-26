<!doctype html>
<html lang="fr-FR">
<?php
include '../includes/head.php' ?>
    <body>
      <header>
        <nav>
          <ul>
            <li><a href="../index.php">Accueil</a></li>
              <?php
              include '../includes/headerPages.php';
               ?>
        </ul>
        </nav>
        ?>
      </header>
        <h1>Nous localiser :</h1>


        <article id="geoloc">
            <img src="http://maps.googleapis.com/maps/api/staticmap?size=600x950&markers=icon:http://goo.gl/NbWy0j|orléans, France|Toulon, France|Brest, France| Lille, France|Fès, maroc&key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Carte Google Mapsstatique avec le pays de Nolark" />
            <img src="http://maps.googleapis.com/maps/api/staticmap?size=310x310&amp;markers=icon:http://goo.gl/NbWy0j|Brest, France&amp;zoom=11&amp;key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Carte Google Maps statique avec emplacement de Nolark" />
            <img src="http://maps.googleapis.com/maps/api/staticmap?size=310x310&amp;markers=icon:http://goo.gl/NbWy0j|Lille, France&amp;zoom=11&amp;key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Carte Google Maps statique avec emplacement de Nolark" />

            <img class="down" src="http://maps.googleapis.com/maps/api/staticmap?size=310x310&amp;markers=icon:http://goo.gl/NbWy0j|Orléans, France&amp;center=Orléans, France&zoom=11&amp;key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Carte Google Maps statique avec emplacement de Nolark" />
            <img class="down" src="http://maps.googleapis.com/maps/api/staticmap?size=310x310&amp;markers=icon:http://goo.gl/NbWy0j|Fès, Maroc&amp;center=Fés, Maroc;&zoom=11&amp;key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Carte Google Maps statique avec emplacement de Nolark" />
            <img class="down" src="http://maps.googleapis.com/maps/api/staticmap?size=310x310&amp;markers=icon:http://goo.gl/NbWy0j|Toulon, France&amp;center=Toulon, France;&zoom=11&amp;key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Carte Google Maps statique avec emplacement de Nolark" />


            <img id="streetview" src="http://maps.googleapis.com/maps/api/streetview?size=950x400&amp;location=43.1212841,5.9407507&amp;heading=260&amp;pitch=19&amp;fov=80&amp;key=AIzaSyDh9KulsuezlL3J8OEcuq2u-wLHb2MH3S8" alt="Street View du lycée Bonaparte" />

        </article>
        <br />

        <div id="vide"></div>
        <?php
        include '../includes/footer.php';
        ?>

    </body>
</html>
