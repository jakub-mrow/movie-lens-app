<?php require 'functions.php';?>

<?php 

    delete_movie($_GET["id"]);
    header("Location: http://localhost:8080/");
?>