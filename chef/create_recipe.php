<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/header.php'); ?>
<!-- Get all categories from DB -->
<?php //$categorys = getAllcategorys();      ?>
        <title>Chef | Create Recipe</title>

        <?php


 $chefname=$_POST['chefname'];
 $Title=$_POST['title'];
 $Slug=$_POST['slug'];
 $Image=$_POST['image'];
 $Description=$_POST['description'];

    if(empty($_POST["chefname"]) || empty($_POST["category"]) || empty($_POST["RecipeName"]) || empty($_POST["Ingredients"]) || empty($_POST["Directions"]))
    {
        echo "All fields are required.";
    }
       
    else
    {   
        $sql = "INSERT INTO recipemethod (chefname,category,RecipeName,Ingredients,Directions) VALUES ('$chefname','$category','$RecipeName','$Ingredients','$Directions')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Successfully";
            header("Location: home.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: addRecipe.html");
        }
    }
?>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    
    // File information
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // File extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

    // Check if file extension is allowed
    if (in_array($fileExt, $allowedExtensions)) {
        // Check if there is no upload error
        if ($fileError === 0) {
            // Check if file size is within limits (e.g., 2MB)
            if ($fileSize <= 2 * 1024 * 1024) {
                // Generate a unique file name
                $newFileName = uniqid('', true) . '.' . $fileExt;
                
                // File destination
                $destination = 'uploads/' . $newFileName;

                // Move the uploaded file to the destination
                move_uploaded_file($fileTmpName, $destination);
                
                // Success message
                echo 'File uploaded successfully!';
            } else {
                // File size exceeds the limit
                echo 'The file size is too large. Please upload a file within 2MB.';
            }
        } else {
            // Error occurred during file upload
            echo 'An error occurred during file upload. Please try again.';
        }
    } else {
        // Invalid file type
        echo 'Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.';
    }
}
?>


     
</head>
<body>
<?php include(ROOT_PATH . '/chef/includes/navbar.php') ?>
    <h1>Welcome to Foodmania Blog :</h1>
    <br>
    <h3>Add a New Recipe here</h3>
    
        <form method="post" action="addRecipe.php">
            <label>Chef Name:</label>
            <input type="text" name="chefname" /><br><br>
            <label>Title:&nbsp;&nbsp;</label>
            <input type="text" name="titley" /> <br><br>
            <label>Slug:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="slug" /> <br><br>
            <label>Image:&nbsp;&nbsp;&nbsp;</label>
            <input type= "file" textarea name="image" id="Ingredients" rows="5" cols="100"> </textarea><br><br>
            <label>Description:&nbsp;&nbsp;&nbsp;</label>
            <textarea name="description" id="Directions" rows="10" cols="100"> </textarea><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" value="Submit" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" value="Reset" />
        </form>
</body>
</html> 