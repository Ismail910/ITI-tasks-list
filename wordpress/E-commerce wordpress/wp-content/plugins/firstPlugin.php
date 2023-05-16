<?php

/*
    plugin Name: First Plugin - iti
    Author: ismail
    Description: new plugin
    Version: 1.0
*/

    
    
    add_action("the_title", "uppercase_plugin");
    function uppercase_plugin($title)
    {
        $title = strtoupper($title);
        return  $title ;
    }