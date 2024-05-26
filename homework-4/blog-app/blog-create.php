<?php
require "libs/vars.php";
require "libs/functions.php";

$title = $description = "";
$title_err = $description_err = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $input_title = trim($_POST["title"]);

    if(empty($input_title)){
        $title_err = "title boş geçilemez.";
    } else if(strlen($input_title) > 150){
        $title_err = "title için çok fazla karakter kullandınız. Max: 150kr";
    } else {
        $title = control_input($input_title);
    }

    $input_description = trim($_POST["description"]);

    if(empty($input_description)){
        $description_err = "description boş geçilemez.";
    } else if(strlen($input_description) < 10){
        $description_err = "description için çok az karakter kullandınız. Min: 10kr";
    } else {
        $description = $input_description;
    }

    $image = $_POST["image"];
    $url = $_POST["url"];

    if(empty($title_err) && empty($description_err)){
        if(createBlog($title,$description,$image,$url)){
            $message = "<div class='alert alert-success'>Blog başarıyla eklendi.</div>";
        } else {
            $message = "<div class='alert alert-danger'>Yükleme sırasında hata oluştu.</div>";
        }
    }  
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
                    <?php echo $message; ?>
                    <form action="blog-create.php" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Başlık</label>
                            <input type="text" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid':''?>" name="title" id="title" value="<?php echo $title?>">
                            <span class="invalid-feedback"><?php echo $title_err ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama</label>
                            <textarea name="description" id="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid':''?>"></textarea>
                            <span class="invalid-feedback"><?php echo $description_err ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Resim</label>
                            <input type="text" class="form-control" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">url</label>
                            <input type="text" class="form-control" name="url" id="url">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>

<?php include "views/_footer.php" ?>