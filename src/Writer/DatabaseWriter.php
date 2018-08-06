<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:57 AM
 */

namespace Atom\Logs\Writer;


use Psr\Log\LogLevel;

class DatabaseWriter extends BaseWriter implements IWriter
{
    /**
     * @var $source \PDO
     */
    protected $source;
    public $table;


    public function addRecord(string $level = 'alert', string $message = "", array $context = array())
    {
        // TODO: Implement addRecord() method.

    }

    public function getRecords(string $level = LogLevel::ALERT, string $from = null, string $to = null)
    {
        // TODO: Implement getRecords() method.
    }
}