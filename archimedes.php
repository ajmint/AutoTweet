<?php

date_default_timezone_set('Europe/London');			// !!! CHANGE THIS !!!

// Put 24hr time without : in var $time
$time = date("Hi");

// Put day of week number (0 = Sun, 6 = Sat) into $day
$day = intval(date("w"));

// Put full day name (eg "Monday") in $dayName
$dayName = date("l");

// YYYY-MM-DD
$fullDate = date("Y-m-d");

// Switch day + time to get Tweet.

// ADD SPECIFIC DAYS + TIMES HERE, MAKE SURE THERE'S
// NOTHING AT THE SAME TIME IN WEEKLY SCHEDULE BELOW

if ($fullDate == "2012-02-12" && $time == "1441") {		// !!! CHANGE THIS !!!
	$tweet = "";						// !!! CHANGE THIS !!!
}								// !!! CHANGE THIS !!!

switch ($day) {
    case 1: // Monday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
		}
		
        break;
	
		
    case 2: // Tuesday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
		}
		
        break;
		
    case 3: // Wednesday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
		}
		
        break;
		
    case 4: // Thursday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
		}
		
        break;
		
    case 5: // Friday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
		}
		
        break;
		
	case 6: // Saturday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
		}
		
        break;
	
	case 0: // Sunday
        
		switch ($time) {
			case "0800": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;
			case "1500": 				// !!! CHANGE THIS !!!
				$tweet = "";			// !!! CHANGE THIS !!!
				break;		
		}
		
     break;

}

if ($tweet) {

	if (strlen($tweet) > 140) {
		$tweet = substr($tweet, 0, 137) . '...';
	}

	// Twitter app info
	$consumerKey	= '';					// !!! CHANGE THIS (DEV.TWIITER.COM) !!!
	$consumerSecret = '';					// !!! CHANGE THIS (DEV.TWIITER.COM) !!!
	$oAuthToken	= '';					// !!! CHANGE THIS (DEV.TWIITER.COM) !!!
	$oAuthSecret	= '';					// !!! CHANGE THIS (DEV.TWIITER.COM) !!!

	require_once('twitteroauth.php');			// !!! MAKE SURE YOU HAVE THIS AND OAUTH.PHP
								// FROM ABRAHAM/TWITTEROAUTH IN SAME DIR !!!
	// Create a new instance
	$tweeter = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

	// Send a tweet
	$tweeter->post('statuses/update', array('status' => "$tweet"));

}

?>