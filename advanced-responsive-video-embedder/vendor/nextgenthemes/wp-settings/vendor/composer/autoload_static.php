<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7757c621a0a6b25c5da2180b44378aa4
{
    public static $files = array (
        '47777597fbe681453e41ea4bf4ad9988' => __DIR__ . '/../..' . '/includes/WP/init.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7757c621a0a6b25c5da2180b44378aa4::$classMap;

        }, null, ClassLoader::class);
    }
}
