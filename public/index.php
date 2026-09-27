<?php
require __DIR__ . '/../config/config.php';

$scriptname = $_SERVER['SCRIPT_NAME'];
$scripturi = $_SERVER['REQUEST_URI'];

$basePath = rtrim(str_replace('\\', '/', dirname($scriptname)), '/');
$route = parse_url($scripturi, PHP_URL_PATH) ?: '/';

if ($basePath !== '' && str_starts_with($route, $basePath)) {
    $route = substr($route, strlen($basePath)) ?: '/';
}

$route = rtrim($route, '/') ?: '/';

switch ($route) {
    case '/':
    case '/utilisateur':
        require __DIR__ . '/../App/controllers/controllers.php';
        break;

    case '/login':
        require __DIR__ . '/../App/controllers/authControllers.php';
        showLoginForm();
        break;

    case '/allproduit':
        require __DIR__ . '/../App/controllers/allcontrollers.php';
        afficherAllProduits();
        break;

    case '/users':
        require __DIR__ . '/../App/controllers/userController.php';u
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            storeUsers();
        } else {
            users();
        }
        break;

    case '/users/create':
        require __DIR__ . '/../App/controllers/userController.php';
        createUsers();
        break;

    case '/users/list':
        require __DIR__ . '/../App/controllers/userController.php';
        users();
        break;

    default:
        http_response_code(404);
        echo 'Page non trouvé';
        break;
}
?>