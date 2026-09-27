<?php
require_once __DIR__ . '/../../config/config.php';

function getAllUser()
{
    global $con;

    $req = $con->prepare("SELECT id, nom, prenom, email, role FROM users");

    $req->execute();

    return $req->fetchAll(PDO::FETCH_ASSOC);
}

function addUser($nom, $prenom, $email, $password, $role)
{
    global $con;

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users
            (nom, prenom, email, password, role)
            VALUES (:nom, :prenom, :email, :password, :role)";

    $req= $con->prepare($sql);

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':email', $email);
    $req->bindParam(':password', $password);
    $req->bindParam(':role', $role);

    $req->execute();
}

function getUserbyid($iduser)
{
    global $con;

    $sql = "SELECT * FROM users WHERE id = :iduser";
    $req = $con->prepare($sql);
    $req->bindParam(':iduser', $iduser);
    $req->execute();

    return $req->fetch(PDO::FETCH_ASSOC);
}

// login function Models


?>