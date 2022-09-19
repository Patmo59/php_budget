<?php
if(session_status()=== PHP_SESSION_NONE)
session_start();
# On inclut nos routes :
#Permet de récupéré l'url tapé par l'utilisateur
require "./routes.php";

# Supprime les caractères qui n'ont rien à faire dans une url
$url = filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL);
/**
 * les possibles informations en get ne nous intéresse pas. Nous allons donc explodé
 * l'url (en tableau) pour ne récurérer que ce qui se trouve avant le "?"
 */
$url = explode("?", $url)[0]; // [0];=>la première partie du chemin nous intéresse
// on retire les "/" se trouvant au début ou/et a la fin de l'url
$url = trim($url, "/");
/**
 * Si notre url existe en tant que Clef de notre tableau "ROUTES"
 */
if(array_key_exists($url, ROUTES)){

    require "../pages/" .ROUTES[$url];
}else{

    require "../pages/service/404.php";
}
?>