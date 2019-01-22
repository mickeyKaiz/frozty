<?php

/*
** FROZTY MINI FRAMEWORK
** by DevFrost Developers!
** https://devfrost.mickfrost.xyz/frozty/mini
*/

//Package - index.php
DEFINE('DS', DIRECTORY_SEPARATOR); 
require_once "lib/frozty.php";

$frozty = frozty::getInstance('frozty');
$frozty->main();
