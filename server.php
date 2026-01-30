<?php
// Servidor de desenvolvimento simples
$host = '127.0.0.1';
$port = 8000;

echo "Servidor Laravel iniciado em http://{$host}:{$port}\n";
echo "Pressione Ctrl+C para parar\n\n";

// Inicia o servidor built-in do PHP
$command = "php\\php.exe -S {$host}:{$port} -t public";
system($command);