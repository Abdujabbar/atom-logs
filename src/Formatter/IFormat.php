<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:40 AM
 */

namespace Atom\Logs\Formatter;


interface IFormat
{
    public function format($level = 'alert', $message = "", $context = array());
}