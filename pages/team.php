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
        <br />
        <h1>Nous reconnaître :</h1>
        <article id="reco">
            <ul id="teammap">
                <li><a id="membre1" class="homme" title="Charlie, 23 ans, spécialiste route" href="#"></a></li>
                <li><a id="membre2" class="femme" title="Samantha, 21 ans, spécialiste piste" href="#"></a></li>
                <li><a id="membre3" class="homme" title="Billy, 21 ans, spécialiste cross" href="#"></a></li>
                <li><a id="membre4" class="homme" title="Daniel, 19 ans, spécialiste enfants" href="#"></a></li>
                <li><a id="membre5" class="femme" title="Laura, 20 ans, spécialiste accidentologie" href="#"></a></li>
            </ul>
        </article>
        <br />
        <h1>Nous suivre :</h1>
        <article id="twitter">
            <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/jgil83000" data-widget-id="407988600207200256" data-tweet-limit="5" data-border-color="#b21617">Tweets de @jgil83000</a>
            <script>!function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
        </article>
        <div id="vide"></div>
        <?php
        include '../includes/footer.php';
        ?>
    </body>
</html>
