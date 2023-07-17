<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit788336fcbfb70061e0b041d42eb1466a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit788336fcbfb70061e0b041d42eb1466a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit788336fcbfb70061e0b041d42eb1466a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit788336fcbfb70061e0b041d42eb1466a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
