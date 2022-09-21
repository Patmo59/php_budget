<?php
// session_start();
require __DIR__."/../../service/_isloggedV2.php";
isLogged(false, "./");

$username = $email = $password = "";
$error = [];
$regexPass = 
"/^(?=.*[!?@#$%^&*+-])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{6,}$/";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inscription"]))
{
    // on inclu notre service de connexion
    require __DIR__."/../../service/_pdo.php";
    // On se connecte à notre BDD.
    $pdo = connexionPDO();
    // username :
    if(empty($_POST["username"])){
        $error["username"] = "veuillez saisir un nom d'utilisateur";
    }else{
        $username = cleanData($_POST["username"]);
        /* 
            En PHP, on utilisera "preg_match" pour tester si 
            un string correspond à une regex.
        */
        if(!preg_match("/^[a-zA-Z' -]{2,25}$/", $username)){
            $error["username"] = "Veuillez n'utiliser que des lettres.";
        }
    }
    // Email:
    if(empty($_POST["email"])){
        $error["email"] = "Veuillez saisir un email";
    }else{
        $email = cleanData($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error["email"] = "Veuillez saisir un email valide";
        }
        /* 
            On souhaite que nos utilisateurs n'ai qu'un seul compte par email.
            Pour cela on va vérifier si cet email est déjà enregistré en BDD.

            Ici on va utiliser ce qu'on appelle une requête préparée. 
            à chaque fois que l'on rentre une information venant d'un utilisateur en BDD.
            Nous devons utiliser une requête préparé, cela permet de séparer les valeurs de l'utilisateur de la requête en elle même.
            Grâce à cela nous évitons les injections SQL.
        */
        $sql = $pdo->prepare("SELECT * FROM users WHERE email = :em");
        $sql->execute(["em"=>$email]);
        $resultat = $sql->fetch();
        /* 
            Si on obtient un résultat, alors l'utilisateur existe déjà en BDD.
        */
        if($resultat){
            $error["email"] = "Cet email est déjà enregistré.";
        }
    }
    // password
    if(empty($_POST["password"])){
        $error["password"] = "Veuillez saisir un mot de passe";
    }else{
        $password = cleanData($_POST["password"]);
        if(!preg_match($regexPass, $password)){
            $error["password"] = "Veuillez saisir un mot de passe valide";
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
        }
    }
    // envoi des données.
    if(empty($error)){
        $sql = $pdo->prepare("INSERT INTO users(username, email, password) VALUES(?,?)");
        /* 
            à la place d'un placeholder nommé comme précédement, Je peux utiliser des "?". Dans ce cas là, ce ne sera pas un tableau associatif que je donnerais mais un tableau classique. Seulement, ici l'ordre est très important.
        */
        $sql->execute([$username, $email, $password]);
        header("Location: /");
        die;
    }
}
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
