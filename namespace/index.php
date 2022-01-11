<?php
require_once 'APP/Classes/First.php';
require_once 'APP/Classes/Test.php';


//$first = new \App\Classes\First();
//echo $first->name();
//$x = new \App\Classes\Test();
//echo $x->name();


//another way
use App\test\Test as a;
use App\Classes\First as b;
echo a::name();
echo b::name();