<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11dfe03470f3fbad7ff5eb807941cf5e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11dfe03470f3fbad7ff5eb807941cf5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11dfe03470f3fbad7ff5eb807941cf5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11dfe03470f3fbad7ff5eb807941cf5e::$classMap;

        }, null, ClassLoader::class);
    }
}
