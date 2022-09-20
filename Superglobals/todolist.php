<?php

//to open session start .

session_start();

//to check there is a post or not 
if (isset($_POST) && !empty($_POST)) {

    //to check if the list not empty 
    if (!empty($_POST['list'])) {

        $toDo = $_POST['list'];

        //if there is a session read it to make push on it
        if (!empty($_SESSION['todolist'])) {
            $arrayList = ($_SESSION['todolist']);

            // if there's no session creat empty array

        } else {
            $arrayList = array();
        }
        //add buton (push to session)
        if (isset($_POST['submit'])) {
            array_push($arrayList, $toDo);
            $_SESSION['todolist'] = $arrayList;
        }
    }
    //delete button (delete session)
    if (isset($_POST['delete'])) {
        unset($_SESSION['todolist']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <title>To-Do List</title>
    <style>
        .inf-content {
            width: 50%;
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
            margin: 0.5rem;
        }

        input {
            width: 50%;
        }

        button {
            width: 15%;
        }

        .card-body {
            background-color: #d8bfd8;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content inf-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="text" name="list" placeholder="You Can ✌...">
                                <button type="submit" name="submit">Add</button>
                                <button name="delete">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <?php

                            //check if there is to do list in session

                            if (isset($_SESSION['todolist']) && !empty($_SESSION['todolist'])) {

                                //i use for loop to print li for each text 
                                for ($i = 0; $i < count($_SESSION['todolist']); $i++) {
                            ?>

                                    <li><?php
                                        //print every single text in li (index)
                                        echo $_SESSION['todolist'][$i]; ?></li>


                            <?php

                                }
                            } ?>
                        </div>
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