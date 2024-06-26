<?php
    require "libs/vars.php";
    require "libs/functions.php";  

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        $url = $_POST["url"];
        $isActive = $_POST['isActive'] == 1 ? true : false;


        createBlog($title, $description, $image, $url, $isActive);

        header('Location: index.php');
    }
?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-3">
    <div class="row">

        <div class="col-3">
            <?php include "views/_menu.php" ?>
        </div>
        <div class="col-9">

            <div class="card">

                <div class="card-body">
                    <form action="blog-create.php" method="POST">

                        <div class="mb-3">
                            <label for="title" class="form-label">Başlık</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Resim</label>
                            <input type="text" class="form-control" name="image" id="image">
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">url</label>
                            <input type="text" class="form-control" name="url" id="url">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="isActive">Aktiflik Durumu</label>
                                <select class="form-control" name="isActive" id="isActive">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <input type="submit" value="Submit" class="btn btn-primary mt-2">
                            </div>


                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

<?php include "views/_footer.php" ?>