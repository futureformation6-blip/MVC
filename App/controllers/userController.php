<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/helper/auth.php';
require_once __DIR__ . '/../models/userModel.php';

function users()
{
    global $con;

    $users = getAllUser();

    require __DIR__ . '/../views/usersView.php';
}

function createUsers()
{
    global $con;

    require __DIR__ . '/../views/create-userView.php';
}

function storeUsers()
{
    global $con;

    requireAdmin();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'] ?? '';
        $prenom = $_POST['prenom'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $role = $_POST['role'] ?? 'user';

        addUser($nom, $prenom, $email, $password, $role);

        $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
        $redirect = $basePath !== '' ? $basePath . '/users/list' : '/users/list';
        header('Location: ' . $redirect);
        exit();
    }
}
?>