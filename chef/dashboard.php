<?php  include('../config.php'); ?>
        <?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
        <?php include(ROOT_PATH . '/admin/includes/header.php'); ?>
        <title>Chef | Dashboard</title>
<style>
    body {
      background-image: url("../static/images/scrolling12.png"); background-size: cover; background-repeat: no-repeat; height: 100%;
    }
</style>
</head>
<body>
        <div class="header">
                <div class="logo">
                        <a href="<?php echo BASE_URL .'chef/dashboard.php' ?>">
                                <h1>Foodmania Blog </h1>
                        </a>
                </div>
                <?php if (isset($_SESSION['user'])): ?>
                        <div class="user-info">
                                
                        <span>Welcome <?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;  <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Logout</a>
                        </div>
                <?php endif ?>

                </div>

                <div class="container content"  >
                <!-- Left side menu -->
                <?php include(ROOT_PATH . '/chef/includes/menu.php') ?>
                <!-- Middle form - to create and edit  -->
                <div class="action">
       
   
        
        </div>
        </div>
        
</body>
</html>