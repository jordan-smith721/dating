<?php
/**
 * Created by PhpStorm.
 * User: Jordan Smith
 * Date: 1/14/2019
 * Index page for routing through dating site
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function ()
{
    echo Template::instance()->render('views/home.php');
});

$f3->route('GET|POST /information', function()
{
    echo Template::instance()->render('views/information.php');
});

$f3->route('GET|POST /profile', function($f3)
{
    $f3->set('states', array(
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'District Of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
        ));

    echo Template::instance()->render('views/profile.php');
});

$f3->route('GET|POST /interests', function($f3)
{
   $f3->set('indoors', array('TV', 'Video Games', 'Reading', 'Cooking'));
   $f3->set('indoors2', array('Board Games', 'Movies', 'Puzzles', 'Gym'));
   $f3->set('outdoors', array('Hiking', 'Biking', 'Swimming', 'Climbing'));
   $f3->set('outdoors2', array('Running', 'Camping', 'Beach', 'Sports'));

   echo Template::instance()->render('views/interests.php');
});

$f3->route('GET|POST /summary', function()
{

    echo Template::instance()->render('views/summary.php');
});

//Run fat free
$f3->run();
