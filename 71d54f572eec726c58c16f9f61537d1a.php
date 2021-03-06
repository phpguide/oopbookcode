if ($_POST[…]) {
	$avatar = new ImageDownloader();
	$avatar->setUrl('http://phpguide.co.i/logo.png');
} else {
	$avatar = new ImagePainter();
	$avatar->setSize(150, 150);
}

// ...

if ($avatar instanceof ImageDownloader)
	$avatar->download();
else
	$avatar->draw();

// ...

if ($avatar instanceof ImageDownloader)
	$src = $avatar->getLocalDownloadPath();
else
	$src = $avatar->savePictureToDisk();