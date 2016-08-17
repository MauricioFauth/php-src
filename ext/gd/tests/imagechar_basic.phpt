--TEST--
Testing imagechar() of GD library
--CREDITS--
Rafael Dohms <rdohms [at] gmail [dot] com>
#testfest PHPSP on 2009-06-20
--SKIPIF--
<?php 
	if (!extension_loaded("gd")) die("skip GD not present");
?>
--FILE--
<?php
$image = imagecreatetruecolor(180, 30);
$white = imagecolorallocate($image, 255,255,255);

$result = imagechar($image, 1, 5, 5, 'C', $white);

ob_start();
imagegd($image);
$img = ob_get_contents();
ob_end_clean();

echo md5(base64_encode($img));
?>
--EXPECT--
f0291252e7ac2fadda25e63287e6860c
