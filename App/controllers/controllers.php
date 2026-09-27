<?php

require_once __DIR__ .'/../models/models.php';

$produit = [];
$message = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['enregistrer'])){

        $id = trim($_POST['idP'] ?? '');
        $nom = trim($_POST['nomP'] ?? '');

        if ($id === '' || $nom === '') {
            $message = 'Les champs id et nom sont obligatoires.';
        } else {
            $message = addP($con, $id, $nom)
                ? 'Produit enregistré.'
                : "Le produit n'a pas été enregistré.";
        }

    }
    if (isset($_POST['afficher'])){

        $id = trim($_POST['idP'] ?? '');

        if ($id !== '') {
            $produit = getUser($con, $id);
        } else {
            $message = 'Saisissez un identifiant pour rechercher un produit.';
        }
    }
    if (isset($_POST['supprimer'])){

        $id = trim($_POST['idP'] ?? '');

        if ($id !== '') {
            $message = deleteUser($con, $id)
                ? 'Produit supprimé.'
                : "Le produit n'a pas été supprimé.";
        } else {
            $message = 'Saisissez un identifiant pour supprimer un produit.';
        }
    }
}



require __DIR__ . '/../views/views.php';
?>