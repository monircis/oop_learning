<?php
//access  modifier  public  private  protected
// tutorial  link https://www.youtube.com/watch?v=RHTaf2ZD_Jc&list=PLlsOCJ-Lo0IJ_KgFY7uErRIWfgPbBtFO3&index=2
class Student
{
    public $name;
    const HUMAN = 'HUMAN';
    public static $email = 'ab@gmail.com';
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function output()
    {
        return 'I am : ' .self::HUMAN .  ' My Name  is: ' . $this->name . ' : Email:  ' . self::$email;
    }

}

class  Mark extends Student
{
    public $roll;

    public function output()
    {
        return 'My  name  is: ' . $this->name . ' Roll: ' . $this->roll;
    }
}

$std = new  Student('Murad');
echo $std->output();

echo "<br>";
$mark = new Mark('Monir');
$mark->roll = '20';
echo $mark->output();
echo "<br>";

if($mark instanceof $std){
    echo 'yes';
}else{
    echo  'No';
}

