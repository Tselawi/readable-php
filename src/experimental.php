<?php
//declare(strict_types=1);

#TODO: replace unclear variables names to clears names
#TODO: declares clears functions names


function orderDetail($typeOfPizza, $client)
{

    echo 'Creating new order... <br>';
    $price = listPizzaPrice($typeOfPizza);

    $address = 'unknown';
        if($client == 'koen') {
        $address = 'a peniche in Liège';
        }

        elseif ($client == 'nico') {
        $address = 'somewhere in Belgium';
        }

        elseif ($client == 'students') {
        $address = 'BeCode office';
        }

        $toPrint = "A {$typeOfPizza}  pizza should be sent to  {$client}.  <br>The address: {$address}.";
        echo "{$toPrint} <br> The bill is €{$price}. <br> Order finished. <br><br>";
        return $toPrint;
}

function listPizzaPrice($pizzaType)
{
    $price=0;
    if ($pizzaType == 'margherita') {
        $price = 5;
    }
    elseif ($pizzaType == 'golden') {
        $price = 100;
    }
    elseif ($pizzaType == 'calzone') {
        $price = 10;
    }
    elseif ($pizzaType == 'hawai') {
        throw new Exception('Computer says no');
    }else{
        $price = 5;
    }

    return $price;
}
orderDetail('calzone', 'nico');
orderDetail('marguerita', 'nick');
orderDetail('golden', 'students');

