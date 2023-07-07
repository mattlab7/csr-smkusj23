<?php
    include('core.php');
    include('ROT13.php');
    include('debug.php');

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
        $formFields['password'] = encryptPassword($formFields['password']);

        $query = "SELECT * FROM users WHERE 
                    email = '" . $formFields['email'] . 
                    "' AND password = '" . $formFields['password'] . "'";

        $result = $dbContext->query($query);

        $dbContext->close();

        if ($result->num_rows == 1) {
            session_start();

            $result = $result->fetch_object();
            console_log($result);

            $_SESSION['name'] = $result->fullName;
            $_SESSION['id'] = $result->id;

            console_log($_SESSION);


            echo "<script>alert('Successful!'); window.location.href = '../index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid username or password!'); window.location.href = '../pages/login.php';</script>";
            exit();
        }
    }
?>