<?php

spl_autoload_register(function (string $className) {
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'exception' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }

    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'mysql' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    $class_file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'authentication' . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($class_file)) {
        require_once $class_file;
        return true;
    }
    return false;
});