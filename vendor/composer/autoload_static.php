<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bac172f4616bd076f12440851fa9472
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Baidu\\Aip\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Baidu\\Aip\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bac172f4616bd076f12440851fa9472::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bac172f4616bd076f12440851fa9472::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
