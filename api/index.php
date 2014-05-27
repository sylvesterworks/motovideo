<?php
// dependencies
require_once(__DIR__.'vendor/autoload.php');
\Slim\Slim::registerAutoloader();

// models and api
require_once(__DIR__.'models/all.php');
require_once(__DIR__.'api/api_1.0.php');

// startup the slim app
$app = new \Slim\Slim();

// catch all
$app->get('/', 'showIndex');

// channel functions
$app->group('/channel', function() use ($app) {
  $channelApi = new ChannelAPI();
  $app->get('/list', $chnnelApi->list);
  $app->get('/:id', $channlApi->load);
  $app->post('/save', $chnnelApi->save);
  $app->put('/put', $channeApi->put);
  $app->delete('/delete', $channelApi->delete);
})

$app->run();

// routing functions not subclassed.
function showIndex() {
  echo "WELCOME to the MotorcycleVideo API";
}
