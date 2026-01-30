<?php

// Autoloader básico para o Laravel
spl_autoload_register(function ($class) {
    // Converte namespace para caminho de arquivo
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Carrega classes do Laravel se existirem
$appPath = __DIR__ . '/../app';
if (is_dir($appPath)) {
    foreach (glob($appPath . '/**/*.php', GLOB_BRACE) as $file) {
        require_once $file;
    }
}