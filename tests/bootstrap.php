<?php

spl_autoload_register(function($class)
{
	$file = __DIR__.'/../src/'.strtr($class, '\\', '/').'.php';
	if (file_exists($file)) {
		require $file;
		return true;
	}
});

require_once __DIR__.'/../src/PHPLinq.php';
require_once __DIR__.'/../src/PHPLinq/LinqToObjects.php';