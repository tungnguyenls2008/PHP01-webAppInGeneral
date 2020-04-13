<?php
if (file_exists($_FILES['avatar'])) {
    //upload file
    //lay nd file ra
    $avatar = $_FILES['avatar']['tmp_name'];
    //duong dan file upload
    $nameFile = $_FILES['avatar']['name'];
    $pathStoreFile = "../upload/" . time() . "-". $nameFile;
    move_uploaded_file($avatar, $pathStoreFile);
} else {
    $nameFile = null;
}
?>
