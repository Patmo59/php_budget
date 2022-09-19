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
    <link rel="stylesheet" href="/assets/styles/index.css">
</head>
<body>
<header>
        <h1>Budget - <?php echo $headerTitle?? "Aide" ?></h1>
</header>
<main class="<?php echo $mainClass??"" ?>">
