<?php  include('../config.php'); ?>
        <?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
        <?php include(ROOT_PATH . '/admin/includes/header.php'); ?>
        <title>Chef | Dashboard</title>
</head>
<body>
        <div class="header">
                <div class="logo">
                        <a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
                                <h1>Recipe Blog - Chef</h1>
                        </a>
                </div>
                <?php if (isset($_SESSION['user'])): ?>
                        <div class="user-info">
                                
                                <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
                        </div>
                <?php endif ?>
        </div>
        <div class="container dashboard">
                <h1>Welcome       <span><?php echo $_SESSION['user']['username'] ?></span>! &nbsp; &nbsp; </h1>
                <div class="stats">
                        <a href="users.php" class="first">
                                <span>43</span> <br>
                                <span>Newly registered users</span>
                        </a>
                        <a href="posts.php">
                                <span>43</span> <br>
                                <span>Published posts</span>
                        </a>
                        <a>
                                <span>43</span> <br>
                                <span>Published comments</span>
                        </a>
                </div>
                <br><br><br>
                <div class="buttons">
                        <a href="users.php">Add Users</a>
                        <a href="create_recipe.php">Add Recipe</a>
                </div>
        </div>
</body>
</html>