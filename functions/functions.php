<?php

function StringContains($substring, $string)
{
    $pos = strpos($string, $substring);
    if($pos === false)
    {
        // string needle NOT found in haystack
        return false;
    }
    else
    
    {
        // string needle found in haystack
        return true;
    }

}

function get_string_between($string, $start, $end)
{
    $start = preg_quote($start, '|');
    $end = preg_quote($end, '|');
    $matches = preg_match_all('|'.$start.'([^<]*)'.$end.'|i', $string, $output);
    return $matches > 0 ? $output[1] : array();
}

?>