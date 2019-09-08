<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita70968b3dc159f8038f75f604d5efa22
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita70968b3dc159f8038f75f604d5efa22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita70968b3dc159f8038f75f604d5efa22::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
