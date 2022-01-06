<?php

// tutorial  link https://www.youtube.com/watch?v=RHTaf2ZD_Jc&list=PLlsOCJ-Lo0IJ_KgFY7uErRIWfgPbBtFO3&index=2


interface Test
{
    public function abc($a, $b);
}

interface Test1 extends Test
{
    public function efg($a, $b);
}

class Student implements Test1
{
    public function abc($a, $b)
    {
        return $a + $b;
    }

    public function efg($a, $b)
    {
        return $a + $b;
    }
}

$obj = new Student();

echo $obj->abc(4, 5);