<?php

class Point
{
    private $x;
    
    private $y;
    
    
    public function __construct(int $x=0, int $y=0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX()
    {
        return $this->x;
    }
    
    public function setX(int $x)
    {
        $this->x = $x;
        return $this;
    }
    
    public function getY()
    {
        return $this->y;
    }
    
    public function setY(int $y)
    {
        $this->y = $y;
        return $this;
    }

    
}
