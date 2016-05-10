<?php
            $scriptName = filter_input(INPUT_SERVER, "SCRIPT_NAME");
            $pageActuelle = substr($scriptName, strrpos($scriptName, "/") + 1);
            if ($pageActuelle === "index.php") {
                $meh = "./";
            } else if ($pageActuelle === "cross.php") {
                $meh = "cross";
            } else if ($pageActuelle === "route.php") {
                $meh = "route";
            } else if ($pageActuelle === "enfant.php") {
                $meh = "enfant";
            } else if ($pageActuelle === "piste.php") {
                $meh = "piste";
            }

            
$cnx = new PDO('mysql:host=192.168.56.102;dbname=nolark', 'nolarkuser', 'nolarkpwd');
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$req .= ' INNER JOIN marque ON casque.marque=marque.id';
$req .= ' WHERE libelle = \''.$meh.'\'';


$res = $cnx->query($req);

 while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
 echo '<article>';
 echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
 '" alt="', $ligne->modele, '" />';
 echo '<p class="prix">',$ligne->prix, '€', '</p>';
echo '<p class="marque">', $ligne->nom, '</p>';
echo '<p class="modele">', $ligne->modele, '</p>';
echo '<p class=" classement classement', $ligne->classement, '"></p>';

 echo '</article>';
 }
