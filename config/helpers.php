<?php
/**
 * Description of helpers
 *
 * @author DeBoer
 */
class Helpers 
{
    public static function buildUrl($route)
    {
        return 'http://' . $_SERVER['SERVER_NAME'] . '/' . (($route != ROUTE_INDEX) ? str_replace("_", "-", strtolower($route)) . '/' : null);
    }
}

?>
