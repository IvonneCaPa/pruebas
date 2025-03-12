<?php
    require_once "Cocktail.php";
    
    //registar 4 combinados y ponerlos en un array
    $cocktail1 = new Cocktail("margarita", true, 8, ["ron", "limon", "pomelo"]);
    $cocktail2 = new Cocktail("gintonic", true, 12, ["ginebra", "tonica", "aceituna"]);
    $cocktail3 = new Cocktail("mojito", false, 10.5, ["azucar", "hielo", "menta", "fresa"]);
    $cocktail4 = new Cocktail("cafe", false, 3, ["cafe", "leche", "azucar"]);
    
    $cocktails = [$cocktail1, $cocktail2, $cocktail3, $cocktail4];

    function averagePrice(array $cocktails) :float
    {
        $totalPrice = 0;
        $amount = count($cocktails);

        foreach($cocktails as $cocktail){
            $totalPrice += $cocktail -> price;
        }

        return $totalPrice/$amount;
    }

    $average = averagePrice($cocktails);
    echo "La media de los coctails es $average" . PHP_EOL;

    function search(string $ingredient, array $cocktails):string{
        $result = [];

        foreach($cocktails as $cocktail){
            if(in_array($ingredient, $cocktail->ingredients)){
                $result[]= $cocktail->name;
            } 
        }
        //print_r($resultados);
        if(empty($result)){
            return "No se encuentra $ingredient en ningún cocktail";
        }
        else {
            $msg = ""; 
            foreach ($result as $cock) {
                $msg .= "En el $cock hay $ingredient" . PHP_EOL; 
            }
            return $msg; 
        }
    }
    
    $search = search("azucar", $cocktails);
    echo $search;

?>