<?php

if(isset($_POST["create"])){

    include "../connect.php";

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary =  mysqli_real_escape_string($conn,$_POST["summary"]);
    $content =  mysqli_real_escape_string($conn, $_POST["content"]);
    $date =  mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlInsert = "INSERT INTO posts(date, title, summary, content) VALUES('$date', '$title', '$summary', '$content')";

    if(mysqli_query($conn, $sqlInsert)){
        header("Location:index.php");
    }
    else{
        die("Data Not Inserted Properly.");
    }

}

?>


<?php

if(isset($_POST["update"])){

    include "../connect.php";

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary =  mysqli_real_escape_string($conn,$_POST["summary"]);
    $content =  mysqli_real_escape_string($conn, $_POST["content"]);
    $date =  mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlUpdate = "UPDATE INTO posts SET tile='$title', summary='$summary', content='$content', date='$date' WHERE id = $id";

    if(mysqli_query($conn, $sqlUpdate)){
        header("Location:index.php");
    }
    else{
        die("Data Not Inserted Properly.");
    }

}

?>