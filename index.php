<?php

	$app->get('/cowsay', function() use($app) {
  $app['monolog']->addDebug('cowsay');
  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
});

	require_once __DIR__.'/vendor/autoload.php';

	use Transmission\Transmission;

	$transmission = new Transmission();

	//$torrent = $transmission->add("Bruce Lee - Jeet Kune Do - Il Libro Segreto Di Bruce Lee.torrent");

	$torrents = $transmission->all();
?>
