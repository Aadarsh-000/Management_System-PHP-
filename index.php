<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="p-4 bg-dark text-center">
        <h1><a href="" class="text-light text-decoration-none">Simple Blog</a></h1>
    </header>
    <div class="post-light mt-5">
        <div class="container">
            <?php 
            include "connect.php";
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sqlSelect);
            while($data = mysqli_fetch_array($result)){
                ?>

                    <div class="row mb-4 p-5 bg-light">
                        <div class="col-sm-2">
                            <?php echo $data["date"]; ?>
                        </div>
                        <div class="col-sm-3">
                            <h2><?php echo $data["title"]; ?></h2>
                        </div>
                        <div class="col-sm-6">
                            <p><?php echo $data["content"]; ?></p>
                        </div>
                        <div class="col-sm-1">
                            <a href="view.php?id=<?php echo $data['id'];?>" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>

                <?php
            }
            ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light">Admin Panel</a>
    </div>
</body>
</html>