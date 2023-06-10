<?php
    include('../components/debug.php');

    function retrieveFormFields() {
        $fields = array(
            'fullName' => $_POST['email'],
            'password' => $_POST['password'],
        );
        
        return $fields;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $formFields = retrieveFormFields();
        console_log($formFields);
    }
?>