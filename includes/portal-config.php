<?php
/*
portal-config.php

used to store all of our WEB120 configuration information

*/

//prevents data from being sent early

ob_start();

//this helps us avoid PHO date errors:

date_default_timezone_set('America/Los_Angeles');
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Linda's WEB120 Title Page";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
        
    case 'aia.php':
        $title = "Sara's Final Project Audience, Issues and Approach Research";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
    break;

        
    case 'contactme.php':
        $title = "Linda's WEB120 Title Page";
        $logo = "fa-pencil-square-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = "Contact Linda";
    break;    
        
    default:
        $title = THIS_PAGE;
        $logo = "fa-home";
        $PageID = "Welcome";
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Linda";

/*
here we're creating a function to generate links and keep the highlight on the current page

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Linda</a></li>

*/

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