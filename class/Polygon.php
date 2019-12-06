<?php

class Polygon extends Form2d
{
    /** Point 1
     * @var Point 1 premier point de depart du poligone
     */
    private $p1;

    /** Point collection
     * @var array inside the points 
     */
    private $points;
    
    public function __construct()
    {
        parent::__construct();
        $this->points = [];
        //$this->p1= $this->getPoint();
       // $this->points[]=$this->p1;
    }

    /**
     * Get inside the points collections
     *
     * @return  array
     */ 
    public function getPoints()
    {
        return $this->points;
    }

   
    
    public function addPoints(int $x=1, int $y=1)
    {
        $this->points[] = new Point($x, $y);

        return $this;
    }
    
    public function draw()
    {
        $pointString='"';
        foreach ($this->points as $point) {
            $pointString.= $point->getX().',';
            $pointString.= $point->getY().' ';
        }
        $pointString.= '"';

        $style = ' style="fill:'.$this->getFillColor().';'. 'fill-rule:'.$this->getFillRule(). ';stroke-width:'.$this->getStrokeWidth().';stroke:'.$this->getStrokeColor().'"/>';
        $form = '<polygon points='. $pointString;
        
       return $form.$style;
    }

    public function caculate(int $x, int $y, int $sides, int $large)
    {   
        $poinsCalcul= [];
        for ($i=0 ; $i < $sides; $i++) { 
            $poinsCalcul[]= $x + $large((cos(120)));
            $poinsCalcul[]= $x + $large((sin(120)));
        }
    }

}