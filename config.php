<?php

spl_autoload_register(function ($class_name) {

    $pastaClasses = 'class/';

    $possiveisCaminhos = [
        $pastaClasses,
        $pastaClasses . 'models/',
        $pastaClasses . 'controllers/',
        $pastaClasses . 'views/',

    ];

    foreach ($possiveisCaminhos as $pasta) {
        $nomeArquivo = $pasta . $class_name . '.php';
        if (file_exists($nomeArquivo)) {
            require_once $nomeArquivo;
            break;
        }
    }
});
