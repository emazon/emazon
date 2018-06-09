<?php

	
	require 'vendor/autoload.php';

	$task = new Task('Yeab', 'Title');
	var_dump($task-> description);
	$task -> complete();
	var_dump($task-> description);
