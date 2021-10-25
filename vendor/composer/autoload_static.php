<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ad5980b485eb5a386557c4132f16af2
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cliwork\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cliwork\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ad5980b485eb5a386557c4132f16af2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ad5980b485eb5a386557c4132f16af2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ad5980b485eb5a386557c4132f16af2::$classMap;

        }, null, ClassLoader::class);
    }
}
