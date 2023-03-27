<?php include("header.php") ?>


<div class="tab-pane" id="tags" role="tabpanel" aria-labelledby="view-tags-tab">
    <div class="container">
        <div class="row justify-content-center align-items-center g-2 mt-4">
            <!-- Pagination navbar -->
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="view_tags.php?page=<?php echo ($_GET["page"])?>&page_ratings=<?php echo ($_GET["page_ratings"])?>&page_tags=<?php
                            if ($_GET["page_tags"] - 1 > 0) {
                                echo $_GET["page_tags"] - 1;
                            } else {
                                echo 1;
                            }
                            ?>">Previous</a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link" href="view_tags.php?page=<?php echo ($_GET["page"])?>&page_ratings=<?php echo ($_GET["page_ratings"])?>&page_tags=<?php echo $_GET["page_tags"] + 1?>">Next</a>
                    </li>
                </ul>
            </nav>
            <!-- Pagination navbar -->

        </div>
        <div class="row justify-content-center align-items-center g-2">
            <?php get_all_tags() ?>
        </div>
    </div>
</div>
</div>