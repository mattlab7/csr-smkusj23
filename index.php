<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMK USJ 23</title>

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap JS and its prerequisites -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
        session_start();
    ?>
</head>
<body class="bg-dark text-light">
    <!-- Navbar -->
    <?php include('components/nav.php') ?>
    <!-- Content body -->
    <div class="container mt-4 text-center">
        <img src="https://upload.wikimedia.org/wikipedia/ms/7/79/Sekolah_Menengah_Kebangsaan_USJ_23.png" alt="Logo SMK USJ 23" class="py-3">
        <h1>Welcome to <strong>SMK USJ23</strong><?php echo isset($_SESSION['name']) ? ', ' . $_SESSION['name'] : '' ?> </h1>
        <p><u>Sekolah Menengah Kebangsaan USJ 23</u> or its short name <em>SMK USJ 23</em>, is a secondary school that is located at Jalan Harmoni.</p>
        <p>In 2009, the school logged an amount of 1391 students and 87 teachers.</p>
        <cite>Sekolah Menengah Kebangsaan USJ 23. (2017, January 19). Wikipedia. Retrieved from <a href="https://ms.wikipedia.org/wiki/Sekolah_Menengah_Kebangsaan_USJ_23">ms.wikipedia.org</a></cite>
    </div>
</body>
</html>