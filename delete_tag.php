<?php require 'functions.php';?>

<?php 

    delete_tag($_GET["userId"], $_GET["movieId"], $_GET["tag"]);
    header("Location: http://localhost:8080/movie_tags.php?movie_id=".$_GET["movieId"]);
?>