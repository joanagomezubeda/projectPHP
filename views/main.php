<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
    <script src="assets/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo ROOT_PATH; ?>">Shareboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="<?php echo ROOT_PATH;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo ROOT_PATH;?>shares">Shares</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <?php if(isset($_SESSION['is_logged_in'])): ?>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="<?php echo ROOT_PATH;?>users/login">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo ROOT_PATH;?>users/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="<?php echo ROOT_PATH;?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo ROOT_PATH;?>users/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary-outline" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="row">
            <?php Messages::display(); ?>
            <?php require ($view); ?>
        </div>
    </div>
</div>
</body>
</html>