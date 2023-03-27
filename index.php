<?php include("header.php") ?>

<?php 
    if (!isset($_GET["page"]) || !isset($_GET["page_ratings"] ) || !isset($_GET["page_tags"])){
        header("Location: http://localhost:8080/?page=1&page_ratings=1&page_tags=1");
    }

    
?>
<main>
    <div class="tab-content">
        <div class="tab-pane active" id="movies" role="tabpanel" aria-labelledby="view-movies-tab">
            <div class="container">
                <div class="mx-auto">
                    <a name="" id="" class="btn btn-primary mt-4" href="add_movie.php" role="button">Add Movie</a>
                    <a name="" id="" class="btn btn-danger mt-4" href="add_user.php" role="button">Add User</a>
                </div>
                <div class="row justify-content-center align-items-center g-2 mt-4">
                    <!-- Pagination navbar -->
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="index.php?page=<?php 
                                if($_GET["page"]-1 > 0){
                                    echo $_GET["page"]-1;
                                } else {
                                    echo 1;
                                }
                                ?>&page_ratings=<?php echo $_GET["page_ratings"]?>&page_tags=<?php echo ($_GET["page_tags"])?>">Previous</a>
                            </li>

                            <li class="page-item active">
                                <a class="page-link" href="index.php?page=<?php echo $_GET["page"]+1?>&page_ratings=<?php echo $_GET["page_ratings"]?>&page_tags=<?php echo ($_GET["page_tags"])?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination navbar -->

                </div>

                <div class="row justify-content-center align-items-center g-2">
                    <?php get_all_movies() ?>
                </div>
            
            </div>
        </div>

        


</main>


<?php include("footer.php") ?>