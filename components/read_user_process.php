<?php
    include('core.php');

    function retrieveDatabaseDetails() {

        $dbContext = dbInit();

        $query = "SELECT * FROM users WHERE id = '" . $_SESSION['id']  . "'";

        $result = $dbContext->query($query);

        $dbContext->close();

        if ($result->num_rows == 1) {
            return $result->fetch_object();
        } else {
            echo "<script>alert('Unable to get user details! Logging out...'); window.location.href = 'logout_process.php';</script>";
            exit();
        }
    }
?>
