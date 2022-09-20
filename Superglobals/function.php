<?php
function getProjectName()
{

    $script  = ($_SERVER['SCRIPT_NAME']);
    $projectname  = explode('/', $_SERVER['SCRIPT_NAME'])[2];

    $project = ($_SERVER['REQUEST_URI']);

    echo "Script name is =" . $script . '<br>';

    echo "Request url is = " . $project . '<br>';
    echo "File Project Name is = " . $projectname;
}
getProjectName();

echo "<br>";
echo "<br>";


function getRequestName()
{
    $requesttime = $_SERVER['REQUEST_TIME'];
    //to convert from timestamp 
    $requesttime = date('Y-m-d H:i:s');
    echo $requesttime;
}
getRequestName();


echo "<br>";

function counter()
{
    session_start();
    if (!empty($_SESSION['count'])) {

        $counter = $_SESSION['count'];
    } else {
        $counter = 0;
    }
    echo "<br>";
    $counter++;
    $_SESSION['count'] = $counter;
    echo "You are Vistor number = " . $counter;
}
counter();

echo "<br>";
echo "<br>";





function setCookies()
{

    $cookie_name = "name";
    $cookie_value = "Ghayda alrabee ";
    $httponly = true;
    $domain = $_SERVER['SERVER_NAME'];
    $secure = false;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", $domain, $secure, $httponly); // 86400 = 1 day



    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {

        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        // echo "httponly is: " . $_COOKIE[$httponly];
        // echo "domain is: " . $_COOKIE[$domain];
        // echo "secureis: " . $_COOKIE[$secure];

    }
}

setCookies();
unset($_COOKIE["name"]);

//
