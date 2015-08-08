<?php

include_once 'facebook.php';

// FB_APIKEY is your facebook application api key

// FB_SECRET is your application secrete key

$FB_APIKEY="b3bf282bb49839fee002af9a58d577d5";

$FB_SECRET="bddb02e6a49458278696e3ba06f3ce93";

$fb = new FacebookRestClient($FB_APIKEY, $FB_SECRET);

$testtoken= "GMM95D"; // Replace this value with your Token Value

$result = $fb->call_method('facebook.auth.getSession',

array('auth_token' => $testtoken, 'generate_session_secret' => true));

echo "<br /><pre>";

print_r($result);

echo $session_key = $result['session_key'];

?>