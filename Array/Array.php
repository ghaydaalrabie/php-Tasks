<?php



// 1. Write a script to generate the following paragraph

// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, 
// the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.


$colors = array('red', 'green', 'white');
$array = array("The memory of that scene for me is like a frame of film forever frozen at that moment: the 
 $colors[0] carpet the, $colors[1] lawn the $colors[2] house,
 the leaden sky. The new president and his first lady");


print_r($array);



echo "<br>";
echo "<br>";

// 2.	$colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// •	green
// •	red
// •	white


$arr1 = array("Green", "Red", "White");

echo "<ul>
<li>$arr1[0]</li>
<li>$arr1[1]</li>
<li>$arr1[2]</li>
</ul>";

echo "<br>" . "<br>";





// 3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
// "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
//  "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
//  "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
//   "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 


$capitals = array(
    "Algeria" => "Algiers", "Argentina" => "Buenos Aires", "Australia" => "Canberra", "Belgium" => "Minsk", "Bolivia" => "Sucre", "Bosnia & Herzegovina" => "Sarajevo", "Brazil" => "Brasilia", "Bulgaria" => "Sofia", "Cambodia" => "Phnom Penh", "Cameroon" => "Yaounde", "Canada" => "Ottawa", "Chile" => "Santiago", "China" => "Beijing", "Colombia" => "Bogota", "Costa Rica" => "San Jose", "Croatia" => "Zagreb", "Cuba" => "Havana", "Czech Republic" => "Prague", "Denmark" => "Copenhagen", "Ecuador" => "Quito", "Egypt" => "Cairo", "Finland" => "Helsinki", "France" => "Paris", "Germany" => "Berlin", "Ghana" => "Accra", "Greece" => "Athens", "Honduras" => "Tegucigalpa", "Hungary" => "Budapest", "Iceland" => "Reykjavik", "India" => "New Delhi", "Indonesia" => "Jakarta", "Iran" => "Tehran", "Iraq" => "Baghdad", "Ireland" => "Dublin", "Israel" => "Jerusalem", "Italy" => "Rome", "Jamaica" => "Kingston", "Japan" => "Tokyo", "Jordan" => "Ammman", "Kazakhstan" => "Nur-Sultan", "Kenya" => "Nairobi", "Kosovo" => "Pristina", "Kuwait" => "Kuwait City", "Lebanon" => "Beirgut", "Libya" => "Tripoli", "Lithuania" => "Vilnius", "Luxembourg" => "Luxembourg", "Madagascar" => "Antananarivo", "Malaysia" => "Kuala Lumpur", "Maldives" => "Male", "Malta" => "Vakketta", "Marshall Islands" => "Majuro", "Mexico" => "Mexico City", "Monaco" => "Monaco", "Morocco" => "Rabat", "Nepal" => "Kathmandu", "Netherlands" => "Amsterdam", "New Zealand" => "Wellington", "Nigeria" => "Abuja", "North Korea" => "Pyongyang", "Norway" => "Oslo", "Palestine" => "East Jerusalem", "Panama" => "Panama City", "Paraguay" => "Asuncion", "Peru" => "Lima", "Philippines" => "Manila", "Poland" => "Warsaw", "Portugal" => "Lisbon", "Qatar" => "Doha", "Romania" => "Bucharest", "Russia" => "Moscow", "San Marino" => "San Marino", "Saudi Arabia" => "Riyadh", "Senegal" => "Dakar", "Serbia" => "Belgrade", "Sierra Leone" => "Freetown", "Singapore" => "Singapore", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "South Africa" => "Bloemfontein, Cape Town, Pretoria", "South Korea" => "Seoul", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "Switzerland" => "Bern", "Syria" => "Damascus", "Trinidad & Tobago" => "Port of Spain", "Tunisia" => "Tunis", "Turkey" => "Ankara", "Uganda" => "Kampala", "Ukraine" => "Kiev", "United Arab Emirates" => "Abu Dhabi", "United Kingdom" =>
    "London", "United States" => "Washington D.C.", "Uruguay" => "Montevideo", "Vietnam" => "Hanoi", "Yemen" => "Sana'a", "Zimbabwe" => "Harare"
);


foreach ($capitals as $countries => $capitals) {

    print("The capital of $countries is $capitals <br>");
}

echo "<br>" . "<br>";





// 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

//The reset() function moves the internal pointer to the first element of the array.



$color = array(4 => 'white', 6 => 'green', 11 => 'red');

echo reset($color);


echo "<br>" . "<br>";



// 5.	Write a PHP script that inserts a specific new item in an array in any position.

// Sample Input:

// Array 1 2 3 4 5   
// Location: 4
// New Item: $

// Expected Output: 1 2 3 $ 4 5



//The array_splice() function removes selected elements from an array and replaces it with new elements.
//array_splice(array, start, length, array)



$arr1 = array(1, 2, 3, 4, 5);
array_splice($arr1, 3, 0, '$');

print_r($arr1);



echo "<br>" . "<br>";



// 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

//The asort() function sorts an associative array in ascending order, according to the value.
//asort(array, sorttype)



$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);

foreach ($fruits as $x => $fruits) {
    echo $x . " = " . $fruits;
    echo "<br>";
}


echo "<br>" . "<br>";



// 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,




$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);



//The rsort() function sorts an indexed array in descending order.
//The sort() function sorts an indexed array in ascending order.




echo "Average Temperature is : " . array_sum($temp) / count($temp) . "<br>";

echo "List of five lowest temperatures : ";

sort($temp);
for ($i = 0; $i < 5; $i++) {
    echo $temp[$i] . ",";
}
echo "<br>";

echo "List of five highest temperatures : ";

rsort($temp);
for ($i = 0; $i < 5; $i++) {
    echo $temp[$i] . ",";
}

echo "<br>" . "<br>" . "<br>";








// 8.	Write a PHP program to merge the following two arrays. 

// Sample Input: 

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

print_r(array_merge($array1, $array2));


echo "<br>" . "<br>" . "<br>";


// 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

// Sample Input:

// $colors = array("red","blue", "white","yellow");

// Expected Output :

// Array
// (
//     RED
//     BLUE
//     WHITE
//     YELLOW

// )



$colors2 = array("red", "blue", "white", "yellow");
$x = 0;
foreach ($colors2 as $element) {
    $colors2[$x] = strtoupper($element);
    $x++;
}
foreach ($colors2 as $element)
    echo $element . "\n";

echo "<br>" . "<br>" . "<br>";




// 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

// Sample Input:

// $colors = array("RED","BLUE", "WHITE","YELLOW");

// Expected Output :

// Array
// (
//     red
//     blue
//     white
//     yellow

// )




$colors2 = array("RED", "BLUE", "WHITE", "YELLOW");
$x = 0;
foreach ($colors2 as $element) {
    $colors2[$x] = strtolower($element);
    $x++;
}
foreach ($colors2 as $element)
    echo $element . "\n";

echo "<br>" . "<br>" . "<br>";





// 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

$array = [];
for ($i = 200; $i <= 250; $i += 4) {
    array_push($array, $i);
};
print_r($array);




echo "<br>" . "<br>" . "<br>";




//12.	Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4



// $words = array("abcd", "abc", "de", "hjjj", "g", "wer");



$longest = strlen($array[0]);
foreach ($array as $index) {
    $index_len = strlen($index);
    if ($index_len >= $longest) {
        $longest = $index_len;
    }
}
echo $longest;





$array = array("the", "this", "there", "teacher");
$longest = strlen($array[0]);

foreach ($array as $index)

    $index_len = strlen($index);
if ($index_len >= $longest) {
    $longest = $index_len;
}

echo $longest;




// $i = 0;
// $short = strlen($words[0]);
// foreach ($words as $element) {
//     if (strlen($element) < $short) {
//         $short = strlen($element);
//     }
//     $i++;
// }
// $i = 0;
// $long = strlen($words[0]);
// foreach ($words as $element) {
//     if (strlen($element) > $long) {
//         $long = strlen($element);
//     }
//     $i++;
// }






// echo "The Shortest array length is " . $short . " . " . "The longest array length is " . $long . ".";

// echo "<br>" . "<br>" . "<br>";




// 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12




//The shuffle() function randomizes the order of the elements in the array.




$r = range(11, 20);
shuffle($r);
for ($i = 0; $i < count($r); $i++) {
    echo "$r[$i] ";
}


echo "<br>" . "<br>" . "<br>";




// 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2



function lowInt($arr)
{

    $minV = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($i > 0) {
            if ($minV > $arr[$i]) {
                $minV = $arr[$i];
            }
        }
        $minV = $arr[$i];
    }
    return $minV;
}
$m = array(1, 0, 1, 12, 1);
echo lowInt($m);
