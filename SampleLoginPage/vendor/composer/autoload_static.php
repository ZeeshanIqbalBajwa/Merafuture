<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita652c5f25611e3e7f807828ae0c6dd54
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita652c5f25611e3e7f807828ae0c6dd54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita652c5f25611e3e7f807828ae0c6dd54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita652c5f25611e3e7f807828ae0c6dd54::$classMap;

        }, null, ClassLoader::class);
    }
}
