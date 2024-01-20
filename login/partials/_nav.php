<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg">
<div class="container">
    <a class="navbar-brand" href="/STRIFF-PROJECT/login/login.php">
        <i class="bi-back"></i>
        <span>STRIFF</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    ';

if ($loggedin) {

    echo '<div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-5 me-lg-auto">
        <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_1">Home</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_2">Explore</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_3">Make it run</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_4">FAQ</a>
        </li>';
}

if (!$loggedin) {
    echo
    '<ul class="navbar-nav ms-lg-5 me-lg-auto">
    <li class="nav-item">
        <a class="nav-link click-scroll" href="/STRIFF-PROJECT/login/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link click-scroll" href="/STRIFF-PROJECT/login/signup.php">Signup</a>
      </li>';
}
if ($loggedin) {
    echo '<li class="nav-item">
        <a class="nav-link click-scroll" href="/STRIFF-PROJECT/login/logout.php">Logout</a>
      </li>';
}


echo '</ul>
  </div>
</nav>';
