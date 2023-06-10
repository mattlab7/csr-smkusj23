<?php
    include('core.php');

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
        
        $query = "SELECT * FROM users WHERE email = '" . $formFields['email'] . "'";

        $result = $dbContext->query($query);

        $dbContext->close();

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
                session_start();
                $_SESSION['name'] = $result->fetch_object()->fullName;
                echo "<script>alert('Successful!'); window.location.href = '../index.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error! " . $dbContext->error . "'); window.location.href = '../pages/register.php';</script>";
                exit();
            }
        }
    }
?>