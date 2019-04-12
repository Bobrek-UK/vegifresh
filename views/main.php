<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); }?>

<html>
<head>
    <title>Vegifresh</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/assets/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(1,255,0,0.5);">
    <a class="navbar-brand abs"  href="http://localhost/" style="font-weight:bold;">Vegifresh</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
                    Browse
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="http://localhost/recipe">Recipes</a>
                    <a class="dropdown-item" href="http://localhost/ingredient">Ingredients</a>
                    <a class="dropdown-item" href="http://localhost/recipeset">Weekly recipe sets</a>
                </div>
            </li>

            <?php
            if(isset($_SESSION['admin'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
                        Create
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/recipe/add">Recipe</a>
                        <a class="dropdown-item" href="http://localhost/ingredient/add">Ingredient</a>
                        <a class="dropdown-item" href="http://localhost/recipeset/add">Weekly set</a>
                        <a class="dropdown-item" href="http://localhost/users/register">New User</a>
                    </div>
                </li>

            <?php  } ?>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/custcode/codequery" style="font-weight: bold;">Enter Box Code</a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">



            <?php
            if(isset($_SESSION['is_logged_in'])) { ?>
                <li class="nav-item" style="font-weight: bold;">
                    <a class="nav-link" href="http://localhost/home/logout">Logout</a>
                </li>
            <?php  } ?>

            <?php
            if(empty($_SESSION['is_logged_in'])) { ?>
                <li class="nav-item" style="font-weight: bold; ">
                    <a class="nav-link" href="http://localhost/users/login">Login</a>
                </li>
                <li class="nav-item" style="font-weight: bold;">
                    <a class="nav-link" href="http://localhost/users/register">Register</a>
                </li>
            <?php  } ?>
        </ul>
    </div>
</nav>





<div class="row">
    <?php require($view); ?>
</div>

</div><!-- /.container -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>