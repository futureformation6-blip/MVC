<?php $pageTitle = 'Tous les utilisateurs'; require __DIR__ . '/layout/header.php'; ?>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
<?php require __DIR__ . '/layout/footer.php'; ?>