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
    return $phone !== "" AND preg_match('/^[0-9]{10}+$/', $phone);
}

function validEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validOutdoor($outdoor)
{
    global $f3;

    $validOutdoors =  $f3->get('outdoors');
    $validOutdoors2 = $f3->get('outdoors2');

    //check if selection is in array of valid choices
    foreach($outdoor as $activity)
    {
        if(!in_array($activity, $validOutdoors) AND !in_array($activity, $validOutdoors2))
        {
            return false;
        }
    }

    return true;


}

function validIndoor($indoor)
{
    global $f3;

    $validIndoors =  $f3->get('indoors');
    $validIndoors2 = $f3->get('indoors2');

    //check if selection is in array of valid choices
    foreach($indoor as $activity)
    {
        if(!in_array($activity, $validIndoors) AND !in_array($activity, $validIndoors2))
        {
            return false;
        }
    }

    return true;
}
