<?php
	include 'index.html';

	spl_autoload_register(function ($class) {
		include 'classes/' . $class . '.php';
	}

	$PDO = PdoConnect::getInstance;