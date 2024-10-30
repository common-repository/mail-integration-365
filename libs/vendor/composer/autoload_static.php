<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf024abbddc31c1a02fe6fe0792fd09b1
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '_PhpScoper99e9e79e8301\\TheNetworg\\OAuth2\\Client\\' => 48,
            '_PhpScoper99e9e79e8301\\Psr\\Http\\Message\\' => 40,
            '_PhpScoper99e9e79e8301\\Psr\\Http\\Client\\' => 39,
            '_PhpScoper99e9e79e8301\\League\\OAuth2\\Client\\' => 44,
            '_PhpScoper99e9e79e8301\\GuzzleHttp\\Psr7\\' => 39,
            '_PhpScoper99e9e79e8301\\GuzzleHttp\\Promise\\' => 42,
            '_PhpScoper99e9e79e8301\\GuzzleHttp\\' => 34,
            '_PhpScoper99e9e79e8301\\Firebase\\JWT\\' => 36,
            '_PhpScoper99e9e79e8301\\Classes\\Mail_Integration_365\\' => 52,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '_PhpScoper99e9e79e8301\\TheNetworg\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/thenetworg/oauth2-azure/src',
        ),
        '_PhpScoper99e9e79e8301\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        '_PhpScoper99e9e79e8301\\Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        '_PhpScoper99e9e79e8301\\League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        '_PhpScoper99e9e79e8301\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        '_PhpScoper99e9e79e8301\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        '_PhpScoper99e9e79e8301\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        '_PhpScoper99e9e79e8301\\Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        '_PhpScoper99e9e79e8301\\Classes\\Mail_Integration_365\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf024abbddc31c1a02fe6fe0792fd09b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf024abbddc31c1a02fe6fe0792fd09b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf024abbddc31c1a02fe6fe0792fd09b1::$classMap;

        }, null, ClassLoader::class);
    }
}
