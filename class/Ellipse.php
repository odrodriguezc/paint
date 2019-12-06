<?php


class Ellipse extends Form2d
{
    private $radioX;
    private $radioY;
    
    public function __construct(int $radioX=10, int $radioY=10)
    {
        $this->radioX = $radioX;
        $this->radioY = $radioY;
        parent::__construct();
    }
    
    
    public function draw()
    {
        $style = '" style="fill:'.$this->getFillColor(). ';stroke-width:'.$this->getStrokeWidth().';stroke:'.$this->getStrokeColor().'"/>';
        $form = '<ellipse rx="'.$this->radioX.'" ry="'.$this->radioY.'" cx="'.$this->getPoint()->getX().'" cy="'.$this->getPoint()->getY().'' ;

       return $form.$style;
    }

}