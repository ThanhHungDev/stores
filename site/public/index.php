<?php
function coreAutoload($class)
{
    $root = '../core/';
    $prefix = 'Core\\';

    // remove prefix
    $classWithoutPrefix = preg_replace('/^' . preg_quote($prefix) . '/', '', $class);
    // Thay thế \ thành /
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';

    $path = $root . $file;
    if (file_exists($path)) {
        require_once $path;
    }
}
spl_autoload_register('coreAutoload');

include_once "../routes/router.php";