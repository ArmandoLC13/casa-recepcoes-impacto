<?php

// Bootstrap básico do Laravel
class SimpleApp {
    public function make($abstract) {
        if ($abstract === 'Illuminate\Contracts\Console\Kernel') {
            return new class {
                public function handle($input, $output) {
                    echo "Laravel Artisan Console\n";
                    echo "Comandos disponíveis:\n";
                    echo "  serve    Inicia o servidor de desenvolvimento\n";
                    echo "  test     Executa os testes\n";
                    return 0;
                }
                
                public function terminate($input, $status) {
                    // Cleanup
                }
            };
        }
        return null;
    }
}

return new SimpleApp();