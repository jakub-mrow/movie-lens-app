<!DOCTYPE html>
<html lang="en">

<?php require 'functions.php';?>

<head>
    <title>Title</title>
    <!-- Required meta tags -->

    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php get_movie_tags($_GET["movie_id"]) ?>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Back</a>
</div>

    
</body>
</html>