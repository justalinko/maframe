<?php
Class Model{
    public $db;

    public function __construct()
    {
        self::init();
       // self::do_connection();
    }
    public  function init()
    {
        $config['hostname'] = $GLOBALS['config']['db']['hostname'];
        $config['username'] = $GLOBALS['config']['db']['username'];
        $config['password'] = $GLOBALS['config']['db']['password'];
        $config['database'] = $GLOBALS['config']['db']['database'];

        if($GLOBALS['config']['db']['driver'] == 'mysql')
        {
            $this->db = new Mysql($config);
        }elseif($GLOBALS['config']['db']['driver'] == 'mysqli')
        {
            $this->db = new MysqliMaframe($config);
        }else{
            $this->db = new MysqliMaframe($config);
        }
    }
  
}