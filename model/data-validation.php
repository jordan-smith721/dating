<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/31/2019
 * Time: 5:16 PM
 */

function validName($name)
{
    if($name === "" OR !preg_match("/[a-z]/i", $name))
    {
        return false;
    }
    return true;
}

function validAge($age)
{
    if(!is_numeric($age) OR $age < 18)
    {
        return false;
    }

    return true;
}

function validPhone($phone)
{
    //phone number must be 10 digits long and only numbers
    return preg_match('/^[0-9]{10}+$/', $phone);
}

function validEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validOutdoor($outdoor)
{
    global $f3;

    //check if selection is in array of valid choices
    if(in_array($outdoor, $f3->get('outdoors')) OR in_array($outdoor, $f3->get('outdoors2')))
    {
        return true;
    }

    return false;

}

function validIndoor($indoor)
{
    global $f3;

    //check if selection is in array of valid choices
    if(in_array($indoor, $f3->get('indoors')) OR in_array($indoor, $f3->get('indoors2')))
    {
        return true;
    }

    return false;
}
