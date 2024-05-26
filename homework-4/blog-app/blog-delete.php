<?php
require "libs/functions.php";

$id = $_GET["id"];
$message = "";

if(deleteBlog($id)){
    $message = "<div class='alert alert-success'>Blog başarıyla silindi.</div>";
} else {
    $message = "<div class='alert alert-danger'>Silme aşamasında bir hata oldu.</div>";
}
header('Location: admin-blogs.php?message=' . urlencode($message));
exit();
?>
