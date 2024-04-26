<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="projB.css">
        <title>Find My Movie - Login</title>
    </head>
    <body style="background-color: #4295F3">
        <h1><div class="box login">Login</div></h1>
        <form action="login.php" method="post">
            <label>Username</label>
            <input type="text" id="username" name="username"><br>
            <label>Password</label>
            <input type="password" id="password" name="password"><br>
            <button type="submit">Login</button>
        </form>
        <?php
            $dbname = 'Team_Tiger';
            $dbuser = 'cryan3';
            $dbpass = 'PY804ZP1';
            $dbhost = '127.0.0.1';
            $connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to " . $dbhost);
            mysqli_select_db($connect, $dbname) or die("Could not open the database" . $dbname);

            $verified = false;
            $result = mysqli_query($connect, "SELECT * FROM Admin_User");
            while ( $row = $result->fetch_array() ) {
                if (!empty($_POST['username']) && !empty($_POST['password'])) {
                    if ($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']) {
                        $verified = true;
                        break;
                    }
                }
            }
            if (isset($_POST['username']) && isset($_POST['password'])) {
                if ($verified) {
                    echo "<p>Your identity has been authenticated. 
                        <a href=\"https://cpsc.umw.edu/Team_Tiger/admin_page.php\">Click here </a> to go to the admin page.</p>";
                } else {
                    echo "Your username or password is incorrect.";
                }
            } else {
                echo "Please enter a username and password.";
            }

        ?>
    </body>
</html>
