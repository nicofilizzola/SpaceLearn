<?php
 
    // GET FILENAME FOR FUTHER USE
    $filename = basename($_SERVER['PHP_SELF']);

    // SET DIFFERENT FILENAMES
    $filenames = array(
        "index.php",
        "lessons.php",
        "lesson.php"
    );

    // FOR LESSON.PHP PAGE
    if ($filename == $filenames[2]){

        // IF FILE ACCESSED INCORRECTLY
        if (!isset($_GET['lesson_id'])){

            // REDIRECT TO HOME PAGE
            header('Location: index.php');
            exit();

        // IF FILE ACCESSED CORRECTLY
        } else {
            
            // INCLUDE CONTENT FILE
            include('public/php/content.php');

            // CREATE LESSON ID VARIABLE FOR FURTHER USE
            $lesson_id = $_GET['lesson_id'];

        }

    // FOR ALL OTHER PAGES
    }else{

        // INCLUDE CONTENT FILE
        include('public/php/content.php');

    }
    

    // NAVBAAR

    echo '
    <!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="public/css/style.css">
            <link rel="icon" type="image/png" href="public/img/logo.png">
            <title>SpaceLearn</title>
        </head>

        <body>

            <!--------------------------------

                HEADER

            -------------------------------->

            <nav class="col navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="index.php" class="navbar-brand">
                    <img src="public/img/logo.svg" alt="SpaceLearn Logo" width="50" height="50">
                    SpaceLearn
                </a>
                <div id="navbarContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">';

    // ACTIVE BUTTON ACCORDING TO LINK
    if ($filename == $filenames[0]){ 
        echo '
                        <li class="nav-item active">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="lessons.php" class="nav-link">Lessons</a>
                        </li>
        ';
    } else {
        echo '
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a href="lessons.php" class="nav-link">Lessons</a>
                        </li>
        ';
    }

    echo '
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
    ';