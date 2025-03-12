<?php

    class Combinado{
        public string $nombre;
        public bool $alcohol;
        public float $precio;
        public array $ingredientes;

        public function __construct(string $nombre, bool $alcohol, float $precio, array $ingredientes)
        {
            $this-> nombre = $nombre;
            $this-> alcohol = $alcohol;
            $this-> precio = $precio;
            $this-> ingredientes = $ingredientes;
        }
    }
  

?>