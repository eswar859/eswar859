<?php 'server.php'?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>

</head>

<body>
    <div class="container">

        <div class="header">
        </div>

        <h2>Register</h2>

    </div>

    <form action="registration.php" method="post">

        <?php include( 'errors.php') ?>

        <div>
            <label for="username">username</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password">confrom password</label>
            <input type="password" name="password_2" required>
        </div>
        <button type="submit" name="login-user">login</button>
        <P>Already a user?<a href="login.php"><b>login</b></a></p>
        <p>Not user?<a href="registration.php"><b>Register here</b></a>
        </p>
    </form>
</body>

</html>