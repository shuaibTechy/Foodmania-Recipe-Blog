<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/header.php'); ?>

<title>Recipe Blog | Sign up </title>
</head>
<body>
<div class="container">
        <!-- Navbar -->
                <?php include( ROOT_PATH . '/includes/nav.php'); ?>
        <!-- // Navbar -->

        <div style="width: 40%; margin: 20px auto;">
                <form method="post" action="register.php" >
                        <h2>Register on Recipe Blog</h2>
                        <?php include(ROOT_PATH . '/includes/errors.php') ?>
                        <input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
                        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                        <label for="">Select role</label>
                        <select name="role" id="select">
                                        <option value="Chef">I am a Chef</option><br>
                                        <option value="Admin">I am an Admin</option>
                        </select><br>
                        <input type="password" name="password_1" placeholder="Password">
                        <input type="password" name="password_2" placeholder="Password confirmation">
                        <button type="submit" class="btn" name="reg_user">Register</button>
                        <p>
                                Already a member? <a href="login.php">Sign in</a>
                        </p>
                </form>
        </div>
</div>
<!-- // container -->
<!-- Footer -->
        <?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->