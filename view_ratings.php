<?php include("header.php") ?>

<div class="tab-pane" id="ratings" role="tabpanel" aria-labelledby="view-ratings-tab">
            <div class="container">
            <div class="row justify-content-center align-items-center g-2 mt-4">
                <!-- Pagination navbar -->
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="view_ratings.php?page=<?php 
                            if($_GET["page"]-1 > 0){
                                echo $_GET["page"]-1;
                            } else {
                                echo 1;
                            }
                            ?>">Previous</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="view_ratings.php?page=<?php echo $_GET["page"]+1?>">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- Pagination navbar -->

                </div>
                <div class="row justify-content-center align-items-center g-2">
                    <?php get_all_ratings() ?>
                </div>
            </div>
        </div>