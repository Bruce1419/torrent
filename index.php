<?php

	require_once __DIR__.'/vendor/autoload.php';

	use Transmission\Transmission;

	$transmission = new Transmission();

	//$torrent = $transmission->add("Bruce Lee - Jeet Kune Do - Il Libro Segreto Di Bruce Lee.torrent");

	$torrents = $transmission->all();
?>