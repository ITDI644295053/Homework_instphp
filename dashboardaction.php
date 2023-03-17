<html>
    <body>
        <?php
            $username = $_POST['uname'];
            $password = $_POST['psw'];
            if ($username =="admin") {
                header("Location: dashboardadmin.php");
            } else if ($username =="owner") {
                header("Location: dashboardowner.php");
            } else if ($username =="staff") {
                header("Location: dashboardstaff.php");
            }
        ?>         
    </body>
</html>