<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <h1 class="blog-title">Blog</h1>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <!-- Authentication Links -->
                <?php if (!isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=UsersController&action=register">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=UsersController&action=login">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['user']['username']?>  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?controller=PostsController&action=add">
                                Add Entry
                            </a>

                            <a class="dropdown-item" href="index.php?controller=UsersController&action=logout">
                                Logout
                            </a>


                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>