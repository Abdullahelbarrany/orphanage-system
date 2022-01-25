<?php
include_once "greetings.php";
include_once "harvest.php";
include_once "christmas.php";
include_once "ramadan.php";
class greetingsFactory {
function getgreetings($greetingstype)
    {
        if($greetingstype == 2)
        {
            return new harvest();
        }
        if($greetingstype == 3)
        {
            return new christmas();
        }
        if($greetingstype == 1)
        {
            return new ramadan();
        }
        else
        {
        return null;
    }
    }

	}
?>