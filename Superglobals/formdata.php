 <?php

    //The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

    if (isset($_POST) && !empty($_POST)) {

        //to check if the data sent and not empty 

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];


        if ($_POST['firstname']) {

            // if there any field is empty don't print field value 

            echo "first name is $firstname  " . "<br>";
        }

        if ($_POST['lastname']) {

            echo " last name is $lastname " . "<br>";
        }

        if ($_POST['email']) {

            echo "  my email is $email " . "<br>";
        }

        if ($_POST['password']) {

            echo "  and the password : $password " . "<br>";
        }
    } else {
        echo "No Submit data ! ";
    }



    ?>