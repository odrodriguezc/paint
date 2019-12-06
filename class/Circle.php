<?php


class Circle extends Ellipse
{
    
    public function __construct(int $radio)
    {
        parent::__construct($radio,$radio);
    }
}