<?php include('db-connect.php');

 if (!empty($_POST)) {
     //variables from input fields
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     $sql = "INSERT INTO utisci (name, email, text) VALUES ('" . $name . "', '" . $email . "', '" . $message . "')";

     if ($conn->query($sql) === TRUE) {
         echo "<h1>New impression created successfully</h1>";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
 }
?>


<div class="container-form">

    <h2 class="imp-title">Add your comment</h2>

    <form method="post" action="add-impression.php" id="addForm">
        <input type="text" name="name" placeholder="First and Last name" required>
        <br />
        <input type="email" name="email" placeholder="Email" required>
        <br />
        <textarea name="message" placeholder="Add your comment" required></textarea>
        <br />
        <input type="submit" name="submit" value="Add comment" class="button jsComment bg-info">
    </form>


</div>

