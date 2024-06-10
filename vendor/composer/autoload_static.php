<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a42dfc73d1d7569ace259ef0ff8b4bb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a42dfc73d1d7569ace259ef0ff8b4bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a42dfc73d1d7569ace259ef0ff8b4bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a42dfc73d1d7569ace259ef0ff8b4bb::$classMap;

        }, null, ClassLoader::class);
    }
}