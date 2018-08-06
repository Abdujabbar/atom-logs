<?php
/**
 * Created by PhpStorm.
 * User: abdujabbor
 * Date: 8/6/18
 * Time: 11:41 AM
 */

namespace Atom\Logs\Formatter;


class BaseFormatter implements IFormat
{

    public function format($level = 'alert', $message = "", $context = array())
    {
        $replacement = array();
        foreach($context as $key => $value) {
            if (!is_array($value) && (!is_object($value) || method_exists($value, '__toString'))) {
                $replace['{' . $key . '}'] = $value;
            }
        }
        return strstr($message, $replacement);
    }
}