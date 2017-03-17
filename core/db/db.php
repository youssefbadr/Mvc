<?php

namespace core\DB;
class db extends \mysqli{

    public function connect($host = null, $user = null, $password = null, $database = null, $port = null, $socket = null){
        if(!mysqli_connect_errno ()){
             
            return 'Okay';
        }else{
            return 'Error';
             
        }
    }

}