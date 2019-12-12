<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75b886b875f1b36ac126a4ba0f4ee5ca
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75b886b875f1b36ac126a4ba0f4ee5ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75b886b875f1b36ac126a4ba0f4ee5ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}