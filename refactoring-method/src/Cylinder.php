<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getBasePerimeter($radius);
        return  $perimeter * $height + 2 * $baseArea;
    }
    function getBaseArea($radius){
        return pi()* $radius*$radius;
    }
    function getBasePerimeter($radius){
        return 2 * pi() * $radius;
    }
}
$test = new Cylinder();
echo $test->getVolume(5,5);
