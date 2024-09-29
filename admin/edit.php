<?php

include "templates/header.php";

?>

<?php 
    $id = $_GET['id'];
    if($id) {
        include "../connect.php";
        $sqlEdit = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($conn, $sqlEdit);
     }
    else {
        echo "No Posts Found";
    }
?>

        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="process.php" method="post">
                <?php
                while($data = mysqli_fetch_array($result)){
                    ?>



               
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="title" id="" placeholder="Enter Title" <?php echo $data['title']; ?>>
                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="summary" id="" cols="30" rows="10" placeholder="Enter Summary here" <?php echo $data['summary']; ?>></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Enter Content here" <?php echo $data['content']; ?>></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">

                <input type="hidden" name="id" value="<?php echo $id ?>">

                <input class="btn btn-primary" type="submit" value="Edit" name="update">
                <?php
                }
                ?>
            </form>
        </div>

<?php

include "templates/footer.php";

?>