<?php
return
[
    // l'hebergeur de votre BDD
    "host" => "localhost",
    // Le nom de la BDD à laquelle on veut se connecter
    "database" => "budget1",
    // l'username de connexion
    "user"=>"root",
    // le password de connexion
    "password"=>"",
    // le set de caractère utilisé par la BDD
    "charset"=>"utf8mb4",
    "options"=>[
    // mode d'affichage des erreurs.
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
    ]
];
?>