 <!-- navbar -->
 <div>
 <div class="logo_div">
 <img src="/static/images/foodmania_logo.png" alt="" id="">
 </div>
 
 <div class="navbar">
                        
 <?php if (isset($_SESSION['user'])): ?>
                        <div class="user-info">
                                <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
                                <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Log out</a>
                        </div>
                <?php endif ?>
                        <ul>
                          <li><a class="active" href="C:\xampp\htdocs\Foodmania-Recipe-Blog\logout.php">Home</a></li>
                          <li><a href="#about">About Us</a></li>
                          <li><a href="#recipe">Your Recipe</a></li>
                          <li><a href="#">Chef's Profile</a></li>
                        </ul>
                </div>
</div>
                <!-- // navbar -->