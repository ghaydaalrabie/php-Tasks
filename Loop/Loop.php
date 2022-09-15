
<?php
// Q1: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
// hyphen(-) at the starting and ending position.
// Expected Output: 1-2-3-4-5-6-7-8-9-10


for ($i = 1; $i <= 10; $i++) {
    if ($i == 1) {
        echo $i;
    } else {
        echo " - " . $i;
    }
}
echo "<br><hr>";


//Q2 :  Create a script using a for loop to add all the integers between 0 and 30 and display the total.
// Expected Output = total as a number


$sumNums = 0;
for ($i = 0; $i <= 30; $i++) {
    $sumNums += $i;
}
echo "Total = " . $sumNums;
echo "<br>";
echo "<br>";
echo "<hr>";




//Q3: Create a script to construct the following pattern, using nested for loop.

// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E




$str = 'A';
for ($i = 1; $i <= 5; $i++) {
    for ($x = 5 - $i; $x > 0; $x--)
        echo "A ";
    for ($y = 1; $y <= $i; $y++)
        echo "$str ";
    echo "<br>";
    $str++;
}
echo "<br>" . "<br>" . "<br>";
echo "<hr>";



//Q4: 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5

$str2 = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($x = 5 - $i; $x > 0; $x--)
        echo "1 ";
    for ($y = 1; $y <= $i; $y++)
        echo "$str2 ";
    echo "<br>";
    $str2++;
}

echo "<br>" . "<br>" . "<br>";
echo "<hr>";


// Q5. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5


for ($i = 1; $i <= 5; $i++) {
    for ($x = 1; $x <= 5; $x++) {
        if ($i == $x) {
            echo " " . $i . " ";
        } else {
            echo " 0 ";
        }
    }
    echo "<br>";
}
echo "<hr>";

// Q6. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120.

function factorialNum($num)
{
    $result = 1;
    for ($i = $num; $i >= 1; $i--) {
        $result *= $i;
    }
    echo $num . "=" . $result;
}
factorialNum(5);
echo "<hr>";




//Q7. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two
// numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
// so on.

$x = 0;
$y = 1;
echo "0" . ",";
echo "1" . ",";
for ($i = 0; $i < 7; $i++) {
    $z = $x + $y;
    echo $z . ",";
    $x = $y;
    $y = $z;
}


echo "<br>" . "<br>" . "<br>";
echo "<hr>";




//Q8. Write a program which will count the "c" characters in the text "OrangeAcademy".


//substr(string,start,length)


$count = 0;
$text = "OrangeAcademy";
$char = "c";
for ($i = 0; $i < strlen($text); $i++) {
    if (substr($text, $i, 1) == $char) {
        $count += 1;
    }
}
echo $count . "<hr>";

//Q9. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag.


echo "<table style='border: 1px solid black; border-collapse: collapse;' cellpadding='3px' and cellspacing='0px'><tbody>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {

        echo "<td style='border: 1px solid black;'>" . $i . " * " . $j . " = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
echo "<hr>";





//Q10. Write a PHP program which iterates the integers from 1 to 50. For multiples of
// three print "Fizz" instead of the number and for the multiples of five print "Buzz".
// For numbers which are multiples of both three and five print "FizzBuzz".


for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . "<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz" . "<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz" . "<br>";
    }
}
echo "<hr>";


// (11) Write a PHP program to generate and display the first n lines of a Floyd triangle 


for ($i = 1; $i <= 5; $i++) {
    if ($i == 1) {
        echo "1" . "<br>";
    }
    if ($i == 2) {
        echo "2 3" . "<br>";
    }
    if ($i == 3) {
        echo "4 5 6" . "<br>";
    }
    if ($i == 4) {
        echo "7 8 9 10" . "<br>";
    }
    if ($i == 5) {
        echo "11 12 13 14 15" . "<br>";
    }
}

echo "<br>" . "<br>" . "<br>";
echo "<hr>";



//Q12  Write a PHP program to print alphabet pattern.

// &nbsp = non-breaking space	


$L =  range('A', 'E');
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo " " . $L[$j] . " ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($j = 5; $j >= $i; $j--) {
        echo "&nbsp";
    }
    for ($j = 0; $j < $i; $j++) {
        echo " " . $L[$j] . " ";
    }
    echo "<br>";
}
