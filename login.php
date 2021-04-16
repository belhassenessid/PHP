<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Sign in && Sign up</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<!-- just Main -- need to add the nav, footer and template background -->
<div class="container">
    <div class="login-box">
        <div class="row">
            <!-- Sign in -->
            <div class="col-md-6 login-left">
                <h2>Sign in</h2>
                <!-- Sign in form -->
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
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <!-- END Submit button -->
                </form>
                <!-- END Sign in form -->
            </div>
            <!-- END Sign in -->

            <!-- Sign up -->
            <div class="col-md-6 login-right">
                <h2>Sign up</h2>
                <!-- sign up form -->
                <form action="addUser.php" method="POST">
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
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    <!-- END Submit button -->
                </form>
                <!-- END sign up form -->
            </div>
            <!-- END sign up -->
        </div>
    </div>
</div>
<!-- End Main -->

</body>
</html>
