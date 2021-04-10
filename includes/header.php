<?php
        include 'includes/modal.php';
        include 'includes/common.php';
        ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
   <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="h1.php"><span style="color:#7C7C7C" class="glyphicon glyphicon-home">&nbsp;ML-KART</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href="productsl.php"><i class="material-icons">&#xe31f;</i></a></li>
                    <li><a href = "index_ajax.php"><span class = "glyphicon glyphicon-search"></span>Search</a></li>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href = "ChatBot/index.php"><span class = "glyphicon glyphicon-question-sign"></span>ML-BOT</a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span>Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>

                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>


