<?php
    include('../components/debug.php');

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
    }
?>