<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf778b75a20c43fe3cdc43916b105ccb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sonata\\GoogleAuthenticator\\' => 27,
        ),
        'G' => 
        array (
            'Google\\Authenticator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sonata\\GoogleAuthenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
        'Google\\Authenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf778b75a20c43fe3cdc43916b105ccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf778b75a20c43fe3cdc43916b105ccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf778b75a20c43fe3cdc43916b105ccb::$classMap;

        }, null, ClassLoader::class);
    }
}