<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61767622746da3c7c2ce414f19d427de
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Calendar',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61767622746da3c7c2ce414f19d427de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61767622746da3c7c2ce414f19d427de::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
