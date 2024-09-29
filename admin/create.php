<?php

include "templates/header.php";

?>

        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="process.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="title" id="" placeholder="Enter Title" required>
                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="summary" id="" cols="30" rows="10" placeholder="Enter Summary here" required></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Enter Content here" required></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">

                <input class="btn btn-primary" type="submit" value="Submit" name="create">
            </form>
        </div>

<?php

include "templates/footer.php";

?>