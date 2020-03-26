<html>
<body>

<?php
    // Start a new session
    session_start();

    // Retrieve username and password submitted by user
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establishing connection to the database
    $conn = mysqli_connect("localhost", "root", "", "webplatdb");
    mysqli_select_db($conn, "webplatdb");

    // Protection against malicious SQL injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // SQL Query to compare submitted data to the database
    $result = mysqli_query($conn,"select * from students where username = '$username' and password= '$password'") or die("Database query failed".mysqli_error());
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location: /webplat/home.php");
    } else {
        header("Location: /webplat/login.php");
    }

    mysqli_close($conn);

    ?>
</body>
</html>