<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInitff434fc72b4703a1dc1e82288daf29d1
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInitff434fc72b4703a1dc1e82288daf29d1', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInitff434fc72b4703a1dc1e82288daf29d1', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInitff434fc72b4703a1dc1e82288daf29d1::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInitff434fc72b4703a1dc1e82288daf29d1::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequireff434fc72b4703a1dc1e82288daf29d1($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequireff434fc72b4703a1dc1e82288daf29d1($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
