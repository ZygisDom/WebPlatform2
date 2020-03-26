<!DOCTYPE html>
    <html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
              crossorigin="anonymous">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Coursework | Log In</title>
    </head>
    <body>
    <?php
        session_start();
        $_SESSION["username"] = "";
        $_SESSION["password"] = "";
    ?>

    <main class="login-form vertical-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header ">Log In to Continue</div>
                        <div class="card-body">
                            <form action="processlogin.php" method="POST">
                                <h5 class="d-flex justify-content-center" style="margin-bottom: 30px;margin-top: 15px;">Please Enter the Following:</h5>
                                <div class="form-group row d-flex justify-content-center">
                                    <label for="email_address">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">
                                    <label for="password">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="mx-auto" style="width: 70px; margin-top:30px;">
                                    <button type="submit" class="btn btn-primary">
                                        Log In
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
    </body>
</html>
