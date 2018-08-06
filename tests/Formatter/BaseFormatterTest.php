<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 2:17 PM
 */

class BaseFormatterTest extends \PHPUnit\Framework\TestCase
{
    public function testFormat()
    {
        $baseFormat = new \Atom\Logs\Formatter\BaseFormatter();
        $expected = "Hello, Marco";
        $this->assertEquals($expected, $baseFormat->format('alert', 'Hello, {name}', ['name' => 'Marco']));
    }
}