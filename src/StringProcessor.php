<?php
/**
 * Created by PHPProjectGen.
 * User: edeoleo@gmail.com
 * Date: 10/10/2018
 * Time: 10:13 PM
 */

namespace Elminson\StringProcessor;

/**
 *
 *
 */
class StringProcessor
{
    /**
     * PHPProjectGen constructor.
     */
    public function __construct()
    {
    }

    public function toCamelCase($string)
    {
        $explodeChar = "-";
        if (strpos($string, "_")) {
            $explodeChar = "_";
        }
        $new_string = explode($explodeChar, $string);

        if($new_string[0]===ucfirst($new_string[0])){
            $new_string = array_map("strtolower", $new_string);
            $new_string = array_map("ucfirst", $new_string);
            return join("",$new_string);
        }
        $first = $new_string[0];
        unset($new_string[0]);
        $new_string = array_map("strtolower", $new_string);
        $new_string = array_map("ucfirst", $new_string);
        $first .= join("",$new_string);
        return $first;
    }



}
