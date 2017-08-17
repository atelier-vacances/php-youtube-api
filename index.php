<?php
header('Content-type: image/jpeg');
if(isset($_GET['id'])){
    $thumbrender = @readfile('http://i.ytimg.com/vi/' . $_GET['id'] . '/0.jpg');
    if($thumbrender !== false && $thumbrender !== 0) exit();
}
readfile('./default.jpg');
?>