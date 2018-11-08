<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita413b213982ef8acb9817a92329c7ad2
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '801c31d8ed748cfa537fa45402288c95' => __DIR__ . '/..' . '/psy/psysh/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'XdgBaseDir\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psy\\' => 4,
            'PhpParser\\' => 10,
            'Phalcon\\' => 8,
        ),
        'J' => 
        array (
            'JakubOnderka\\PhpConsoleHighlighter\\' => 35,
            'JakubOnderka\\PhpConsoleColor\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XdgBaseDir\\' => 
        array (
            0 => __DIR__ . '/..' . '/dnoegel/php-xdg-base-dir/src',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psy\\' => 
        array (
            0 => __DIR__ . '/..' . '/psy/psysh/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Phalcon\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalcon/devtools/scripts/Phalcon',
        ),
        'JakubOnderka\\PhpConsoleHighlighter\\' => 
        array (
            0 => __DIR__ . '/..' . '/jakub-onderka/php-console-highlighter/src',
        ),
        'JakubOnderka\\PhpConsoleColor\\' => 
        array (
            0 => __DIR__ . '/..' . '/jakub-onderka/php-console-color/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita413b213982ef8acb9817a92329c7ad2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita413b213982ef8acb9817a92329c7ad2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
