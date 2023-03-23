<?php include("header.php") ?>


<main>
    <div class="tab-content">
        <div class="tab-pane active" id="movies" role="tabpanel" aria-labelledby="view-movies-tab">
            <div class="container">
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