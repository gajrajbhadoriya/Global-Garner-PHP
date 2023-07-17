<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit788336fcbfb70061e0b041d42eb1466a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit788336fcbfb70061e0b041d42eb1466a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit788336fcbfb70061e0b041d42eb1466a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit788336fcbfb70061e0b041d42eb1466a::$classMap;

        }, null, ClassLoader::class);
    }
}
