<?php
/**
 * xmlToArray.php
 */

if (!function_exists('xmlToArray')) {
    function SimpleXML2Array($xml){
        $array = $xml;

        //recursive Parser
        foreach ($array as $key => $value){
            if(strpos(get_class($value),"SimpleXMLElement")!==false){
                $array[$key] = $this->SimpleXML2Array($value);
            }
        }

        return $array;
    }
}

