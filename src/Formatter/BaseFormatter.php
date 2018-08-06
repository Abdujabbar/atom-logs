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

    /**
     * @param string $level
     * @param string $message
     * @param array $context
     * @return string
     */
    public function format(string $level = 'alert', string $message = "", array $context = array())
    {
        $replacement = array();
        foreach($context as $key => $value) {
            if (!is_array($value) && (!is_object($value) || method_exists($value, '__toString'))) {
                $replacement['{' . $key . '}'] = $value;
            }
        }
        return strtr($message, $replacement);
    }
}