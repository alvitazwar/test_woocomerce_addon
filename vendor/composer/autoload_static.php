<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf2eb57d086d30c3d83cc9e4764f2be4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf2eb57d086d30c3d83cc9e4764f2be4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf2eb57d086d30c3d83cc9e4764f2be4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
