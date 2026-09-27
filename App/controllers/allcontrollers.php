<?php

require_once __DIR__ .'/../models/models.php';

$produit = [];
function afficherAllProduits() {

    global $con;

    $produits = getAllUsers($con);

    require __DIR__ . '/../views/allviews.php';
}


?>