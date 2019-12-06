<?php

require_once('class/Point.php');

abstract class Form2d
{
    /** 
     * @var string chaine Hexa définissant la couleur */
    private $fillColor;
    
     /** 
     * @var string chaine Hexa définissant la couleur */
    private $strokeColor;
    
     /** 
     * @var int integer définissant la widhth */
    private $strokeWidth;
    
    /** 
     * @var float float définissant l'opacite du background */
    private $fillOpacity;
    
    /**
     * @var bool boolean determinan l'activation ou pas de la propiete evenodd
     */
    private $fillRule;

    /** 
     * @var float float définissant l'opacite du contour */
    private $strokeOpacity;
    
    /** @var Point un objet point précisant l'encrage de la form*/
    private $point;

    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
    
    
    public function __construct()
    {
        $this->fillColor = 'rgb(255,255,255)';
        $this->strokeColor = 'rgb(255,0,0)';
        $this->fillOpacity = 1;
        $this->fillRule = false;
        $this->strokeWidth = 2;
        $this->strokeOpacity = 1;
        $this->point = new Point(1,1);
       
    }
    
    
    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

    abstract public function draw();


    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
    
    /**FILLCOLOR */
    
    /** setFillColor
     * @param string fillColor background color  
     *  @return self 
     */ 
    public function setFillColor(string $fillColor)
    {
        $this->fillColor = $fillColor;
        return $this;
    }
    
    /** getFillColor
     * @param string fillColor background color  
     *  @return self 
     */ 
    public function getFillColor()
    {
        return  $this->fillColor;
    }
    
   
    /**POINT */

    public function setPoint(int $x, int $y)
    {
        $this->point = new Point($x,$y);
        return $this;
    }
    
    public function getPoint()
    {
        return $this->point;
    }
    

    /**STROKECOLOR */

    /**
     * Get the value of strokeColor
     */ 
    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    /**
     * Set the value of strokeColor
     *
     * @return  self
     */ 
    public function setStrokeColor($strokeColor)
    {
        $this->strokeColor = $strokeColor;

        return $this;
    }


    /**STROKEWIDTH */

    /**
     * Get the value of strokeWidth
     */ 
    public function getStrokeWidth()
    {
        return $this->strokeWidth;
    }

    /**
     * Set the value of strokeWidth
     *
     * @return  self
     */ 
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }

    /**STROKFILLOPACITY */

    /**
     * Get the value of fillOpacity
     */ 
    public function getFillOpacity()
    {
        return $this->fillOpacity;
    }

    /**
     * Set the value of fillOpacity
     *
     * @return  self
     */ 
    public function setFillOpacity($fillOpacity)
    {
        $this->fillOpacity = $fillOpacity;

        return $this;
    }

    /**STROKOPACITY */
    /**
     * Get the value of strokeOpacity
     */ 
    public function getStrokeOpacity()
    {
        return $this->strokeOpacity;
    }

    /**
     * Set the value of strokeOpacity
     *
     * @return  self
     */ 
    public function setStrokeOpacity($strokeOpacity)
    {
        $this->strokeOpacity = $strokeOpacity;

        return $this;
    }

    /**
     * Get boolean determinan l'activation ou pas de la propiete evenodd
     *
     * @return  bool
     */ 
    public function getFillRule()
    {
        return $this->fillRule;
    }

    /**
     * Set boolean determinan l'activation ou pas de la propiete evenodd
     *
     * @param  bool  $fillRule  boolean determinan l'activation ou pas de la propiete evenodd
     *
     * @return  self
     */ 
    public function setFillRule(bool $fillRule)
    {
        $fillRule = ($fillRule) ? 'evenodd' : 'nonzero' ;
        $this->fillRule = $fillRule;

        return $this;
    }
}