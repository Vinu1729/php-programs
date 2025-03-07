<?php
// Load an existing image
$image = imagecreatefromjpeg("bappa(1).jpg");

// Set text color (white)
$text_color = imagecolorallocate($image, 255, 255, 255);

// Add text to image
imagestring($image, 5, 20, 20, "ganpati bappa morya", $text_color);

// Output image to browser
header("Content-Type: image/jpeg");
imagejpeg($image);

// Free memory
imagedestroy($image);
?>
