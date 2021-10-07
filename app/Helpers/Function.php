<?php
function splitName($name)
{
    $name = trim($name);
    $nameArray=explode(" ",$name);
    $first_name= $nameArray[0];
    $last_name = $nameArray[1];
    return array($first_name,$last_name);
}