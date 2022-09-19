<?php  //! A verifier sur la partie redirect 
if(session_status()=== PHP_SESSION_NONE)
session_start();
function isLogged( bool $logged= true, string $redirect="/") // declaration de la fct islogged (en parametre true et la valeur $redirect à "/") //! redirect ?
{ 
    if($logged){
        if(!isset($_SESSION["expire"])|| time()>$_SESSION["expire"]){   //    si la vble expire est "déclarée et non nulle" ou le tps déclaré de la vble "expire" est > au tps defini //! où?
        unset($_SESSION); // destruction de la vble 
        session_destroy();  // destruction de toutes les données enregistrées dans la session
        setcookie("PHPSESSID","",time()-3600);      //envoi d'un cookie d'identification, sans nom, tps -3600 secondes 
        }
        if(!isset($_SESSION["logged"])|| $_SESSION["logged"] !==true){ // si la session n'(est pas loggée ou ou n'est pas true)
            header("Location : ".$redirect);// je redirige vers $redidrect cad ("/" la racine du dossier=>index //! )
            exit;
        }
    }
    else{
        if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        header("Location: ".$redirect);
        }
    }
}