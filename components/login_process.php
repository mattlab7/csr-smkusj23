<?php
    include('debug.php');
    include('core.php');

    session_start();
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
        console_log($formFields);

        $query = "SELECT * FROM users WHERE 
                    email = '" . $formFields['email'] . 
                    "' AND password = '" . $formFields['password'] . "'";

        $result = $dbContext->query($query);

        if ($result->num_rows == 1) {
            $_SESSION['email'] = $email;
            echo "<script>alert('Successful!'); window.location.href = '../index.php';</script>";
        } else {
            echo "<script>alert('Invalid username or password!'); window.location.href = '../pages/login.php';</script>";
        }

        $dbContext->close();
    }
?>