<?php

/**
 * Class Validate
 * Contains the validation methods for my app
 * @author Arshdeep Singh
 * @version 1.0
 */
class validation
{
    //names
    function validName($first)
    {
        if(!empty($first) && ctype_alpha($first)) {
            return true;
        }
        else {
            return false;
        }
    }

    function validLname($last)
    {
        if(!empty($last) && ctype_alpha($last)) {
            return true;
        }
        else {
            return false;
        }
    }
    //phone
    function validPhone($phone)
    {
        if(preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $phone)) {
            return true;
        }
        else {
            return false;
        }
    }
    //year
    function validYear($year)
    {
        if(preg_match("/^[0-9]{4}$/i", $year)) {
            return true;
        }
        else {
            return false;
        }

    }
}