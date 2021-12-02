<?php

spl_autoload_register(function (string $className) {
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Exceptions' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }

    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'sql' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'User' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'User' . DIRECTORY_SEPARATOR . 'Authentification' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    return false;
});