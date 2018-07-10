<?php 

function html_open()
{
	$r = "<!DOCTYPE html>\n";
	$r.= "<html>\n";

	return $r;
}
function html_close()
{
	$r = "</html>";
	return $r;
}
function javascript($src){
	$r = "<script type='text/javascript' src='".$src."'><!-- maframe html helper--></script>\n";
	return $r;
}
function css($css,$rel = 'stylesheet'){
	$r = "<link rel='".$rel."' href='".$css."' type='text/css'>\n\n";
	return $r;
}
function meta($name,$content)
{
	$r = "<meta name='".$name."' content='".$content."' >\n<!-- maframe html helper-->\n";
	return $r;
}
function form_open($method='post',$action = '',$property = array(),$upload = false)
{
	if($upload === true)
	{
		$r = "<form method='".$method."' action='".$action."' enctype='multipart/form-data'";
		if(is_array($property))
		{
			foreach($property as $pro=>$val)
			{
				$r.= $pro."='".$val."'";
			}
		}
		$r.= ">\n<!-- maframe html helper -->\n";

	}else{
		$r = "<form method='".$method."' action='".$action."'>\n";
		if(is_array($property))
		{
			foreach($property as $pro=>$val)
			{
				$r.= $pro."='".$val."'";
			}
		}
		$r.=">\n<!-- maframe html helper -->\n";
	}

	return $r;

}

function show_error($msg)
{
	if(!file_exists('./App/views/errors/error.html'))
	{
		die("<h1>Maframe error</h1><br><font color=red><p><i><b>".$msg."</b></i></p></font>");
	}else{
		$f = file_get_contents('./App/views/errors/error.html');
		$e =str_replace("{msg}",$msg,$f);
		echo $e;
		exit;
	}
}

?>