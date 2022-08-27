<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file uploader</title>
</head>

<body>
    <?php
    if (isset($_SESSION['msg']) && $_SESSION['msg']) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <br>
        <input type="submit" value="upload" name="submit">
    </form>
</body>

</html>