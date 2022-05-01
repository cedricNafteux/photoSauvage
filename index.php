<?php
session_start();

use App\Controllers\UserController;
use App\Controllers\PhotoController;
use App\Controllers\CommentController;
use App\Controllers\MapController;

// spl_autoload_register(function ($classe) {

//     require_once $classe . '.php';

// });

require __DIR__ . '/vendor/autoload.php';

if (!isset($_SESSION['connected'])) {
    $_SESSION['connected'] = false;
}

$entity = filter_input(INPUT_GET, 'entity', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'list';

switch ($entity) {
    case 'user':
        $ctrl = new UserController();
        break;

    case 'photo':
        $ctrl = new PhotoController();
        break;

    case 'comment':
        $ctrl = new CommentController();
        break;

    case 'map':
        $ctrl = new MapController();
        break;

    default:
        $ctrl = new PhotoController();
        break;
}

$ctrl->execute($action);