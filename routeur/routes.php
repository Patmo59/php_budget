<?php
// ! le root.php par defaut refirige vers le dossiers "pages"
define("ROUTES", [
"" => "../index.php",
"accueil" => "../index.php",
"php_Budget" => "../index.php",
"inscription"=> "./users/create.php",
"selogger"=> "./service/connexion.php",
//utilisateur
"liste"=> "./users/read.php",
"maj"=> "./users/update.php",
"profil"=> "./users/profil.php",
"suppr"=> "./users/delete.php",
"deconnexion"=> "./service/deconnexion.php",
//Page Aide
"aide"=> "../aide/_aidePresentation.php", // ! donc il faut un "."supplémentaire pour acceder à "aide"
//depenses
"depense" => "./depenses/accueilDep.php",
]);


?>