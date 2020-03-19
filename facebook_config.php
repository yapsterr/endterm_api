<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '230785281400406',
  'app_secret'     => 'b85a0ae1a27ad1cea765e58f5099b7db',
  'default_graph_version'  => 'v2.10'
]);

?>