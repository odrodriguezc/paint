<?php


class Rectangle extends Form2d
{
    private $width;
    private $height;
    
    public function __construct(int $width=0, int $height=0)
    {
        $this->width = $width;
        $this->height = $height;
        parent::__construct();
    }
    
    
    public function draw()
    {
        $style = '" style="fill:'.$this->getFillColor(). ';stroke-width:'.$this->getStrokeWidth().';stroke:'.$this->getStrokeColor().'"/>';
        $form = '<rect width="'.$this->width.'" height="'.$this->height.'" x="'.$this->getPoint()->getX().'" y="'.$this->getPoint()->getY().'';
        
       return $form.$style;
    }

}