<?php 

Class MaFrame{
    public $date;

	public static function run()
	{

       self::init();

       self::autoload();

       self::dispatch();
	}
	private static function init() {

		   // Define path constants

    define("DS", DIRECTORY_SEPARATOR);

    define("ROOT", dirname(dirname(__DIR__)) . DS);

    define("APP_PATH", ROOT . 'App' . DS);

    define("FRAMEWORK_PATH", ROOT . "Maframe" . DS);

    define("PUBLIC_PATH", ROOT . "Public" . DS);


    define("CONFIG_PATH", APP_PATH . "config" . DS);

    define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);

    define("MODEL_PATH", APP_PATH . "models" . DS);

    define("VIEW_PATH", APP_PATH . "views" . DS);


    define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);

    define('DB_PATH', FRAMEWORK_PATH . "database" . DS);

    define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);

    define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);

    define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);

        // Load configuration file

    require CONFIG_PATH . "config.php";
    $GLOBALS['config'] = $config;

    // Define platform, controller, action, for example:

    // index.php?p=admin&c=Goods&a=add

    define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : $GLOBALS['config']['web']['default_platform']);

    define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : $GLOBALS['config']['web']['default_controller']);

    define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : $GLOBALS['config']['web']['default_action']);


    define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);

    define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DS);


 
    // Load core classes

    require CORE_PATH . "Controller.class.php";

    require CORE_PATH . "Loader.class.php";

    require DB_PATH . "MysqliMaframe.class.php";

    require CORE_PATH . "Model.class.php";

    // /////////////////////////////

    require LIB_PATH . "Tanggal.class.php";
    require LIB_PATH . "Security.class.php";
    require LIB_PATH . "Request.class.php";

    // Start session

    session_start();

	}


  private static function autoload(){

    spl_autoload_register(array(__CLASS__,'load'));

}


// Define a custom load method

private static function load($classname){


    // Here simply autoload app’s controller and model classes

    if (substr($classname, -10) == "Controller"){

        // Controller
        if(file_exists(CURR_CONTROLLER_PATH."$classname.maframe.php")){
        require_once CURR_CONTROLLER_PATH . "$classname.maframe.php";
        }else{
            die("Can't load controller | ".$classname);
        }

    } elseif (substr($classname, -5) == "Model"){

        // Model

        require_once  MODEL_PATH . "$classname.maframe.php";

    }

}


   private static function dispatch(){

    // Instantiate the controller class and call its action method

    $controller_name = CONTROLLER . "Controller";

    $action_name = ACTION . "Action";

    $controller = new $controller_name;

    $controller->$action_name();

}
	
}
?>