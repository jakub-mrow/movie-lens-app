<?php include("header.php") ?>

<?php 
    if (!isset($_GET["page"])){
        header("Location: http://localhost:8080/?page=1");
    }
?>
<main>
    <div class="tab-content">
        <div class="tab-pane active" id="movies" role="tabpanel" aria-labelledby="view-movies-tab">
            <div class="container">
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
                                ?>">Previous</a>
                            </li>

                            <?php for($i = 1; $i <= 5; $i++): ?>
                            <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $i?>"><?php echo $i?></a>
                            </li>
                            <?php endfor?>

                            <li class="page-item active">
                                <a class="page-link" href="index.php?page=<?php echo $_GET["page"]+1?>">Next</a>
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

        <div class="tab-pane" id="ratings" role="tabpanel" aria-labelledby="view-ratings-tab">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <?php get_all_ratings() ?>
                </div>
            </div>
        </div>
    

        <div class="tab-pane" id="tags" role="tabpanel" aria-labelledby="view-tags-tab">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <?php get_all_tags() ?>
                </div>
            </div>
        </div>
    </div>


</main>


<?php include("footer.php") ?>