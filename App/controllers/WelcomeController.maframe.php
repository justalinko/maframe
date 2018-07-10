<?php

Class WelcomeController extends Controller{

	public function indexAction()
	{
		//echo $this->loader->publicdir('css','welcome-style');
		require CURR_VIEW_PATH.'page_welcome.php';
	}
}