
<div class="navbar">
    <!-- <h1>Navigation <br>Utilisateurs</h1> -->
    <ul>
        <?php if($_SESSION["admin"]): ?>
        <li><a href="/inscription">Créer un compte</a></li>
        <li><a href="/liste">Liste des Utilisateurs</a></li>
        <li><a href="/maj">Mise à Jour</a></li>
        <li><a href="/suppr">Supprimer un compte</a></li>
        <?php endif; ?>
        <li><a href="/profil">Profil</a></li>
    </ul>
</div>

    
