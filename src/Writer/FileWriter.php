<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:03 AM
 */

namespace Atom\Logs\Writer;

use Psr\Log\LogLevel;

class FileWriter extends BaseWriter implements IWriter
{


    public function addRecord($level = 'alert', $message = "", $context = array())
    {
        $record = sprintf("%s | %s\r\n",
                        date($this->timeFormat, time()),
                        $this->formatter->format($level, $message, $context));

        file_put_contents($this->source, $record);
    }

    public function getRecords($level = LogLevel::ALERT, $from = null, $to = null)
    {

    }
}