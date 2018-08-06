<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 2:21 PM
 */

require_once "../vendor/autoload.php";


$baseFormat = new \Atom\Logs\Formatter\BaseFormatter();



//echo strtr("Hello, {name}\r\n", ['{name}' => 'Marco']);


echo $baseFormat->format('alert', "Hello, {name}", ['name' => 'Marco']);