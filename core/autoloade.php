<?php

function __autoload($class_name){

    global $ca;
    $cls= explode('\\',$class_name);

    $i=0;
    for($i=0;$i<=sizeof($cls)-1;$i++){
        if($i==sizeof($cls)-1){
            $ca .= strtolower($cls[$i]);
        }else{
            $ca .= strtolower($cls[$i]).'/';
        }


    }
    //echo $ca.'<br>';
    if(require_once $ca.".php"){
        $ca='';
    }
   
   

}


/*
function __autoload($class_name)
{
    require_once "classes/class.".$class_name.".php";
}


function autoloadModel($className) {
    $filename = "models/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadController($className) {
    $filename = "controllers/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");
*/