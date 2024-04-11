<div class="header" style="background-color: #4E6166;">
        <div class="logo">
                <a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
                        <h1>Foodmania Blog - Admin</h1>
                </a>
        </div>
       
        <div class="user-info" >
        <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;  <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
        </div>
</div>