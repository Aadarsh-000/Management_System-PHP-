<?php

$id = $_GET["id"];

if($id){
    include "../connect.php";
    $sqlDelete = "DELETE FROM posts WHERE id = $id";
    if(mysqli_query($conn, $sqlDelete)){
        header ("Location:index.php");

    }
    else
    {
        die("Something went wrong");
    }
}
else{
    echo "Post not Found";
}