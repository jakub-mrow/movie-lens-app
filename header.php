<!doctype html>
<html lang="en">

<?php require 'functions.php'; ?>


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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <a name="" id="" class="btn btn-outline-primary btn-lg" href="index.php?page=<?php echo ($_GET["page"]) ?>" role="button">Movies</a>
      <li class="nav-item" role="presentation">
        <a name="" id="" class="btn btn-outline-primary btn-lg" href="view_ratings.php?page=<?php echo ($_GET["page"]) ?>" role="button">Ratings</a>
      </li>
      <li class="nav-item" role="presentation">
        <a name="" id="" class="btn btn-outline-primary btn-lg" href="view_tags.php?page=<?php echo ($_GET["page"]) ?>" role="button">Tags</a>
      </li>
    </ul>

    <!-- Tab panes -->

  </header>