<?php
require_once __DIR__ . '/../../config/config.php';

function addP($con, $idP, $nomP){

 
    $req = $con->prepare("INSERT INTO produit (idP, nomP) VALUES (:idP, :nomP)");
    $req->execute([
        ':idP' => $idP,
        ':nomP' => $nomP,
    ]);

    return $req->rowCount() === 1;
}

function getUser($con, $idP){
    $req = $con->prepare("SELECT * FROM produit WHERE idP = :idP");
    $req->execute([':idP' => $idP]);

    return $req->fetchAll(PDO::FETCH_ASSOC);
}

function getAllUsers($con) {
    $req = $con->query("SELECT * FROM produit");
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

function deleteUser($con, $idP) {
    $req = $con->prepare("DELETE FROM produit WHERE idP = :idP");
    $req->execute([':idP' => $idP]);

    return $req->rowCount() === 1;
}

?>