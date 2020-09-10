<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit870b01ea0ee6b8c50832aaeddeb21f9e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'B' => 
        array (
            'BackupManager\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'BackupManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/backup-manager/backup-manager/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit870b01ea0ee6b8c50832aaeddeb21f9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit870b01ea0ee6b8c50832aaeddeb21f9e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}