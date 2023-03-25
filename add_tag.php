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

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["add"])){
            add_tag($_POST["user_id"], $_GET["movie_id"], $_POST["tag"]);
            header("Location: http://localhost:8080/movie_tags.php?movie_id=".$_GET["movie_id"]);
        }
    }

?>

<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-8">
            <form action="add_tag.php?movie_id=<?php echo $_GET["movie_id"]?>" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">UserId</label>
                    <input type="text" value="" required="required" class="form-control" name="user_id" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Insert userId</small>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tag</label>
                    <input type="text" value="" required="required"
                        class="form-control" name="tag" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Insert tag</small>
                    <br>
                </div>

                <input value="Add Tag" id="add_tag"type="submit" class="btn btn-primary" name="add"></input>

            </form>
            <br>
            <a class="btn btn-primary" href="movie_tags.php?movie_id=<?php echo $_GET["movie_id"]?>" role="button">Back</a>
        </div>
    </div>
</div>

    
</body>
</html>