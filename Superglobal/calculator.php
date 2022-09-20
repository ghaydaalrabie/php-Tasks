<?php

$result = '';

if (isset($_POST) && !empty($_POST)) {

    $firstnum = $_POST['firstNum'];
    $secondnum = $_POST['secondNum'];
    $opraters = $_POST['operator'];

    if ($firstnum && $secondnum && $opraters) {

        switch ($opraters) {
            case '+':
                $result = $firstnum + $secondnum;
                break;

            case '-':
                $result = $firstnum - $secondnum;
                break;

            case '*':
                $result = $firstnum * $secondnum;
                break;

            case '/':
                $result = $firstnum + $secondnum;
                break;
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Calculator</title>
    <style>

        
        .inf-content {
            background-color: #d8bfd8;
            width: 50%;
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
            margin-top: 8rem !important;
            margin: 0 auto;
        }

        input,
        select,
        button {
            padding: 0.5rem;
            border-radius: 10px;
            margin: 0.5rem;
            width: 200px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="content inf-content">
            <div class="row">
                <div class="col-xl-12 col-sm-12 mb-5">
                    <div class="rounded shadow-sm py-5 px-4">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <table>
                                <tr>
                                    <td>Enter First Number</td>
                                    <td colspan="1">
                                        <input name="firstNum" type="number" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Select Operator</td>
                                    <td>
                                        <select name="operator" required>
                                            <option value="none" selected disabled hidden>Select an Operator</option>
                                            <option>+</option>
                                            <option>-</option>
                                            <option>*</option>
                                            <option>/</option>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Enter Second Number</td>
                                    <td>
                                        <input name="secondNum" type="number" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button type="submit" name="submit"> = </button></td>
                                </tr>
                                <tr>
                                    <td>Result = </td>
                                    <td><?php echo $result; ?></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>