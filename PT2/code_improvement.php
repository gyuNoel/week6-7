<?php
/** 
*Calculates the total price of items in a shopping cart.
* @param array $items Array for price reference
* @return float Total monetary amount of items in a shopping cart

*/
$items = [
	['name' => 'Widget A', 'price' => 10],
	['name' => 'Widget B', 'price' => 15],
	['name' => 'Widget C', 'price' => 20],
];

function calculateTotalPrice(array $items):float{
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

echo "Total price: $" . calculateTotalPrice($items) . "<br>";

// _________________________________________________________________________________

/**
 * Given a string, this remove the spaces present in the string and convert the lettercase to lowercase
 *  @param string $string Given string
 *  @return $lowercaseNoSpaceString 
 */


function remove_space_convert_lowercase(string $string):string{
    $string = str_replace(" ","",$string);
    $lowercaseNoSpaceString = strtolower($string);
    return $lowercaseNoSpaceString;
}


$string = "This is a poorly written program with little structure and readability.";
echo "\n\nModified string: " . remove_space_convert_lowercase($string);
echo "<br>";

// _________________________________________________________________________________


/**
 * A number given is checked if it is odd or even
 *  @param int $number Given string
 *  @return string statement if number is odd or even  
 */

$number = 42;

function odd_or_even_checker (int $number):string{
    return ($number % 2 == 0) ? "The number ". $number . " is even." : "The number ". $number . "is odd.";
}

echo odd_or_even_checker($number);