 
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><?php echo WEBSITE_NAME; ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="books-explore.php">Explore</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#features">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#download">Contact</a>
                        </li>
                        <?php if(is_logged_in() ): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php?id=<?= $_SESSION['user_ID']?>" >Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php" >Logout</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" >Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-btn" href="register.php" >Create an Account</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
          </nav>
    </header>
    