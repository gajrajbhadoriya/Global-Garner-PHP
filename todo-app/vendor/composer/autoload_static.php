<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit810ea22a0077ac5ee35b2e7aea53165a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit810ea22a0077ac5ee35b2e7aea53165a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit810ea22a0077ac5ee35b2e7aea53165a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit810ea22a0077ac5ee35b2e7aea53165a::$classMap;

        }, null, ClassLoader::class);
    }
}