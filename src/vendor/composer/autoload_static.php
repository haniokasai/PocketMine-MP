<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita46fbdda98bb3861127cfa8866b87174
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
        1 => __DIR__ . '/../..' . '/src/spl',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInita46fbdda98bb3861127cfa8866b87174::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
