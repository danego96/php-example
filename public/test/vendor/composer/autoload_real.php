<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0554a6ea4d4558d80a38fa14d7296afd
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

        spl_autoload_register(array('ComposerAutoloaderInit0554a6ea4d4558d80a38fa14d7296afd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0554a6ea4d4558d80a38fa14d7296afd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0554a6ea4d4558d80a38fa14d7296afd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
