<header>
    <nav>
        <ul>
            <?php
            // Sommes-nous sur l'index ?
            $scriptName = filter_input(INPUT_SERVER, "SCRIPT_NAME");
            $pageActuelle = substr($scriptName, strrpos($scriptName, "/") + 1);
            if ($pageActuelle === "index.php") {
                $dirIndex = "./";
                $dirPages = "./pages/";
            } else {
                $dirIndex = "../";
                $dirPages = "./";
            }
            // Construction d'un tableau associatif contenant les correspondances
            // noms de pages / liens de la barre de navigation
            $pages = array(
                "Accueil" => $dirIndex . "index.php",
                "Route" => $dirPages . "route.php",
                "Cross" => $dirPages . "cross.php",
                "Piste" => $dirPages . "piste.php",
                "Enfants" => $dirPages . "enfants.php",
                "La team" => $dirPages . "team.php",
                "Nous contacter" => $dirPages . "nous-contacter.php"
            );
            // Affichage des liens de la barre de navigation
            foreach ($pages as $nom => $url) {
                echo "\n", '<li><a href="', $url, '">', $nom, '</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
