<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbfd41810e569e5729113fc867118bf3
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vsn\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vsn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/build',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbfd41810e569e5729113fc867118bf3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbfd41810e569e5729113fc867118bf3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
