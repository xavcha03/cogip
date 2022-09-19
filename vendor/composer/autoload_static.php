<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce4b68c99f71fdb45190f551f61377ab
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce4b68c99f71fdb45190f551f61377ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce4b68c99f71fdb45190f551f61377ab::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitce4b68c99f71fdb45190f551f61377ab::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitce4b68c99f71fdb45190f551f61377ab::$classMap;

        }, null, ClassLoader::class);
    }
}
