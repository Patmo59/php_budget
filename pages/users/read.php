<?php
$title = "Budget - Liste ";
$headerTitle = " Listes des Utilisateurs ";
require __DIR__."/../../ressources/_header.php";
$mainClass = "includeNavbar";
require __DIR__."/../../ressources/_navbar.php"; 
?>
<?php
if($user):
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>action</th>
            </tr>
        </thead>
        <!-- Pour chacun des utilisateurs, on ajoute une ligne -->
        <?php foreach($user as $row):?>
            <tr>
                <td><?php echo $row["idUser"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td>
                    <a href="./exercice/blog/read.php?id=<?php echo $row["idUser"] ?>">Voir</a>
                    <!-- Si la ligne correspond à l'utilisateur connecté, alors on affiche ces liens -->
                    <?php if(isset($_SESSION["idUser"]) && $_SESSION["idUser"] === $row["idUser"]): ?>
                        &nbsp;|&nbsp;
                        <a href="./03-update.php?id=<?php echo $row["idUser"] ?>">Editer</a>
                        &nbsp;|&nbsp;
                        <a href="./04-delete.php?id=<?php echo $row["idUser"] ?>">Supprimer</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <p>Aucun utilisateur trouvé.</p>
<?php
endif; 
require_once __DIR__."/../../ressources/_footer.php";
?>








