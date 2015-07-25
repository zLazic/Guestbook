<html>
<head>
    <link type="text/css" rel="stylesheet" href="bower_components/normalize.css/normalize.css"/>
    <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="bower_components/animate.css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="form-style.css"/>
    <title>
        Guestbook
    </title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Guestbook script</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php" id="listComments">Comments</a></li>
                <li><a href="add-impression.php" class="jsComment">Add comments</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="log-out.php"><?php ?></a></li>

                <?php if (!isset($_SESSION['logged'])) { ?>
                    <li><a href="admin-login.php" id="admin-log"><span class="glyphicon glyphicon-user"></span> Sign in</a>
                    </li>
                <?php } ?>

                <?php if (isset($_SESSION['logged'])) { ?>
                    <li><a href="log-out.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>