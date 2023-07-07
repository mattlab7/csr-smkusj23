<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account :: SMK USJ 23</title>

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap JS and its prerequisites -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
        session_start();

        include('../components/read_user_process.php');

        $details = retrieveDatabaseDetails();
    ?>
</head>
<body class="bg-dark text-light">
    <!-- Navbar -->
    <?php include('../components/nav.php') ?>
    <!-- Content body -->
    <div class="container mt-4">
        <h2 class="text-center my-5">Account</h2>
        <form method="POST" action="../components/register_process.php">
            <div class="form-group">
                <label for="fullNameTextField">Full Name</label>
                <input type="text" class="form-control" id="fullNameTextField" name="fullName" placeholder="Enter full name" disabled value="<?php echo $details->fullName ?>">
            </div>
            <div class="form-group">
                <label for="emailTextField">Email address</label>
                <input type="email" class="form-control" id="emailTextField" name="email" placeholder="Enter email"  disabled value="<?php echo $details->email ?>">
            </div>
            <div class="form-group">
                <label for="classSelect">Class</label>
                <input type="text" class="form-control" id="classSelect" name="class" placeholder="Enter class" disabled value="<?php echo $details->class ?>">
            </div>
            <div class="form-group">
                <label for="addressTextArea">Address</label>
                <textarea class="form-control" id="addressTextArea" name="address" rows="3"  disabled><?php echo $details->address ?></textarea>
            </div>
        </form>
    </div>
</body>
</html>