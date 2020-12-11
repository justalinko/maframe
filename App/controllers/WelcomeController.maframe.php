<?php
defined('ROOT') or die("Error.");

Class WelcomeController extends Controller{


	public function indexAction()
	{
		$this->loader->helper('html');
		$this->loader->view('page_welcome');
	}
}