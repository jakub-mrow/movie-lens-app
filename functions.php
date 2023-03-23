<?php require_once 'db_connection.php';?>
<?php function get_all_movies()
    {
        global $conn;
        $sql = "SELECT * FROM movies LIMIT 20";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
            ?><div class="col-4">
                    <div class="card border-primary">
                      <div class="card-body">
                        <h4 class="card-title">"Title: <?php echo ($row["name"]) ?>"</h4>
                        <p class="card-text">"Id: <?php echo ($row["id"]) ?>"</p>
                        <p class="card-text">"Categories: <?php echo ($row["categories"]) ?>"</p>
                        
                        

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
            ?><div class="col-4">
                    <div class="card border-primary">
                      <div class="card-body">
                        <h4 class="card-title">"User Id: <?php echo ($row["userId"]) ?>"</h4>
                        <p class="card-text">"Movie Id: <?php echo ($row["movieId"]) ?>"</p>
                        <p class="card-text">"Rating: <?php echo ($row["ratings"]) ?>"</p>
                        <p class="card-text">"Timestamp: <?php echo ($row["timestamp"]) ?>"</p>
                        

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
            ?><div class="col-4">
                    <div class="card border-primary">
                      <div class="card-body">
                        <h4 class="card-title">"User Id: <?php echo ($row["userId"]) ?>"</h4>
                        <p class="card-text">"Movie Id: <?php echo ($row["movieId"]) ?>"</p>
                        <p class="card-text">"Tag: <?php echo ($row["tag"]) ?>"</p>
                        

                        </div>
                    </div>

                </div>
            <?php
               
        }

    }
