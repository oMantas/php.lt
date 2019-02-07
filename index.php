<?php
$file = $_FILES['photo'] ?? false;
$dir = 'img';

function save_file($file, $dir) {
    if ($file['error'] == 0) {
        $target_file_name = time() . '-' . $file['name'];
        $target_path = $dir . '/' . $target_file_name;
        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            return true;
        }
       return false; 
    };   
};

if (!empty($file)) {
    save_file($file, $dir);
};

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form enctype='multipart/form-data' method='POST'>
            <label>
                <span>Tavo foto:</span>
                <input name='photo' type='file'>
                <input type='submit' value='Upload'>
            </label>
        </form>
    </body>
</html>