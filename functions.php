<?php require_once 'db_connection.php';?>
<?php function get_all_movies()
    {
        global $conn;
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $limit = 20;
        $start = ($page - 1) * $limit;
        
        $sql = "SELECT * FROM movies LIMIT $start,$limit";
        $result = mysqli_query($conn, $sql);

        $total_query = "SELECT COUNT(*) as id FROM movies";
        $result_total = mysqli_query($conn, $sql);

        $row_total = mysqli_fetch_assoc($result_total);
        $count = $row_total["id"];

        $total_pages = ceil($count / $limit);
    
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Title: <?php echo ($row["name"]) ?></h4>
                        <p class="card-text">Categories:</p>
                        <p class="card-text"><?php echo ($row["categories"]) ?></p>
                        <!-- <p class="card-text">Id: <?php echo ($row["id"]) ?></p> -->
                        <a name="" id="" class="btn btn-primary" href="update_movie.php?id=<?php echo($row["id"])?>" role="button">Update</a>
                        <a name="" id="" class="btn btn-danger" href="delete_movie.php?id=<?php echo($row["id"])?>" role="button">Delete</a>
                        <a name="" id="" class="btn btn-success" href="movie_tags.php?movie_id=<?php echo($row["id"])?>&page=<?php echo($_GET["page"])?>" role="button">Tags</a>
                    </div>
                </div>
            </div>
            <?php
               
        }

    }

    function get_all_ratings()
    {
        global $conn;
        $sql = "SELECT * FROM ratings LIMIT 20";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">User Id: <?php echo ($row["userId"]) ?></h4>
                        <p class="card-text">Movie Id: <?php echo ($row["movieId"]) ?></p>
                        <p class="card-text">Rating: <?php echo ($row["ratings"]) ?></p>
                        <!-- <p class="card-text">Timestamp: <?php echo ($row["timestamp"]) ?></p> -->
                        <a name="" id="" class="btn btn-primary" href="update_rating.php?id=<?php echo($row["id"])?>" role="button">Update</a>
                        <!-- <a name="" id="" class="btn btn-danger" href="delete_rating.php?id=<?php echo($row["id"])?>" role="button">Delete</a> -->
                        
                    </div>
                </div>
            </div>
            <?php      
        }
    }

    function get_all_tags()
    {
        global $conn;
        $sql = "SELECT * FROM tags LIMIT 20";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">User Id: <?php echo ($row["userId"]) ?></h4>
                        <p class="card-text">Movie Id: <?php echo ($row["movieId"]) ?></p>
                        <p class="card-text">Tag: <?php echo ($row["tag"]) ?></p>
                    </div>
                </div>

            </div>
            <?php
               
        }

    }


    function get_movie_tags($movie_id){
        global $conn;
        $sql = "SELECT * FROM tags WHERE movieId=$movie_id";
        $result = mysqli_query($conn, $sql);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">UserId</th>
                    <th scope="col">movieId</th>
                    <th scope="col">Tag</th>
                </tr>
            </thead>
            <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo ($row["userId"]) ?></td>
                    <td><?php echo ($row["movieId"]) ?></td>
                    <td><?php echo ($row["tag"]) ?></td>
                </tr>
            <?php
        }
        ?>
            </tbody>
        </table>
        <?php
    }

    function delete_movie($id){
        global $conn;
        $sql = "DELETE FROM movies WHERE id=$id";
        $result = mysqli_query($conn, $sql);
    }

    function add_movie($name, $categories){
        global $conn;

        $sql_query = "SELECT MAX(id) as id FROM movies";
        $result_id = mysqli_query($conn, $sql_query);
        $max_id = mysqli_fetch_assoc($result_id)["id"] + 1;

        $sql = "INSERT INTO movies (id, name, categories) VALUES ($max_id, '$name', '$categories');";
        $result = mysqli_query($conn, $sql);
    }
