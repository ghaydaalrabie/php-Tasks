

<?php

// The strtoupper() function is used to convert a string into uppercase

//1  Write a PHP script to :

$name = 'Ghayda alrabee ';

echo (strtoupper($name) . "<br>");

echo (strtolower($name) . "<br>");

echo (ucfirst($name) . "<br>");

echo (ucwords($name) . "<br>");

echo "<br>";



// (2) Write a PHP script splitting the following numeric string o be a date format

//chunk_split(string,length,end)


$date = "085119";
echo (substr(chunk_split($date, 2, ":"), 0, -1) . "<br>");
echo "<br>";
echo "<br>";



// (3) Write a PHP script to check whether the sentence contains a specific word

// The strpos() function finds the position of the first occurrence of a string inside another string.
// strpos(string,find,start)



$str = "I am a full Stack developer at orange coding academy";
$found = strpos($str, "orange");
if ($found) {
    echo "Word Found";
}
echo "<br>";
echo "<br>";


// (4) Write a PHP script to extract the file name from the URL.
// strpos(string,find,start)



// The basename() function returns the filename from a path.



$path = "www.orange.com/index.php";
$file = basename($path);

echo $file;

echo "<br>";
echo "<br>";



// (5)	Write a PHP script to extract the user name from the following email ID. Sample String : 'info@orange.com'
// Expected Output : 'info'


// strpos(string,find,start)

// substr(string,start,length)
// 0 - Start at the first character in string



$email = "ghayda@orange.com";
$index1 = strpos($email, "@");
echo substr(($email), 0, $index1);
echo "<br>";
echo "<br>";


// (6) Write a PHP script to get the last three characters from the string.

// The substr() function returns a part of a string.
// Negative number - The length to be returned from the end of the string




$email1 = "info@orange.com";
echo substr(($email1), -3);
echo "<br>";
echo "<br>";


// (7) Write a PHP script to generate simple random passwords from a given string.

// The substr() function returns a part of a string.
// The strlen() function returns the length of a string.



$str1 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvxyz";
for ($i = 0; $i < strlen($str1) - 50; $i++) {
    $y = 10;
    echo (substr(($str1), $i, ($y + $i)) . "<br>");
    $y++;
}
echo "<br>";
echo "<br>";


// (8) Write a PHP script to replace the first word of the sentence with another word.

// The substr_replace() function replaces a part of a string with another string.
// substr_replace(string,replacement,start,length)



$str2 = "That new trainee is so genius";
echo str_replace("That", "Our", $str2);
echo "<br>";
echo "<br>";


// (9) Write a PHP script to find the first character that is different between two strings.

//The substr() function returns a part of a string.

//substr(string,start,length)
//start  positive number - Start at a specified position in the string


$str3 = "dragonball";
$str4 = "dragonboll";


for ($i = 0; $i < strlen($str3); $i++) {
    if (substr($str3, 1, $i) == substr($str4, 1, $i)) {
    } else {
        $index = $i;
        $char1 = substr(($str3), $i, 1);
        $char2 = substr(($str4), $i, 1);
        break;
    };
}
echo "First difference between two strings at position " . $index . ":" . " $char1" . " vs " . "$char2";
echo "<br>";
echo "<br>";



// (10) Write a PHP script to put a string in an array, use the (var_dump) to view the array.

// The explode() function breaks a string into an array.
// explode(separator,string,limit)




$str5 = "Twinkle, twinkle, little star.";
echo var_dump(explode(" ", $str5));
echo "<br>";
echo "<br>";






// (11) Write a PHP Script to print the next letter of inputted letter.
//// strpos(string,find,start)


$str6 = "abcdefghijklmnopqrstuvwxyz";
function theNext($input)
{
    global $str6;
    $position = strpos($str6, $input);
    echo substr(($str6), ($position + 1), 1);
    if ($input == "z") {
        echo "a";
    }
}
theNext("a");

echo "<br>";
theNext("z");

echo "<br>";
echo "<br>";


// (12) Write a PHP Script to insert a string at the specified position in a given string.


//str_replace(find,replace,string,count)


$str7 = "The brown fox";
echo substr_replace($str7, " quick ", 3, 0);
echo "<br>";
echo "<br>";




// (13) Write a PHP Script to remove the zeroes from the given number.

$str8 = "000065702224";
echo str_replace("0", "", $str8);
echo "<br>";
echo "<br>";



//str_replace(find,replace,string,count)


// (14) Write a PHP Script to remove part of a string.
$str9 = "The quick brown fox jumps over the lazy dog";
echo str_replace("fox", " ", $str9);
echo "<br>";
echo "<br>";


//str_replace(find,replace,string,count)

// (15) Write a PHP Script to remove trailing dashes from a string.
$str10 = "The quick brown fox jumps over the lazy dog---";
echo str_replace("---", "", $str10);
echo "<br>";
echo "<br>";


// // (16) Write a PHP Script to remove Special characters from the following string.
// $str11 = '1+2/3*2:2-3/4*3';
// echo str_replace(array('\'', '"', '+', ':', '*', '/', '-'), ' ', $str11);

// echo "<br>";
// echo "<br>";


// // (17) Write a PHP Script to select first 5 words from the following string.

// // array_slice — Extract a slice of the array
// //The explode() function breaks a string into an array.
// // explode(separator,string,limit)
// //0 - Returns an array with one element

// $str12 = "The quick brown fox jumps over the lazy dog";
// echo implode(" ", array_slice(explode(" ", $str12), 0, 5));



// echo "<br>";
// echo "<br>";


// (18) Write a PHP Script to remove comma(s) from the following numeric string.
//str_replace(find,replace,string,count)


$str13 = "2,543.12";
echo str_replace(",", "", $str13);
echo "<br>";
echo "<br>";



// (19) Write a PHP Script to print letters from 'a' to 'z'.
//The substr() function returns a part of a string.

//substr(string,start,length)

$str14 = "abcdefghijklmnopqrstuvwxyz";
for ($i = 0; $i < strlen($str14); $i++) {
    echo substr(($str14), $i, 1) . " ";
}


echo "<br>";
echo "<br>";

// (16) Write a PHP Script to remove Special characters from the following string.



//EXtra one 


$str1 = "The/quick*brown*fox/jumps*over/the/lazy+dog";
$str2= str_replace(array('\'', '"', '+', ':', '*', '/', '-'), ' ', $str1);
$str3 = implode(" ", array_slice(explode(" ", $str2), 0, 5));

echo $str3 ; 

echo "<br>";
echo "<br>";






?>