<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita59b8de5faf18c1b0ef61106f86f643e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita59b8de5faf18c1b0ef61106f86f643e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita59b8de5faf18c1b0ef61106f86f643e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
