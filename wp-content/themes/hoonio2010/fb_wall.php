<?php

require 'facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '120250788018073',
  'secret' => 'bddb02e6a49458278696e3ba06f3ce93',
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

$counter = 0;
foreach($dataparse as $wall[data])
{
if (++$counter == 5) { 
       break; 
} 
$post = $entry[message];
$icon= $entry[icon];
$author= $entry[from][name];
echo $author.'<br>';
echo $post;
}

?>

