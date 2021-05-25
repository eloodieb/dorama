<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb8349eab9ce0d89d78bcb12d141da1c
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'ludk\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ludk\\' => 
        array (
            0 => __DIR__ . '/..' . '/ludonkey/tinymvc',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
    );

    public static $classMap = array (
        'Controller\\AuthController' => __DIR__ . '/../..' . '/src/Controller/AuthController.php',
        'Controller\\ContentController' => __DIR__ . '/../..' . '/src/Controller/ContentController.php',
        'Controller\\HomeController' => __DIR__ . '/../..' . '/src/Controller/HomeController.php',
        'Entity\\Drama' => __DIR__ . '/../..' . '/src/Entity/Drama.php',
        'Entity\\Genre' => __DIR__ . '/../..' . '/src/Entity/Genre.php',
        'Entity\\User' => __DIR__ . '/../..' . '/src/Entity/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb8349eab9ce0d89d78bcb12d141da1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb8349eab9ce0d89d78bcb12d141da1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb8349eab9ce0d89d78bcb12d141da1c::$classMap;

        }, null, ClassLoader::class);
    }
}
