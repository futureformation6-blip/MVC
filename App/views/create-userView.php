
<?php $pageTitle = 'Tous les utilisateurs'; require __DIR__ . '/layout/header.php'; ?>
    <h1>Crée un utilisateur</h1>
    <form action="<?= htmlspecialchars($appUrl, ENT_QUOTES, 'UTF-8') ?>/users" method="POST">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="role">Rôle:</label>
            <select id="role" name="role">
                <option value="user">Utilisateur</option>
                <option value="admin">Administrateur</option>
            </select>
        </div>
        <button type="submit">Créer l'utilisateur</button>
    </form>
<?php require __DIR__ . '/layout/footer.php'; ?>


