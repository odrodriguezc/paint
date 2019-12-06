<?php


class Carre extends Rectangle
{
    
    public function __construct(int $width)
    {
        parent::__construct($width,$width);
    }
}