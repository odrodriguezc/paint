<?php

class  PaintSvg 
{   
    /** Collection
     * @var array SVG collection form */
    private $collection;

       /** Collection
     * @var string final SVG string */
    private $svgString;

    public function __construct()
    {
        $this->collection = [];
        $this->printString = '<svg width="800" height="600">';
    }

    public function addForm(Form2d $form)
    {
        $this->collection[]= $form;
    }

    public function render()
    {
    
        foreach ($this->collection as $form) {
            $this->printString .= $form->draw();
        }
        $this->printString.= '</svg>';

        return $this->printString;
     }


    /**
     * Get the value of collection
     */ 
    public function getCollection()
    {
        return $this->collection;
    }

    
}