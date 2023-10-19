<?php

class Car
{
        public $color = 'red';
        public $numberOfTires = 4;

         public function setColor($val)
        {
            $this->color = $val;
        }

         public function getColor()
        {
                return $this->color;
        }
}

$bmw = new Car; 
//bmw->setColor("black");
echo $bmw-> numberOfTires;

echo $bmw->getColor();
?>