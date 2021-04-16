<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Login && Sign up</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<!-- just Main -- need to add the nav, footer and template background -->
<div class="container">
    <div class="row">
        <!-- Login -->
        <div class="col-md-6">
            <h2>Login here!</h2>
            <!-- login form -->
            <form action="authentification.php" method="POST">
                <!-- User Name -->
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <!-- END User Name -->
                <!-- Password -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <!-- END Password -->
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <!-- END login form -->
        </div>
        <!-- END Login -->
        </div>
</div>
<!-- End Main -->

</body>
</html>
