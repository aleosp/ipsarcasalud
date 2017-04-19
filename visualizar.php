<?php

//$file = './pdf/dummy.pdf';
//$filename = 'dummy.pdf';

$file = 'informacion/' . $_REQUEST['filename'];
$filename = $_REQUEST['filename'];




header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>
