<?php

/*
* -------------------------------
* Load Config filename
* -------------------------------
*/

$list_conf = array('db','web');

foreach($list_conf as $conf)
{
	include CONFIG_PATH. $conf.".php";
}

?>