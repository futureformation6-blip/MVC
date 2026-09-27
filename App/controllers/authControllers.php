<?php
require_once __DIR__ .'/../models/userModel.php';


function showLoginForm() {
    require __DIR__ . '/../views/login.php';
}

function loginUser($iduser) {

    global $con;

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $users = getUserbyid($iduser);

    if (password_verify($password, $users ['password'])) {

       $_SESSION['user'] = [

            'id' => $users['id'],
            'nom' => $users['nom'],
            'prenom' => $users['prenom'],
            'email' => $users['email'],
            'role' => $users['role']

       ];
    }

}

function logoutUser() {
    session_destroy();
    header('Location: login.php');
    exit();
}




?>