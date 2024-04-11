<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/recipe_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/header.php'); ?>

<!-- Get all admin categories from DB -->
<?php $recipes = getAllRecipes(); ?>
        <title>Chef | Manage Recipe</title>
<style>
    body {
      background-image: url("../static/images/scrolling14.png"); background-size: cover; background-repeat: no-repeat; height: 100%;
    }
    .navbar{
     margin: 0px; overflow: hidden; background-color: #5d645d; border-radius: 0px 0px 6px 6px; padding-bottom: 0px; }
    .navbar ul {
    list-style-type: none; float: right;}
    .navbar ul li {
    float: left; font-family: 'Noto Serif', serif;}
    .navbar ul li a {
    display: block; color: white; text-align: center; padding-top: 3px; padding-bottom: 3px; padding-left: 25px;padding-right: 15px;text-decoration: none;}
    .navbar ul li a:hover {
    color: #B9E6F2; background-color: #334F5C;}
</style>
</head>


<body>
        <!-- chef navbar -->
        <div class="navbar">
                        
 <?php if (isset($_SESSION['user'])): ?>
                        <div class="user-info" >
                                <span style="font-size: large; color:#B9E6F2; padding-right: 15px; padding-right: 15px;"><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
                                <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn" style="font-size: large; color:aliceblue;">Log out</a>
                        </div>
                <?php endif ?>
                        <ul>
                         
                          <li><a href="#about">About Us</a></li>
                          <li><a href="#recipe">Your Recipe</a></li>
                          <li><a href="#">Chef's Profile</a></li>
                        </ul>
                </div>
</div>
        <br>

        <div class="container content">
                <!-- Left side menu -->
                <?php include(ROOT_PATH . '/chef/includes/menu.php') ?>

                <!-- Display records from DB-->
                <div class="table-div"  style="width: 80%;">
                        <!-- Display notification message -->
                        <?php include(ROOT_PATH . '/chef/includes/messages.php') ?>

                        <?php if (empty($recipes)): ?>
                                <h1 style="text-align: center; margin-top: 20px;">No recipes in the database.</h1>
                        <?php else: ?>
                                <table class="table">
                                                <thead>
                                                <th>S/N</th>
                                                <th>Chef's Name</th>
                                                <th>Title of Recipe</th>
                                                <th>Views</th>
                                                <!-- Only Admin can publish/unpublish category -->
                                                <?php if ($_SESSION['user']['role'] == "Admin"): ?>
                                                        <th><small>Publish</small></th>
                                                <?php endif ?>
                                                <th><small>Edit</small></th>
                                                <th><small>Delete</small></th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($recipes as $key => $recipe): ?>
                                                <tr>
                                                        <td><?php echo $key + 1; ?></td>
                                                        <td><?php echo $recipe['chef']; ?></td>
                                                        <td>
                                                                <a   target="_blank"
                                                                href="<?php echo BASE_URL . 'single_recipe.php?recipe-slug=' . $recipe['slug'] ?>">
                                                                        <?php echo $recipe['title']; ?>     
                                                                </a>
                                                        </td>
                                                        <td><?php echo $recipe['views']; ?></td>
                                                        
                                                        <!-- Only Admin can publish/unpublish category -->
                                                        <?php if ($_SESSION['user']['role'] == "Admin" ): ?>
                                                                <td>
                                                                <?php if ($recipe['published'] == true): ?>
                                                                        <a class="fa fa-check btn unpublish"
                                                                                href="recipes.php?unpublish=<?php echo $recipe['id'] ?>">
                                                                        </a>
                                                                <?php else: ?>
                                                                        <a class="fa fa-times btn publish"
                                                                                href="recipes.php?publish=<?php echo $recipe['id'] ?>">
                                                                        </a>
                                                                <?php endif ?>
                                                                </td>
                                                        <?php endif ?>

                                                        <td>
                                                                <a class="fa fa-pencil btn edit"
                                                                        href="create_recipe.php?edit-recipe=<?php echo $recipe['id'] ?>">
                                                                </a>
                                                        </td>
                                                        <td>
                                                                <a  class="fa fa-trash btn delete" 
                                                                        href="create_recipe.php?delete-recipe=<?php echo $recipe['id'] ?>">
                                                                </a>
                                                        </td>
                                                </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                </table>
                        <?php endif ?>
                </div>
                <!-- // Display records from DB -->
        </div>
</body>
</html>