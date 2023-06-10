<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 text-light">
    <a class="navbar-brand" href="/site/">SMK USJ23</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php
                if (isset($_SESSION['name'])) {
                    echo "<li class='nav-item'><a class='nav-link' href='/site/pages/account.php'>Account</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='/site/components/logout_process.php'>Logout</a></li>";
                } else {
                    echo "<li class='nav-item'><a class='nav-link' href='/site/pages/login.php'>Login</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='/site/pages/register.php'>Register</a></li>";
                }
            ?>
        </ul>
    </div>
</nav>