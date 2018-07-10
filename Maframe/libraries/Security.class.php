<?php

Class Security{
	
	public function filter_xss($filter)
	{
		$str = addslashes(stripslashes(strip_tags(htmlspecialchars($filter))));
		return $str;
	}
	public function filter_sqli($id)
	{
		$tolak = ['union','select','group','concat','order by'];
		$p = str_replace(implode("|",$tolak),"",$id);
		$p = abs($id);
		return $p;
	}
	public function id($id)
	{
		return abs($id);
	}
}