<?php
// Inclusion de Twig
include_once('Twig/Autoloader.php');
Twig_Autoloader::register();
try {
    $scriptName = filter_input(INPUT_SERVER, "SCRIPT_NAME");
            $pageActuelle = substr($scriptName, strrpos($scriptName, "/") + 1);
            if ($pageActuelle === "index.php") {
                $meh = "./";
            } else if ($pageActuelle === "cross.php") {
                $meh = "cross";
            } else if ($pageActuelle === "route.php") {
                $meh = "route";
            } else if ($pageActuelle === "enfants.php") {
                $meh = "enfants";
            } else if ($pageActuelle === "piste.php") {
                $meh = "piste";
            }
            
$cnx = new PDO('mysql:host=192.168.56.102;dbname=nolark', 'nolarkuser', 'nolarkpwd');
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$req .= ' INNER JOIN marque ON casque.marque=marque.id';
$req .= ' WHERE libelle = \''.$meh.'\'';

 $res = $cnx->prepare($req);
 $res->execute();
 $res->fetch(PDO::FETCH_OBJ);

 // Fermeture connexion
 unset($cnx);

 // Définition du répertoire vers les templates
 $loader = new Twig_Loader_Filesystem('../tpl');
  // Initialisation de l'environnement Twig
 $twig = new Twig_Environment($loader, array(
 'cache' => false,
 ));
 // Chargemement du template
 $template = $twig->loadTemplate('casques.twig');

 // Affectation des variables du template
 echo $template->render(array(
 'casques' => $res
 ));
} catch (PDOException $e) {
 echo 'Erreur: ' . $e->getMessage();
}
?>