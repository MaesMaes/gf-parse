<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1acc4d57f4cd762860c1db43de305bc
{
    public static $files = array (
        '3be245709e0849c2fd480c880a268502' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpQuery' => 
            array (
                0 => __DIR__ . '/..' . '/coderockr/php-query/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1acc4d57f4cd762860c1db43de305bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1acc4d57f4cd762860c1db43de305bc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd1acc4d57f4cd762860c1db43de305bc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
