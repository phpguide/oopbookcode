if ($_POST[...]) {
	$avatar = new ImageDownloader();
	$avatar->setUrl('http://phpguide.co.il/logo.png');
} else {
	$avatar = new ImagePainter();
	$avatar->setSize(150, 150);
}

// ...

$avatar->createImage();
$src = $avatar->getLocalPath();