<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?> 
<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php //$recipes = getPublishedRecipes(); ?>


       
</head>
<body>
        <!-- container - wraps whole page -->

       
        <div class="container">
                <!-- navbar -->
                <?php include(ROOT_PATH .'/includes/nav.php') ?>
                <?php include(ROOT_PATH .'/includes/banner.php') ?>

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
<h2> Featured recipe</h2>



<div class="scrolling-container">
  <img src="static\images\scrolling1.png" alt="Image 1">
  <img src="static\images\scrolling2.png" alt="Image 2">
  <img src="static\images\scrolling3.png" alt="Image 3">
  <img src="static\images\scrolling4.png" alt="Image 4">
  <img src="static\images\scrolling5.png" alt="Image 5">
  <img src="static\images\scrolling6.png" alt="Image 6">
  <img src="static\images\scrolling7.png" alt="Image 7">
  <img src="static\images\scrolling8.png" alt="Image 8">
  <img src="static\images\scrolling9.png" alt="Image 9">
  <img src="static\images\scrolling10.png" alt="Image 10">

  </div>

                <!-- <h2> coming soon....</h2> -->
                <!-- // Page content -->

                <!-- footer -->
                <?php include(ROOT_PATH .'/includes/footer.php') ?>