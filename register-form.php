
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration</title>
  <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./css/register.css" />
</head>

<body>
  <div class="container">
    <div>
      <div class="form-head">
        <i class="fas fa-user-plus" style="margin-right: 1em;"></i>
        Register
      </div>
    </div>
    <form action="register.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <input class="input-control" type="text" name="firstname" placeholder="First name" value="<?php echo $firstname; ?>" required />

        <input class="input-control " type="text" name="lastname" placeholder="Last name" value="<?php echo $lastname; ?>" required />
      </div>
      <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
        <input class="input-control" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required />
        <span class="help-block"><?php echo $email_err; ?></span>
      </div>
      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input class="input-control" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required />
        <span class="help-block"><?php echo $password_err; ?></span>
      </div>
      <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
        <input class="input-control" type="tel" name="phone" placeholder="Phone number" value="<?php echo $phone; ?>" required />
        <span class="help-block"><?php echo $phone_err; ?></span>
      </div>
      <div class="form-group">
        <button class="btn-purple input-control">Register</button>
      </div>
    </form>
    <div class="have-acct">
      <span>Already have an account?</span>
      <a href="login.php">Sign in</a>
    </div>
  </div>
</body>

</html>