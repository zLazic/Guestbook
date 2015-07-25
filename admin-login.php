<?php
session_start();
include('db-connect.php');


if (!empty($_POST)) {
    $sqlAdmin = "SELECT * FROM user WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";

    $res = $conn->query($sqlAdmin);

    if ($res->num_rows > 0) {
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $_POST['username'];
        ?>
            <script type="text/javascript">
                window.location.href = 'index.php';
            </script>
        <?php
    } else {
        $error = true;
    }
}


?>

<div class="container-form">

    <h2>Admin login</h2>

    <?php if (isset($error)) {?>
        <p>Wrong credentials</p>
    <?php } ?>

    <form method="post" action="admin-login.php" id="loginForm">
        <input type="text" name="username" placeholder="Username" required>
        <br/>
        <input type="password" name="password" placeholder="Password" required>
        <br/>
        <input type="submit" name="submit" value="Sign in" class="button">
    </form>

</div>
