<?php



//Q1 




function IsPrime($n)
{
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$a = IsPrime(7);
if ($a == 0)

    echo ' Q1= This is not a Prime Number.....' . "\n";
else
    echo ' Q1= This is a Prime Number..' . "\n";

echo "<br>";
echo "<br>";


// Solution number 2 :
// $num = 13;
// $count = 0;
// for ($i = 1; $i <= $num; $i++) {
//     if (($num % $i) == 0) {
//         $count++;
//     }
// }
// if ($count < 3) {
//     echo "$num is a prime number.";
// } else {
//     echo "$num is not a prime number.";
// }


// echo "<br>";
// echo "<br>";



//Q2 


// The strrev() function is a built-in function in PHP and is used to reverse a string


function Reverse($str)
{
    return strrev($str);
}

$str = "GHAYDA ";
echo Reverse($str);

echo "<br>";
echo "<br>";



//Q3 

function check_lowercase_string($string)
{
    return ($string === strtolower($string));
}

$string = 'Hi! I am a ghayda';
var_dump(check_lowercase_string ($string)) ;
echo "<br>";
var_dump(check_lowercase_string('ghayda'));
echo "<br>";
var_dump(check_lowercase_string('ghAyda'));



echo "<br>";
echo "<br>";

//Q4 

$x = 20;
$y = 40;
function swapValues($x, $y)
{
    $z = $x;
    echo "x=" . $x = $y;
    echo "<br>";
    echo "y=" . $y = $z;
}
echo "Q4= " ;

echo "<br>";

swapValues($x, $y);

echo "<br><br>";



echo "<br>";
echo "<br>";



//Q6 

// Armstrong number Like :
// 407 = (4*4*4) + (0*0*0) + (7*7*7)  
//     = 64 + 0 + 343  
//     = 407 


function armstrongCheck($number)
{
    $sum = 0;
    $x = $number;
    while ($x != 0) {
        $num = $x % 10;
        $sum = $sum + $num * $num * $num ;
        $x = $x / 10;
    }

    // if true then armstrong number
    if ($number == $sum)
        return 1;

    // not an armstrong number   
    return 0;
}

$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "Yes $number is an armstorng number ";
else
    echo "No $number it's not an armstrong number ";




echo "<br>";
echo "<br>";

//Q7 

function palindrome($input)
{
    $middle = strlen($input) / 2;
    $firstHalf = substr($input, 0, floor($middle));
    $secondHalf = substr($input, ceil($middle));
    return $firstHalf == strrev($secondHalf);
}

echo palindrome("racecar") ? "Palindrome" : "Not a palindrome";




echo "<br>";
echo "<br>";


// The strrev() function is a built-in function in PHP and is used to reverse a string

function check_palindrome($string)
{
    if ($string == strrev($string))
        return 1;
    else
        return 0;
}
echo check_palindrome('mum') . "\n";

echo "<br>";
echo "<br>";



//Q8

//The array_unique() function removes duplicate values from an array.
//array_unique(array, sorttype)

$arr = [1, 2, 4, 2, 5];
function removeDuplicate($arr)
{
    $arr = array(1, 2, 2, 3);
    $array = array_unique($arr);
    echo $array;
}


$data = [2, 4, 7, 4, 8, 4];
echo print_r(array_unique($data));



echo "<br>";
echo "<br>";






// Logical Statements and Operators 


// (1) Write a PHP script to see if the specified year is a leap year or not. 


function year_check($my_year)
{
    if ($my_year % 400 == 0)
        print " Q1=" .  ("It is a leap year");
    else if ($my_year % 100 == 0)
        print " Q1=" .  ("This year is not a leap year");
    else if ($my_year % 4 == 0)
        print " Q1=" . ("It is a leap year");
    else
        print " Q1=" .  ("This year is not a leap year");
}
$my_year = 2019;
year_check($my_year);

// Solution 2 :


echo "<br>" . "<br>";


function isLeep($y)
{
    if (($y % 400 == 0) || ($y % 100 == 0) || ($y % 4 == 0)) {
        echo "$y : is a Leap Year.";
    } else {
        echo "$y : is not a Leap Year.";
    }
    echo "<br>";
}
isLeep(1991);
isLeep(2000);

echo "<br>" . "<br>";




// function checkLeapYear($year) {
//     return checkdate(2, 29, $year);
// }
// echo checkLeapYear(2016) ? "2016 is a leap year." : "2016 is not a leap year. ";
// echo '<br/>';
// echo checkLeapYear(2017) ? "2017 is a leap year." : "2017 is not a leap year. ";






// (2) Write a PHP script to check the season depending on the inserted temperature
//  if the temperature is below 20, we are in winter otherwise the season is summer. 


function season_check($temp)
{
    if ($temp < 20)
        print " Q2=" .  ("It is a wintertime!");
    else {
        print " Q2=" .  ("It is a summertime!");
    }
}
$temp = 22;
season_check($temp);

echo "<br>" . "<br>";



// (3) Write a PHP script to calculate the sum of the two integers. 
// If the two values are the same, then calculate the triple of their sum. 


// function integerSum($arr)
// {


//     if ($arr[0] == $arr[1]) {
//         $sum = array_sum($arr);
//         echo " Q3=" . ($sum * 3);
//     } else {
//         $sum = array_sum($arr);
//         echo " Q3=" . $sum;
//     }
// }
// $arr = array(2, 2);
// integerSum($arr);

// echo "<br>" . "<br>";



//solutuon 2 :

function getSum($fNum, $sNum)
{
    if ($fNum == $sNum) {
        $sum = ($fNum + $sNum) * 3;
        echo "Q3=".$sum;
    } else {
        echo "The Numbers are not have same values ";
    }
    echo "<br>";
}
getSum(3, 3);


echo "<br>" . "<br>";



// (4) Write PHP to check if the sum of the two given numbers equals 30, 
// if the condition is true the return their sum otherwise return false 


function integerSums($arr)
{

    $sum1 = array_sum($arr);
    if ($sum1 == 30) {
        echo " Q4=" . $sum1;
    } else {
        echo " Q4=" .  "False";
    }
}

$arr = array(10, 10);
integerSums($arr);
echo "<br>" . "<br>";


// (5) Write in PHP script to check if the given positive number is a multiple of 3.



function postiveNum($num)
{


    if ($num % 3 == 0) {
        echo   "the number is multiple of 3";
    } else {
        echo  " False";
    }
}
$num = 22;
postiveNum($num);

echo "<br>" . "<br>";



// (6) Write a PHP script to check if the integer value is in the range of [20-50] inclusive. 


function integerValue()
{
    $num2 = 50;

    if ($num2 > 20 && $num2 <= 50) {
        echo " Q6=" . "True";
    } else {
        echo " Q6=" . "False";
    }
}
integerValue();
echo "<br>" . "<br>";







// (7) Write PHP script to find the largest number between the three integers 


function largestNumbs($arr)
{

    $largest = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > $largest) {
            $largest = $arr[$i];
        } else {
            $largest = $arr[0];
        }
    }
    echo " Q7=" . $largest;
}

$arr = array(1, 5, 9);
largestNumbs($arr);

echo "<br>" . "<br>";

//Solution 2 :

function getMax($n1, $n2, $n3)
{
    if (($n1 > $n2) && ($n1 > $n3)) {
        echo "The largest number is $n1";
    } elseif (($n2 > $n1) && ($n2 > $n3)) {
        echo "The largest number is $n2";
    } elseif (($n3 > $n1) && ($n3 > $n1)) {
        echo "The largest number is $n3";
    } else {
        echo "False";
    }
    echo "<br>";
}
getMax(13, 11, 24);

echo "<br>" . "<br>";



// (8) Write PHP script to calculate the monthly electricity bill according to these rules:
// a. For first 50 units - 2.50 JOD/Unit
// b. For next 100 units - 5.00 JOD/Unit
// c. For next 100 units - 6.20 JOD/Unit 
//d. For units above 250 - 7.50 JOD/Unit 


function monthlyCalc($bill)
{

    if ($bill <= 50) {
        echo $bill * 2.5 . " JOD ";
    } elseif ($bill <= 150) {
        echo (50 * 2.5 + ($bill - 50) * 5) . " JOD ";
    } elseif ($bill <= 250) {
        echo (50 * 2.5 + 100 * 5 + ($bill - 150) * 6.2) . " JOD ";
    } else {
        echo (50 * 2.5 + 100 * 5 + 100 * 6.2 + ($bill - 250) * 7.5) . " JOD ";
    }
}
$bill = 250;
monthlyCalc($bill);
echo "<br>" . "<br>";





//solution 2 :



// function calElecBill($units)
// {
//     if ($units <= 50) {
//         $bill = $units * 2.50;
//     } elseif ($units > 50 && $units <= 100) {
//         $fUnits = 50 * 2.50;
//         $sUnits = ($units - 50) * 5.00;
//         $bill = $fUnits + $sUnits;
//     } elseif ($units > 100 && $units <= 200) {
//         $fUnits = 50 * 2.50;
//         $sUnits = 100 * 5.00;
//         $tUnits = ($units - 150) * 6.20;
//         $bill = $fUnits + $sUnits + $tUnits;
//     } else {
//         $fUnits = 50 * 2.50;
//         $sUnits = 100 * 5.00;
//         $tUnits = 100 * 6.20;
//         $fourUnits = ($units - 250) * 7.50;
//         $bill = $fUnits + $sUnits + $tUnits + $fourUnits;
//     }
//     echo $bill;
//     echo "<br><hr>";
// }
// calElecBill(50);


echo "<br>" . "<br>";




// (9) Write php script to make a calculator, the calculator should contain the four main operations 
//  e. Addition f. Subtraction g. Multiplication h. Division


function calculator($num1, $num2)
{


    echo "Addition for the two numbers is :" . ($num1 + $num2) . "<br>";
    echo "Subtraction for the two numbers is :" . ($num1 - $num2) . "<br>";
    echo "Multiplication for the two numbers is :" . ($num1 * $num2) . "<br>";
    echo "Division for the two numbers is :" . ($num1 / $num2) . "<br>";
}

$num1 = 21;
$num2 = 7;
calculator($num1, $num2);
echo "<br>" . "<br>";


// (10) Write php script to check if a person is eligible to vote, minimum age required for voting is 18. 


function minimun($age)
{

    if ($age > 18) {
        echo "You are eligible to vote";
    } else {
        echo "is no eligible to vote";
    }
}

minimun(15);

echo "<br>" . "<br>";


// (11) Write php script to check whether a number is positive, negative or zero 

// The is_numeric() function checks whether a variable is a number or a numeric string.
//This function returns true (1) if the variable is a number or a numeric string, otherwise it returns false/nothing.



function checkNumber($num)
{
    if (is_numeric($num) == 1) {
        if ($num > 0) {
            echo "Number is a Positive Number";
        } elseif ($num < 0) {
            echo "Number is a Negative Number";
        } elseif ($num == 0) {
            echo "Number is a Zero Number";
        }
    } else {
        echo "Not a Number";
    }
    echo "<br>";
}
checkNumber(-10);
echo "<br>" . "<br>";


// (12) Write a PHP to find the grade for the student, after calculating the average of his score in all the subject:



$marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
$average = (array_sum($marks) / count($marks));
if ($average < 100 && $average > 90) {
    echo "Your garde is A";
}
if ($average < 90 && $average > 80) {
    echo "Your garde is B";
}
if ($average < 80 && $average > 70) {
    echo "Your garde is C";
}
if ($average < 70 && $average > 60) {
    echo "Your garde is D";
}
if ($average < 60) {
    echo "Your garde is F";
}
