<?php


require 'core/autoloade.php';
use core\DB\db as dbs;
use core\DB\sql\sql as sql7;


$db=new dbs();
echo $db->connect('localhost','root','','test');

 $sq=new sql7();
 $sq->gg();



















