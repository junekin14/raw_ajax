<?php
/**
 * ajax_headline.php along with ajax_headline1.htm or ajax_headline2.htm to demonstrate simple event based AJAX 
 * 
 * @package WEB150
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.0 2009/10/06
 * @link http://www.billnsara.com/js/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see ajax_headline1.htm
 * @see ajax_headline2.htm 
 * @todo none
 */

//if letter "h" is sent via GET, print a random headline 
if(isset($_GET["h"])){$myTest = $_GET["h"];}else{$myTest = "";}

if($myTest == "yes")
{//get headline!
	$aHeadline = array();
    $aHeadline[0] = "World ends at ten.  News at 11!!!";
    $aHeadline[1] = "Typhoon Rips Through Cemetery; Hundreds Dead";
    $aHeadline[2] = "Joint Committee Investigates Marijuana Use";
    $aHeadline[3] = "Man Struck By Lightning Faces Battery Charge";
    $aHeadline[4] = "Police Begin Campaign to Run Down Jaywalkers";
    $aHeadline[5] = "Blind woman gets new kidney from dad she hasn't seen in years";
    $aHeadline[6] = "Infertility unlikely to be passed on";
    $aHeadline[7] = "Plane Too Close to Ground, Crash Probe Told";
    $aHeadline[8] = "Nation Split on Bush as Uniter or Divider";
    $aHeadline[9] = "Killer sentenced to die for second time in 10 years";
	srand(time());
	$random = (rand()%9);
	print $aHeadline[$random];
}else{
	print "This is an AJAX page, and you didn't say the magic word!";	
}	
?>
