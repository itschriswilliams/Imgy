<?php
header("Content-Type: image/png");
$w = htmlspecialchars($_GET["w"]);
$h = htmlspecialchars($_GET["h"]);
$say = htmlspecialchars($_GET["say"]);
$im = @imagecreate($w, $h)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 25, 50, 50, $say, $text_color);
imagepng($im);
imagedestroy($im);
?>

