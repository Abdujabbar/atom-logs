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


    /**
     * @param string $level
     * @param string $message
     * @param array $context
     */
    public function addRecord(string $level = 'alert', string $message = "", array $context = array())
    {
        $record = sprintf("%s | %s\r\n",
                        date($this->timeFormat, time()),
                        $this->formatter->format($level, $message, $context));

        file_put_contents($this->source, $record);
    }

    public function getRecords(string $level = LogLevel::ALERT, string $from = null, string $to = null)
    {

    }
}