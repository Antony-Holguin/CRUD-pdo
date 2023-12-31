<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7609f74186ade6648680a7dd8d562725
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pdo\\Aplicacion\\Models\\' => 22,
            'Pdo\\Aplicacion\\Controllers\\' => 27,
            'Pdo\\Aplicacion\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pdo\\Aplicacion\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Models',
        ),
        'Pdo\\Aplicacion\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
        'Pdo\\Aplicacion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7609f74186ade6648680a7dd8d562725::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7609f74186ade6648680a7dd8d562725::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7609f74186ade6648680a7dd8d562725::$classMap;

        }, null, ClassLoader::class);
    }
}
