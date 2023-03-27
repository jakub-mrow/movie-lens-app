<?php include("header.php") ?>

<div class="tab-pane" id="ratings" role="tabpanel" aria-labelledby="view-ratings-tab">
            <div class="container">
            <div class="mx-auto">
                <a name="" id="" class="btn btn-primary mt-4" href="add_rating.php?page=<?php echo ($_GET["page"])?>&page_ratings=<?php echo $_GET["page_ratings"]?>&page_tags=<?php echo ($_GET["page_tags"])?>" role="button">Add Rating</a>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-4">
                <!-- Pagination navbar -->
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="view_ratings.php?page=<?php echo ($_GET["page"])?>&page_ratings=<?php 
                            if($_GET["page_ratings"]-1 > 0){
                                echo $_GET["page_ratings"]-1;
                            } else {
                                echo 1;
                            }
                            ?>&page_tags=<?php echo ($_GET["page_tags"])?>">Previous</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="view_ratings.php?page=<?php echo ($_GET["page"])?>&page_ratings=<?php echo $_GET["page_ratings"]+1?>&page_tags=<?php echo ($_GET["page_tags"])?>">Next</a>
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