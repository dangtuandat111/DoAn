<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe572ac43fc7cc1ebf86675f99cc2286
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Packages\\Server\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Packages\\Server\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe572ac43fc7cc1ebf86675f99cc2286::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe572ac43fc7cc1ebf86675f99cc2286::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe572ac43fc7cc1ebf86675f99cc2286::$classMap;

        }, null, ClassLoader::class);
    }
}
