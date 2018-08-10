<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 2:29 PM
 */

class HtmlFormatterTest extends \PHPUnit\Framework\TestCase
{
    public function testFormat()
    {
        $htmlFormat = new \Atom\Logs\Formatter\HtmlFormatter("div", ["alert-warning"]);
        $message = "Hello, {name}";
        $name = "Marco";
        $expected = sprintf("<div class='alert alert-warning'>%s</div>", "Hello, Marco");

        $this->assertEquals($expected, $htmlFormat->format("alert", $message, ['name' => $name]));
    }
}
