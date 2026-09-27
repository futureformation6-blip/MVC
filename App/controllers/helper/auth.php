<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function isConnected() {
    return isset($_SESSION['user']);
}

function requirelogin() {
    if (!isConnected()) {
        $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
        $redirect = $basePath !== '' ? $basePath . '/login' : '/login';
        header('Location: ' . $redirect);
        exit();
    }
}

function idAdmin() {
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
}

function requireAdmin() {
    requirelogin();

    if (!idAdmin()) {
        http_response_code(403);
        echo 'Accès interdit. Vous devez être administrateur pour accéder à cette page.';
        exit();
    }
}
?>