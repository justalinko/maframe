<?php
class Loader{

    public $model;
    // Load library classes

    public function library($lib){

        include LIB_PATH . "$lib.class.php";

    }


    // loader helper functions. Naming conversion is xxx_helper.php;

    public function helper($helper){

        include HELPER_PATH . "{$helper}_helper.php";

    }

    public function model($model)
    {
    	include MODEL_PATH  . "{$model}.maframe.php";
        return new $model;
    }

    public function publicdir($tipe = 'css',$file)
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