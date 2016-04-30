<?php
/**
 * Created by IntelliJ IDEA.
 * User: damo
 * Date: 30/04/16
 * Time: 21:35
 */

class Bootstrap {

    const ROOT = '/..';

    public static function autoload($className)
    {
        echo '<pre>Autoload : ' . $className;
        $tab = explode('\\', $className);
        $path = __DIR__. self::ROOT . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $tab) . '.php';
        echo "\n    =&gt; $path</pre>";
        require_once $path;
    }
}