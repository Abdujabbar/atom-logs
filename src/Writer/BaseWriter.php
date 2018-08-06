<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:06 AM
 */

namespace Atom\Logs\Writer;



use Atom\Logs\Formatter\IFormat;

class BaseWriter
{
    protected $source;
    protected $timeFormat = "d.m.Y H:i:s";
    /**
     * @var $formatter IFormat
     */
    protected $formatter;
    public function __construct($source, $formatter)
    {
        $this->source = $source;
        $this->formatter = $formatter;
    }


    public function setTimeFormat($format = "d.m.Y H:i:s") {
        $this->timeFormat = $format;
    }
}