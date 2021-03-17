<?php

#TODO: replace unclear variables names to clears names
#TODO: declares clears functions names

// fw = for who
function orderDetail($typeOfPizza, $client)
{

    echo 'Creating new order... <br>';
//    $firstLetter = 'A ';
//    $firstLetter .= $typeOfPizza;
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

        $firstLetter = "A {$typeOfPizza}  pizza should be sent to  {$client}.  <br>The address: {$address}.";
        echo "{$firstLetter} <br> The bill is €{$price}. <br> Order finished. <br><br>";
}

//function total_price($price)
//    # this function we don't use it
//{
//    return $price;
//}
//
//function test($pizzaType)
//    # this function we don't use it
//{
//    echo "Test: type is {$pizzaType}. <br>";
//}

function listPizzaPrice($pizzaType)
{
    if ($pizzaType == 'unknown' || $pizzaType == "") {
        $priceList = 'unknown';
    }

    if ($pizzaType == 'marguerita') {
        $priceList = 5;
    }

    if ($pizzaType == 'golden') {
        $priceList = 100;
    }

    if ($pizzaType == 'calzone') {
        $priceList = 10;
    }

    if ($pizzaType == 'hawai') {
        throw new Exception('Computer says no');
    }

    return $priceList;
}

            function orderedPizza()
            {
//            $test= 0;
            orderDetail('calzone', 'nico');
            orderDetail('marguerita', 'nick');

            orderDetail('golden', 'students');
            }

function doneOrder($done) {
if ($done) {
        orderedPizza();
    } else {
        // Should not do anything when false
         
    }
}

doneOrder(true);