<?php
    include('core.php');

    $dbContext = dbInit();

    function retrieveFormFields() {
        $fields = array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        );
        
        return $fields;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $formFields = retrieveFormFields();

        $query = "SELECT * FROM users WHERE 
                    email = '" . $formFields['email'] . 
                    "' AND password = '" . $formFields['password'] . "'";

        $result = $dbContext->query($query);

        $dbContext->close();

        if ($result->num_rows == 1) {
            session_start();
            $_SESSION['name'] = $result->fetch_object()->fullName;
            echo "<script>alert('Successful!'); window.location.href = '../index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid username or password!'); window.location.href = '../pages/login.php';</script>";
            exit();
        }
    }
?>