<?php
    require_once "Combinado.php";
    
    //registar 4 combinados y ponerlos en un array
    $combinado1 = new Combinado("margarita", true, 8, ["ron", "limon", "pomelo"]);
    $combinado2 = new Combinado("gintonic", true, 12, ["ginebra", "tonica", "aceituna"]);
    $combinado3 = new Combinado("mojito", false, 10.5, ["azucar", "hielo", "menta", "fresa"]);
    $combinado4 = new Combinado("cafe", false, 3, ["cafe", "leche", "azucar"]);
    
    $combinados = [$combinado1, $combinado2, $combinado3, $combinado4];

    function mediaPrice(array $combinados) :float
    {
        $totalprecio = 0;
        $cantidad = count($combinados);

        foreach($combinados as $combinado){
            $totalprecio += $combinado -> precio;
        }

        return $totalprecio/$cantidad;
    }

    $media = mediaPrice($combinados);
    echo "La media de los combinados es $media" . PHP_EOL;

    function buscar(string $ingrediente, array $combinados):string{
        $resultados = [];

        foreach($combinados as $combinado){
            if(in_array($ingrediente, $combinado->ingredientes)){
                $resultados[]= $combinado->nombre;
            } 
        }
        //print_r($resultados);
        if(empty($resultados)){
            return "No se encuentra $ingrediente en ningún combinado";
        }
        else {
            $cadenaResultados = ""; 
            foreach ($resultados as $combi) {
                $cadenaResultados .= "En el $combi hay $ingrediente" . PHP_EOL; 
            }
            return $cadenaResultados; 
        }
    }
    
    $buscar = buscar("azucar", $combinados);
    echo $buscar;

?>