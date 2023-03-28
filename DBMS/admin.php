<?php

require("connection.php");

?>

<?php

    if (isset($_POST['login']))
    {
        $query = "SELECT * FROM `admin` WHERE `admin_username`='$_POST[username]' AND `admin_password`='$_POST[password]'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['ADMINLOGINID'] = $_POST['username'];
            header("location: memberregister.html");
        }
        else
        {
            echo "<script>alert('Incorrect Password');</script>";
        }
    }

    ?>