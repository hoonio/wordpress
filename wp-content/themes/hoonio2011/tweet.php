<?php

require 'tmhOAuth.php';
$tmhOAuth = new tmhOAuth(array(
  'consumer_key'    => 'VfUSoN1LRaKR3459c9Lzdw',
  'consumer_secret' => 'ehXOa4DAqIuRdflttrNKv6UzYHXD7BPalwGLjYIlUY',
  'user_token'      => '99974462-JxZTu78HU7y3aqsZn2GgjzFEO1uhjSs80rswYbbG2',
  'user_secret'     => 'nSMSPDFESuGEh1ZNSLkxSTX0rAXoMGpmHj8kZg2Vs0',
));

$tmhOAuth->request('GET', $tmhOAuth->url('1/statuses/user_timeline')
);

if ($tmhOAuth->response['code'] == 200) {
  $content=json_decode($tmhOAuth->response['response']);
} else {
  $tmhOAuth->pr(htmlentities($tmhOAuth->response['response']));
}

$counter == 0;
foreach($content as $entry)
{
if (++$counter == 11) { 
       break; 
} 

$tweet = $entry->text;
$time = $entry->created_at;
$location = $entry->place->full_name;

$created_month = substr($time, 3, 4);
$created_day = substr($time, 7, 3);
$created_time = substr($time, 10, 6);
$created_year = substr($time, 25, 5);
$time_informat = $created_time . $created_day . $created_month . $created_year;

if(!is_null($location)){
$time_informat= $time_informat . " at " . $location;
}
$print_line="{tweet}&nbsp;<i> {time_informat}</i><br /><br />";
$print_line=str_replace("{tweet}",$tweet,$print_line);		
$print_line=str_replace("{time_informat}",$time_informat,$print_line);

echo $print_line;
}

error_reporting(E_ALL&(~E_NOTICE));
?>
