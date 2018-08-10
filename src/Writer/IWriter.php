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
    public function addRecord(string $level = 'alert', string $message = "", array $context = array());
    public function getRecords(string $level = LogLevel::ALERT, string $from = null, string $to = null);
}
