<?php
/*BIG CONFIG */
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */ 
//Here are the keys for the server: seattlecentral.edu
$siteKey = "6Lc2qV4UAAAAANtNxJvSofmWCrn5XanTQ25WB7Ir";
$secretKey = "6Lc2qV4UAAAAAJoh33BnyXi5XEXcMI_dtxLoLnpb";
//this constant allows a page to know it's own url/name
date_default_timezone_set('America/Los Angeles');

////
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
        
    case "index.php":
        $title = "Allen's Design Welcome";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
        
    case "about.php":
        $title = "About";
        $logo = "";
        $PageID = "About";
    break;
     
    case "services.php":
        $title = "Services";
        $logo = "";
        $PageID = 'Services';
    break;
        
    case "contact.php":
        $title = "Contact";
        $logo = "";
        $PageID = "Contact Solomon";
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = 'Welcome';
    break;
}
$nav1['index.php'] = 'Welcome';
$nav1['about.php'] = 'About';
$nav1['services.php'] = 'Services';
$nav1['contact.php'] = 'Contact Solomon';




function makeLinks($nav1)

{

    $myReturn = '';

    foreach($nav1 as $url => $text){

        

        if($url == THIS_PAGE){

            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";

        }else{

            $myReturn .= "<li><a href=\"$url\">$text</a></li>";

        }

    }

    

    return $myReturn;

}



?>
