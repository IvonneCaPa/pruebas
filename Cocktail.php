<?php

    class Cocktail{
        public string $name;
        public bool $alcohol;
        public float $price;
        public array $ingredients;
        
        public function __construct(string $name, bool $alcohol, float $price, array $ingredients)
        {
            $this-> name = $name;
            $this-> alcohol = $alcohol;
            $this-> price = $price;
            $this-> ingredients = $ingredients;
        }
    }
  

?>