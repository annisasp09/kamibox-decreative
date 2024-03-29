<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11b43e516ec4df819de340bd4f591a42
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit11b43e516ec4df819de340bd4f591a42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11b43e516ec4df819de340bd4f591a42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11b43e516ec4df819de340bd4f591a42::$classMap;

        }, null, ClassLoader::class);
    }
}
