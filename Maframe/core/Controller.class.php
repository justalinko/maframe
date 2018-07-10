<?php

// Base Controller

class Controller{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)

    protected $loader;
    protected $model;
    protected $date;
    public function __construct(){

        $this->loader = new Loader();
        $this->model  = new Model();
        $this->date   = new Tanggal();
    }


    public function redirect($kmn,$type = 'php',$wait =0)
    {
        if($type == 'php'){
        header('location:'.$kmn);
        ob_end_flush();
        }elseif($type == 'js')
        {
            echo "<script type='text/javascript'>window.location.href='".$kmn."';</script>";
        }elseif($type == 'html')
        {
            echo "<meta http-equiv='refresh' content='".$wait.";url=".$kmn."'> <!-- maframe-->";
        }else{
            die("Can't redirect ~");
        }
    }
    public function show_error($error)
    {
        echo "<title>Error - maframe.</title>";
        echo "<center><h3>".$error."</h3></center>";
        exit;
    }


}