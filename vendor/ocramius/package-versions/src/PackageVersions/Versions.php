<?php

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = '__root__';
    const VERSIONS = array (
  'doctrine/annotations' => 'v1.6.0@c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5',
  'doctrine/cache' => 'v1.7.1@b3217d58609e9c8e661cd41357a54d926c4a2a1a',
  'doctrine/collections' => 'v1.5.0@a01ee38fcd999f34d9bfbcee59dbda5105449cbf',
  'doctrine/common' => 'v2.9.0@a210246d286c77d2b89040f8691ba7b3a713d2c1',
  'doctrine/dbal' => 'v2.8.0@5140a64c08b4b607b9bedaae0cedd26f04a0e621',
  'doctrine/doctrine-bundle' => '1.9.1@703fad32e4c8cbe609caf45a71a1d4266c830f0f',
  'doctrine/doctrine-cache-bundle' => '1.3.3@4c8e363f96427924e7e519c5b5119b4f54512697',
  'doctrine/doctrine-migrations-bundle' => 'v1.3.1@a9e506369f931351a2a6dd2aef588a822802b1b7',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.1.0@185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda',
  'doctrine/lexer' => 'v1.0.1@83893c552fd2045dd78aef794c31e694c37c0b8c',
  'doctrine/migrations' => 'v1.8.1@215438c0eef3e5f9b7da7d09c6b90756071b43e6',
  'doctrine/orm' => 'v2.6.2@d2b4dd71d2a276edd65d0c170375b445f8a4a4a8',
  'doctrine/persistence' => 'v1.0.0@17896f6d56a2794a1619e019596ae627aabd8fd5',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'ocramius/package-versions' => '1.3.0@4489d5002c49d55576fa0ba786f42dbb009be46f',
  'ocramius/proxy-manager' => '2.2.0@81d53b2878f1d1c40ad27270e64b51798485dfc5',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.0.2@4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/cache' => 'v4.1.1@be95ef3665747e6ff9d883a8adc87085769009f0',
  'symfony/config' => 'v4.1.1@e57e7b573df9d0eaa8c0152768c708ee7ea2b8e5',
  'symfony/console' => 'v4.1.1@70591cda56b4b47c55776ac78e157c4bb6c8b43f',
  'symfony/debug' => 'v4.1.1@dbe0fad88046a755dcf9379f2964c61a02f5ae3d',
  'symfony/dependency-injection' => 'v4.1.1@e761828a85d7dfc00b927f94ccbe1851ce0b6535',
  'symfony/doctrine-bridge' => 'v4.1.1@a7751cc8d949c16366976633678116f85662b989',
  'symfony/event-dispatcher' => 'v4.1.1@2391ed210a239868e7256eb6921b1bd83f3087b5',
  'symfony/filesystem' => 'v4.1.1@562bf7005b55fd80d26b582d28e3e10f2dd5ae9c',
  'symfony/finder' => 'v4.1.1@84714b8417d19e4ba02ea78a41a975b3efaafddb',
  'symfony/framework-bundle' => 'v4.1.1@a34630e9712b23fb0a20cc12fe937a9ddcaacbe8',
  'symfony/http-foundation' => 'v4.1.1@4f9c7cf962e635b0b26b14500ac046e07dbef7f3',
  'symfony/http-kernel' => 'v4.1.1@29c094a1c4f8209b7e033f612cbbd69029e38955',
  'symfony/orm-pack' => 'v1.0.5@1b58f752cd917a08c9c8df020781d9c46a2275b1',
  'symfony/polyfill-ctype' => 'v1.8.0@7cc359f1b7b80fc25ed7796be7d96adc9b354bae',
  'symfony/polyfill-mbstring' => 'v1.8.0@3296adf6a6454a050679cde90f95350ad604b171',
  'symfony/routing' => 'v4.1.1@b38b9797327b26ea2e4146a40e6e2dc9820a6932',
  'zendframework/zend-code' => '3.3.0@6b1059db5b368db769e4392c6cb6cc139e56640d',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'nikic/php-parser' => 'v4.0.3@bd088dc940a418f09cda079a9b5c7c478890fb8d',
  'symfony/maker-bundle' => 'v1.5.0@bb0485a3b2eecc561eff735109316677e18fb1d1',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException if a version cannot be located
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
