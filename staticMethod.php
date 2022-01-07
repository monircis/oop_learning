<?php
//access  modifier  public  private  protected
// tutorial  link https://www.youtube.com/watch?v=RHTaf2ZD_Jc&list=PLlsOCJ-Lo0IJ_KgFY7uErRIWfgPbBtFO3&index=2

class Student
{
Inheritance 1:30  hour
Access Modifier: 1 hour
    Static Method : 1 hour
Interface 1:30 hour

    const HUMAN = 'HUMAN';
    public static $email = 'ab@gmail.com';

    public static function output($name)
    {
        return 'I am : ' . self::HUMAN . ' My name  is: ' . $name . ' : Email:  ' . self::$email;
    }

}

echo Student::output('monir');