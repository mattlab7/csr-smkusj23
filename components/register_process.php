<?php
    include('debug.php');
    include('core.php');

    session_start();
    $dbContext = dbInit();

    function retrieveFormFields() {
        $fields = array(
            'fullName' => $_POST['fullName'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'class' => $_POST['class'],
            'address' => $_POST['address']
        );
        
        return $fields;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $formFields = retrieveFormFields();
        console_log($formFields);
        
        $query = "SELECT * FROM users WHERE email = '" . $formFields['email'] . "'";
        $result = $dbContext->query($query);

        if ($result->num_rows > 0) {
            echo "<script>alert('Username or email already exists!'); window.location.href = '../pages/register.php';</script>";

        } else {
            $query = "INSERT INTO users (fullName, email, password, address, class) 
                        VALUES ('". $formFields['fullName'] . "','" 
                                . $formFields['email'] . "','"
                                . $formFields['password'] . "','"
                                . $formFields['address'] . "','" 
                                . $formFields['class'] ."')";

            if ($dbContext->query($query) === true) {
                echo "<script>alert('Successful!'); window.location.href = '../index.php';</script>";
            } else {
                echo "<script>alert('Error! " . $dbContext->error . "'); window.location.href = '../pages/register.php';</script>";
            }
        }
        
        $dbContext->close();
    }
?>