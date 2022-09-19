<?php
$title = "Budget - Mise a jour ";
$headerTitle = " Mise à jour ";
require __DIR__."/../../ressources/_header.php";
$mainClass = "includeNavbar";
require __DIR__."/../../ressources/_navbar.php"; 
?>


<?php
if($user):
?>
<form action="" method="post">
<div class="container">
    <!-- username -->
    <section>
    <label for="username">Nom d'utilisateur :</label>
    <input 
        type="text" 
        name="username" 
        id="username" 
        value="<?php echo $user["username"] ?>">
    <span class="error"><?php echo $error["username"]??"" ?></span>
    <br>
    </section>
    <!-- email -->
    <section>
    <label for="email">Adresse email :</label>
    <input 
        type="email" 
        name="email" 
        id="email" 
        value="<?php echo $user["email"] ?>"
    >
    <span class="error"><?php echo $error["email"]??"" ?></span>
    <br>
    </section>
    <!-- password -->
    <section>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    <span class="error"><?php echo $error["password"]??"" ?></span>
    <br>
    <input type="submit" value="Mettre à jour" name="update">
    </section>
    <!-- password verify -->
    <!-- <label for="passwordBis">Confirmation du mot de passe :</label>
    <input type="password" name="passwordBis" id="passwordBis">
    <span class="error"><?php echo $error["passwordBis"]??"" ?></span>
    <br> -->
</form>
<?php else: ?>
    <p>Aucun utilisateur trouvé.</p>
<?php
endif;
require __DIR__."/../../ressources/_footer.php";
?>