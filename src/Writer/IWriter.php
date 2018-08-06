<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:01 AM
 */

namespace Atom\Logs\Writer;

use Psr\Log\LogLevel;

interface IWriter
{
    public function addRecord($level = 'alert', $message = "", $context = array());
    public function getRecords($level = LogLevel::ALERT, $from = null, $to = null);
}