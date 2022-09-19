<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BUDGET <?php  echo $title??""?></title>
    <!-- Depuis le routeur -->
    <!-- <link rel="stylesheet" href="../assets/styles/index.css"> -->
    <!-- Depuis la racine -->
    <!-- <link rel="stylesheet" href="/assets/styles/index.css"> -->
</head>
<body>
<header>
        <h1>Budget - <?php echo $headerTitle?? "Budget" ?></h1>
</header> 
<main class="<?php echo $mainClass??"" ?>">
<?php //! a revoir
// if(isset($headerTitle)){
//     switch(isset($headerTitle)){
//         case 'inscription':
//             require __DIR__.$import;
//             break;
//         case 'liste':
//             require __DIR__.$import;
//             break;
//         case 'maj':
//             require __DIR__.$import;
//             break;
//         case 'profil':
//             require __DIR__.$import;
//             break;
//     }
// }

// if($headerTitle == "inscription"){
//     require __DIR__."/../pages/users/create.php";
// }
// if($headerTitle == "liste"){
//     require __DIR__."/../pages/users/read.php";
// }
// if($headerTitle == "maj"){
//     require __DIR__."/../pages/users/update.php";
// }
// if($headerTitle == "ptofil"){
//     require __DIR__."/../pages/users/profil.php";
// }


?>