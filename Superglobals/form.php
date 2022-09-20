<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="indexStyle.css" />
    <title>Register</title>
    <style>
        .content {
            margin-top: 8rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <img style="height: 550px ;" src="https://images.pexels.com/photos/3747397/pexels-photo-3747397.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-8 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Hello ! </h3>
                            </div>
                            <form action="formdata.php" method="post">
                                <div class="form-group first">
                                    <label for="firstname">First Name :</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname"  />
                                </div>
                                <div class="form-group first">
                                    <label for="lastname">Last Name :</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" />
                                </div>
                                <div class="form-group first">
                                    <label for="email">Email :</label>
                                    <input type="text" class="form-control" id="email" name="email" required />
                                </div>
                                <div class="form-group first">
                                    <label for="mobile">Mobile Number :</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" required />
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password :</label>
                                    <input type="password" class="form-control" id="password" name="password" required />
                                </div>
                                <input type="submit" value="Log in" class="btn btn-block btn-primary" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








</body>

</html>