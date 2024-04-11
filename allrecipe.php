


<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?> 
<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php $recipes = getPublishedRecipes(); ?>


       
</head>
<body>
        <!-- container - wraps whole page -->

       
        <div class="container">
                <!-- navbar -->
                <!-- navbar -->
 <div>
 <div class="logo_div">
 <img src="static\images\foodmania_logo.png" alt="" id="logo">
 </div>
 
 <div class="navbar">
                        
                        <ul>
                        <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Home</a></li>
                          <li><a href="about_us.php">About Us</a></li>
                          <li><a href="allrecipe.php">Your Recipe</a></li>
                          <li><a href="contact.php">Contact</a></li>
                        </ul>
                </div>
</div>
                <!-- // navbar -->

                <!-- Page content -->
                <div class="content">
                        <h2 class="content-title">You may like!</h2>
                        <hr>
 
 
                        
                        <!-- more content still to come here ... -->
                <?php
                      $sql = "SELECT * FROM recipe WHERE published=true";
                      $result = mysqli_query($conn, $sql);
                      // fetch all recipes as an associative array called $recipes
                      $recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);                        
                        
                ?>      
                        <?php foreach ($recipes as $recipe): ?>
        <div class="post" style="margin-left: 0px;">
                <img src="<?php echo BASE_URL . '/static/images/' . $recipe['image']; ?>" class="post_image" alt="">
        <!-- Added this if statement... -->
                <?php if (isset($recipe['category']['name'])): ?>
                        
                        <a 
                href=" filtered_recipes.php?category=' <?php echo $recipe['category']['id'] ?>"
                                class="btn category">
                                <?php echo $recipe['category']['name'] ?>
                        </a>
                <?php endif ?>
                
                <a href="single_recipe.php?recipe-slug=<?php echo $recipe['slug']; ?>">
                        <div class="post_info">
                                <h3><?php echo $recipe['title'] ?></h3>
                                <div class="info">
                                        <span><?php echo date("F j, Y ", strtotime($recipe["created_at"])); ?></span>
                                        <span class="read_more">Read more...</span>
                                </div>
                        </div>
                </a>
        </div>
<?php endforeach ?>


                </div>






                <!-- <h2> coming soon....</h2> -->
                <!-- // Page content -->

                <!-- footer -->
                <?php include(ROOT_PATH .'/includes/footer.php') ?>