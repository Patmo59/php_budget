<?php

$title = "Budget - Créer un compte";
$headerTitle = " Créer un compte ";
require __DIR__."/../../ressources/_header.php";
$mainClass = "includeNavbar";
require __DIR__."/../../ressources/_navbar.php";
$import= "/../../ressources/_create.php";
?>
<form action="" method="POST">
    <div class="container">
        <!-- username -->
        <!-- <section>
            <label for="username"> Nom d'utilisateur :</label>
            <input type="text" id="username" name="username " required>
            <span class="error"><?php echo $error["username"]??"" ?></span>
            <br>
        </section> -->
        <!-- email -->
        <section>
            <label for="email">Email :</label>
            <input type="text" id="email " name="email " required>
            <span class="error"><?php echo $error["email"]??""?></span>
            <br>       
        </section>
        <!-- password -->
        <section>
            <label for="password"> Mot de Passe :</label>
            <input type="password" id="password" name="pass" required>
            <span class="error"><?php echo $error["password"]??""?></span>
            <br>
        </section>
        <!-- passport verifiy -->
        <section>
            <label for="passwordBis"> Confirmation du mot de Passe :</label>
            <input type="password" id="passwordBis " name="passwordBis" required>
            <span class="error"><?php echo $error["passwordBis"]??""?></span>
            <br>
            <input type="submit" value="Inscription" name = "inscription" id="inscription" >
        </section>
    </div>
</form>
<?php
require __DIR__."/../../ressources/_footer.php";
?>
