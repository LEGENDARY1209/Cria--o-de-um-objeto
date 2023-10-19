<?php
class Car
{
        public $color = 'red';
        public $numberOfTires = 4;

         public function _construct($color)
        {
            $this->color = $color;
        }

         public function setColor($val)
        {
               $this->color = $val;
        }

        public function getColor()
        {
            return $this->color;
        }
}

$bmw = new Car("white");

echo $bmw->getColor(); //isso imprimirá "branco" porque nosso construtor atribuiu o valor "branco" à propriedade color

echo $bmw->setColor("black"); // isso irá sobrescrever a propriedade da cor para preto  

echo $bmw->getColor();
?>