<?php
class Loader{

    public $model;
    // Load library classes

    public function library($lib){

        include LIB_PATH . "$lib.class.php";

    }


    // loader helper functions. Naming conversion is xxx_helper.php;

    public function helper($helper){

        if(file_exists(HELPER_PATH."{$helper}_helper.php")){
        require_once HELPER_PATH . "{$helper}_helper.php";
        }else{
            echo "Helper error";
            exit;
        }

    }

    public function model($model)
    {
        if(file_exists(MODEL_PATH."{$model}.maframe.php")){

    	require_once MODEL_PATH  . "{$model}.maframe.php";
        return new $model;

        }else{
            echo "Model error";
            exit;
        }
    }
    public function view($view)
    {
        if(file_exists(CURR_VIEW_PATH."{$view}.php"))
        {
            require_once CURR_VIEW_PATH."{$view}.php";
        }else{
            echo "error";
            exit;
        }
    }
    public function asset($tipe = 'css',$file)
    {
        $url = $GLOBALS['config']['web']['url'];
        $tipef = $GLOBALS['config']['web'][''.$tipe.''];
        $r= "";
        if($tipe == 'css')
        {
            $r.= '<link rel="stylesheet" type="text/css" href="'.$url.$tipef.$file.'.css"><!-- maframe -->';
        }elseif($tipe == 'js')
        {
            $r .= '<script type="text/javascript" src="'.$url.$tipef.$file.'.js"><!-- maframe --></script>';
        }elseif($tipe == 'img')
        {
            $r.= $url.$tipef.$file;
        }elseif($tipe == 'upload')
        {
            $r.= $url.$tipef.$file;
        }else{
            die("Can't load file {$tipe}-{$file}");
        }

        return $r;
    }

}