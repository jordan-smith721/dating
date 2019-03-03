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

require_once 'vendor/autoload.php';
session_start();


//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//require data validation
require_once 'model/data-validation.php';

//Define a default route
$f3->route('GET /', function ()
{
    echo Template::instance()->render('views/home.php');
});

$f3->route('GET|POST /information', function($f3)
{
    $f3->set("title", "Personal Information");

    $_SESSION = array();
    $isValid = true;

    $fname = "";
    $lname = "";
    $age = "";
    $gender = "";
    $phone = "";

    if(!empty($_POST))
    {
        //validate first name
        if(isset($_POST['fname']))
        {
            $fname = $_POST['fname'];
            if(!validName($fname))
            {
                $f3->set("errors['fname']", "Please enter a first name.");
                $isValid = false;
            }

        }
        //validate last name
        if(isset($_POST['lname']))
        {
            $lname = $_POST['lname'];
            if(!validName($lname))
            {
                $f3->set("errors['lname']", "Please enter a last name.");
                $isValid = false;
            }

        }
        //validate age
        if(isset($_POST['age']))
        {
            $age = $_POST['age'];
            if(!validAge($age))
            {
                $f3->set("errors['age']", "Please enter a valid age.");
                $isValid = false;
            }

        }
        //validate phone
        if(isset($_POST['phone']))
        {
            $phone = $_POST['phone'];
            if(!validPhone($phone))
            {
                $f3->set("errors['phone']", "Please enter a valid phone number.");
                $isValid = false;
            }

        }

        //set gender(doesn't need validation)
        if(isset($_POST['gender']))
        {
            $gender = $_POST['gender'];
        }


        if($isValid)
        {
            if(isset($_POST['premium']))
            {
                $member = new PremiumMember($fname, $lname, $age, $gender, $phone);
                $_SESSION['member'] = $member;
            }
            else
            {
                $member = new Member($fname, $lname, $age, $gender, $phone);
                $_SESSION['member'] = $member;
            }

            $f3->reroute('profile');
        }
    }

    echo Template::instance()->render('views/information.html');
});

$f3->route('GET|POST /profile', function($f3)
{
    $f3->set("title", "Profile");

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

    $isValid = true;
    $member = $_SESSION['member'];

    //set state (not validated)
    if(isset($_POST['state']))
    {
        $member->setState($_POST['state']);
    }
    else
    {
        $member->setState("Location not specified");
    }

    //set seeking
    if(isset($_POST['seeking']))
    {
        $member->setSeeking($_POST['seeking']);
    }
    else
    {
        $member->setSeeking("Not Specified");
    }

    //set bio
    $f3->set('bioText', ""); //for sticky forms
    if(!empty($_POST['bio']))
    {
        $member->setBio($_POST['bio']);
        $f3->set('bioText', $_POST['bio']);
    }
    else
    {
        $member->setBio("This user has not yet given a biography!");

    }

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        if(validEmail($email))
        {
            $member->setEmail($email);
        }
        else
        {
            $f3->set("errors['email']", "Please enter a valid email.");
            $isValid = false;
        }

        //reroute to interests if premium member - summary if not
        if($isValid)
        {
            $_SESSION['member'] = $member;

            if($member instanceof  PremiumMember)
            {
                $f3->reroute('interests');
            }

            $f3->reroute('summary');

        }
    }

    echo Template::instance()->render('views/profile.php');
});

$f3->route('GET|POST /interests', function($f3)
{
   $f3->set("title", "Interests");
   $f3->set('indoors', array('tv'=>'TV', 'vg'=>'Video Games', 'reading'=>'Reading', 'cooking'=>'Cooking'));
   $f3->set('indoors2', array('bg'=>'Board Games', 'movies'=>'Movies', 'puzzles'=>'Puzzles', 'gym'=>'Gym'));
   $f3->set('outdoors', array('hiking'=>'Hiking', 'biking'=>'Biking', 'swimming'=>'Swimming', 'climbing'=>'Climbing'));
   $f3->set('outdoors2', array('running'=>'Running', 'camping'=>'Camping', 'beach'=>'Beach', 'sports'=>'Sports'));

   if(isset($_POST['submitInterests']))
   {
        $member = $_SESSION['member'];
        $isValid = true;

       $member->setIndoorInterests(Array());
       $member->setOutdoorInterests(Array());

        //validate indoor interests
        if(isset($_POST['indoors']))
        {
            $indoors = $_POST['indoors'];

            if(validIndoor($indoors))
            {
               $member->setIndoorInterests($indoors);
            }
            else
            {
                $f3->set("errors['indoors']", "Invalid selection for indoor activity.");
                $isValid = false;
            }
        }

        //validate outdoor interests
        if(isset($_POST['outdoors']))
        {
            $outdoors = $_POST['outdoors'];
            if(validOutdoor($outdoors))
            {
                $member->setOutdoorInterests($outdoors);
            }
            else
            {
                $f3->set("errors['outdoors']", "Invalid selection for outdoor activity.");
                $isValid = false;
            }
        }


        if($isValid)
        {
            $_SESSION['member'] = $member;
            $f3->reroute('summary');
        }
   }


   echo Template::instance()->render('views/interests.php');
});

$f3->route('GET|POST /summary', function($f3)
{
    $f3->set("title", "Profile Summary");
    $member = $_SESSION['member'];

    $fname = $member->getFname();
    $lname = $member->getLname();
    $age = $member->getAge();
    $gender = $member->getGender();
    $phone = $member->getPhone();
    $email = $member->getEmail();
    $state = $member->getState();
    $seeking = $member->getSeeking();
    $bio = $member->getBio();
    $image = "NULL";

    if($member instanceof PremiumMember)
    {
        $indoorInterests = $member->getIndoorInterests();
        $f3->set('indoors', implode(", ", $indoorInterests));
        $outdoorInterests = $member->getOutdoorInterests();
        $f3->set('outdoors', implode(", ", $outdoorInterests));

        $premium = '1';

        //combine indoor and outdoor interests into one string
        $allInterests = (implode(", ", array_merge($indoorInterests, $outdoorInterests)));

    }
    else
    {
        $premium = '0';
        $allInterests = "NULL";
    }

    //call insert member function
    $dbConnect = new Database();
    $cnxn = $dbConnect->connect();
    $dbConnect->insertMember($cnxn, $fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio,
        $premium, $image, $allInterests);

    echo Template::instance()->render('views/summary.php');
});

$f3->route("GET /admin", function($f3)
{

    $dbConnect = new Database();
    $cnxn = $dbConnect->connect();
    $result = $dbConnect->getMembers($cnxn);

    $f3->set('results', $result);


    echo Template::instance()->render('views/admin.php');
});

$f3->route("GET /view/@member_id", function($f3, $params)
{
    $dbConnect = new Database();
    $cnxn = $dbConnect->connect();

    $member_id = $params['member_id'];
    $member = $dbConnect->getMember($cnxn, $member_id);
    $f3->set('member', $member);
    echo Template::instance()->render('views/view-member.html');

});


//Run fat free
$f3->run();
