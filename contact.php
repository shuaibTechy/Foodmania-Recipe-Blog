<?php require_once('config.php') ?>


<!DOCTYPE html>
<html>
<head>
 <!-- Google Fonts -->
  <link link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <!-- Styling for public area -->
        <link rel="stylesheet" href="static/css/public_styling.css">
        <meta charset="UTF-8">

</head>
<body>
    

<div class="container">
<div class="container">
  <div class="row header">
    <h1>CONTACT FOODMANIA &nbsp;</h1>
    <h3>Fill out the form below to to reach out to us!</h3>
  </div>
  <div class="row body">
    <form action="contact.php" method="post">
      <ul>
        
        <li>
          <p class="left">
            <label for="first_name">first name</label>
            <input type="text" name="firstname" placeholder="John" />
          </p>
          <p class="pull-right">
            <label for="last_name">last name</label>
            <input type="text" name="lastname" placeholder="Smith" />      
          </p>
        </li>
        
        <li>
          <p>
            <label for="email">email <span class="req">*</span></label>
            <input type="email" name="email" placeholder="john.smith@gmail.com" />
          </p>
        </li>        
        <li><div class="divider"></div></li>
        <li>
          <label for="comments">comments</label>
          <textarea cols="46" rows="3" name="comment"></textarea>
        </li>
        
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $email = ($_POST['email']);
    $comment = ($_POST['comment']);
    

    
    // Perform database insertion with sanitized $enumValue
    $query = "INSERT INTO contact (firstname, lastname, email, comment, created_at) 
                      VALUES('$firstname', '$lastname', '$email', '$comment', now())";
    mysqli_query($conn, $query);


    // $sql = "INSERT INTO users (role, username) VALUES (?,?)";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute([$enumValue], [$query]);
    // mysqli_query($conn, $query, );

    echo "Message sent to foodmania!";
    } else {
    echo "Check your message again!";
    }
    

    ?>
    <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Close My Form</a>
  </body>

</div>