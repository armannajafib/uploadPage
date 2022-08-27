<?php
session_start();
$msg = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit']) && $_POST['submit'] == "upload") {
        if (isset($_FILES['file']) && !empty($_FILES['file'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $nameFile = $_FILES['file']['name'];
            $typeFile = $_FILES['file']['type'];
            $sizeFile = $_FILES['file']['size'];
            $nameJodashode = explode(".", $nameFile);
            $fileExtention = strtolower(end($nameJodashode));
            $newFileName = md5(time() . $nameFile) . "." . $fileExtention;
            $allowfile = ['jpg', 'txt', 'jpeg', 'doc', 'zip', 'rar'];
            if (in_array($fileExtention, $allowfile) == false) {
                $msg = "فایل مورد نظر مورد قبول نیست!";
            }
            $uploadFileDir = 'uploadFile/';
            $destPath = $uploadFileDir . $newFileName;
            if (move_uploaded_file($tmpName, $destPath)) {
            } else {
                
            }
        } else {
            $msg = "لطفا فیلد مورد نظر را پر کنید";
        }
    }
}
$_SESSION['msg'] = $msg;
header("location:index.php");
