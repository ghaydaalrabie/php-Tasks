<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../indexStyle.css" />
    <title>search</title>
    <style>
        .inf-content {
            background-color: #d8bfd8;
            width: 45%;
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
            margin-top: 10rem !important;
            margin: 0 auto;
        }

        input,
        button {
            padding: 0.5rem;
            border-radius: 10px;
            margin: auto 0.5rem;
        }
    </style>


</head>



<body>
    <div class="container">
        <div class="content inf-content">
            <div class="row text-center">
                <div class="col-xl-12 col-sm-12 mb-5">
                    <div class="rounded shadow-sm py-5 px-4">
                        <form action="" method="Get">
                            <label for="seaech">
                                <h5>Search: </h5>
                            </label>
                            <input type="url" name="url" id="search">
                            <button type="submit">GO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>





<?php

if (isset($_GET) && !empty($_GET) && ($_GET['url'])) {

    $url = $_GET['url'];

    //header() function is an inbuilt function that is used to send a raw HTTP header to a client in raw form

    header("Location: " . $url);
}


?>