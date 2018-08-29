<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2a0ffdf9a6d11c8b34b6f223f986c07
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pixelarbeit\\Wordpress\\' => 22,
            'Pixelarbeit\\Http\\' => 17,
            'Pixelarbeit\\Cleverreach\\' => 24,
            'Pixelarbeit\\CF7Cleverreach\\' => 27,
        ),
        'O' => 
        array (
            'OAuth\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pixelarbeit\\Wordpress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Wordpress',
        ),
        'Pixelarbeit\\Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Http',
        ),
        'Pixelarbeit\\Cleverreach\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Cleverreach',
        ),
        'Pixelarbeit\\CF7Cleverreach\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'OAuth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/OAuth',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2a0ffdf9a6d11c8b34b6f223f986c07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2a0ffdf9a6d11c8b34b6f223f986c07::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}