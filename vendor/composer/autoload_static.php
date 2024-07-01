<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit804070f1322f33ddfbdf4c2e0a29df45
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit804070f1322f33ddfbdf4c2e0a29df45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit804070f1322f33ddfbdf4c2e0a29df45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit804070f1322f33ddfbdf4c2e0a29df45::$classMap;

        }, null, ClassLoader::class);
    }
}
