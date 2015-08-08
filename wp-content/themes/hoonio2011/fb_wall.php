<?php

require 'facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '174472439234583',
  'secret' => '19e23a977761d43f0aa194719e9214eb',
  'cookie' => true,
));

// We may or may not have this data based on a $_GET or $_COOKIE based session.
//
// If we get a session here, it means we found a correctly signed session using
// the Application Secret only Facebook and the Application know. We dont know
// if it is still valid until we make an API call using the session. A session
// can become invalid if it has already expired (should not be getting the
// session back in this case) or if the user logged out of Facebook.
$session = $facebook->getSession();

$me = null;
// Session based API call.
if ($session) {
  try {
    $uid = $facebook->getUser();
    $me = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
  }
}

// login or logout url will be needed depending on current user state.
if ($me) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// This call will always work since we are fetching public data.
$hoonio = $facebook->api('/H00NIO');
$wall = $facebook->api('/H00NIO/feed');

foreach($wall[data] as $entry){
	echo '<div id="wall-story"><hr/><div id="wall-icon"><img src="https://graph.facebook.com/'.$entry[from][id].'/picture"></div>';
	echo '<div id="wall-message"><p><b>'.$entry[from][name].'&nbsp;</b>&nbsp;';
	if ($entry[message]){
		echo $entry[message];
	}
	else{
		echo ' posted <a href="'.$entry[link].'"> '.$entry[name].'</a>';
		echo '<a href="'.$entry[link].'"> <img src="'.$entry[picture].'"></a>';
	}
	echo '&nbsp;<i>'.$entry[created_time].'</i></p></div></div>';
	if ($entry[comments]){
		foreach($entry[comments][data] as $comment){
			echo '<div id="wall-reply"><div id="wall-icon"><img src="https://graph.facebook.com/'.$comment[from][id].'/picture"></div>';
			echo '<div id="wall-replymessage"><p><b>'.$comment[from][name].'&nbsp;</b>&nbsp;';
			echo $comment[message];
			echo '&nbsp;<i>'.$comment[created_time].'</i></p></div></div>';
		}
	}
	echo '<p></p>';
}

echo 'exited loop';

$attachment = array('message' => 'Facebook publishing demo',
                'name' => 'Hoonio test',
                'caption' => "no caption",
                'link' => 'http://www.hoonio.com',
                'description' => 'no description',
                'picture' => 'http://www.hoonio.com/apple-touch-icon.png',
                'actions' => array(array('name' => 'Get Search',
                                  'link' => 'http://www.google.com'))
                );

$result = $facebook->api('/H00NIO/feed/', 'post', $attachment);

?>