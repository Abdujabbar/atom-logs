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


    public function addRecord($level = 'alert', $message = "", $context = array())
    {
        // TODO: Implement addRecord() method.

    }

    public function getRecords($level = LogLevel::ALERT, $from = null, $to = null)
    {
        // TODO: Implement getRecords() method.
    }
}