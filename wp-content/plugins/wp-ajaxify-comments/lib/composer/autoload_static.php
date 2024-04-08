<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b6a2f1aacaf6ca347401494bd0851a0
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DLXPlugins\\WPAC\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DLXPlugins\\WPAC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b6a2f1aacaf6ca347401494bd0851a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b6a2f1aacaf6ca347401494bd0851a0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9b6a2f1aacaf6ca347401494bd0851a0::$classMap;

        }, null, ClassLoader::class);
    }
}