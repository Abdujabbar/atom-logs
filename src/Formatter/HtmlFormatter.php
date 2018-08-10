<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:45 AM
 */

namespace Atom\Logs\Formatter;

class HtmlFormatter extends BaseFormatter
{
    protected $element = "div";
    protected $id;
    protected $class = array();
    public function __construct($element = "div", $class = array())
    {
        $this->element = $element;
        $this->class = $class;
    }

    public function format(string $level = 'alert', string $message = "", array $context = array())
    {
        return sprintf(
            "<%s class='%s'>%s</%s>",
                        $this->element,
                        trim($level . " " . implode(" ", $this->class)),
                        parent::format($level, $message, $context),
                        $this->element
        );
    }
}
