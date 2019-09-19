<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
    <div class="flex-container">
        <div class="formbox">
            <h4 class="form-head"><i class="fas fa-sign-in-alt" style="margin-right: 1em;"></i>Login</h4>
            <form class="form-control" action="login.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <input class="form-field" type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email Address" />
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input class="form-field" type="password" name="password" id="password" placeholder="Password" />
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>

                <div>
                    <button type="submit" class="btn-submit">Login</button>
                </div>
                  <p class="forgot-password">Don't have an account? <a href="register.php">Sign up now</a>.</p>
            </form>
            <!-- <div class="forgot-password">
                <a href="forgot-password.php">
                    Forgot Password?
                </a>
            </div> -->
        </div>

    <div>
</body>

</html>