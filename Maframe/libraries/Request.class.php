<?php
Class Request{
	public function get($name,$empty = false,$isset = false)
	{
		if($isset == true)
		{
			$m = isset($_GET[''.$name.'']);
		}elseif($empty == true)
		{
			$m = empty($_GET[''.$name.'']);
		}elseif($empty == true && $isset == true )
		{
			$m = isset($_GET[''.$name.'']) && empty($_GET[''.$name.'']);
		}elseif($empty == false && $isset == false)
		{
			$m = $_GET[''.$name.''];
		}else{
			$m = $_GET[''.$name.''];
		}
		return $m;
	}
	public function post($name,$empty = false,$isset = false)
	{
		if($isset == true)
		{
			$m = isset($_POST[''.$name.'']);
		}elseif($empty == true)
		{
			$m = empty($_POST[''.$name.'']);
		}elseif($empty == true && $isset == true )
		{
			$m = isset($_POST[''.$name.'']) && empty($_POST[''.$name.'']);
		}elseif($empty == false && $isset == false)
		{
			$m = $_POST[''.$name.''];
		}else{
			$m = $_POST[''.$name.''];
		}
		return $m;
	}
	public function session($name)
	{
		if(empty($_SESSION[''.$name.'']))
		{
			$result = "empty";
		}
		else
		{
			$result = $_SESSION[''.$name.''];
		}

		return $result;
	}

	public function create_session($data = array())
	{
		$ses = "";
		if(is_array($data))
		{
			foreach($data as $name => $val)
			{
				$ses.= $_SESSION[''.$name.''] = $val;
			}
		}
		return $ses;
	}
	public function delete_all_session()
	{
		return session_destroy();
	}
	/*public function delete_session($name)
	{
		return @unset($_SESSION[''.$name.'']);
	}*/
	public function cookie($name)
	{
		if(empty($_COOKIE[''.$name.'']))
		{
			$result = 'empty';
		}else{
			$result = $_COOKIE[''.$name.''];
		}
		return $result;
	}
	public function create_cookie($data = array())
	{
		$cook = "";

		if(is_array($data))
		{
			foreach($data as $name=>$val)
			{
				$cook.= setcookie($name,$val);
			}
		}
		return $cook;
	}
}