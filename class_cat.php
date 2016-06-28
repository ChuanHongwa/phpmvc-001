<?php
class Cat
{   
    public $name; //屬性
    protected $position;
    
    public function __construct($name)//方法 建構子
    {
        $this->name = $name;
        $this->position = ['x'=>0, 'y'=>0];
    }        
    
    public function moveTo($x, $y)
    {
        $this->position['x'] = $x;
        $this->position['y'] = $y;
        
        return $this->position;
    }    
    
    public function resetPosition()
    {
        $this->moveTo(0,0);
        
        return $this->position;
    }        
    
    protected function innerFunction()
}

 