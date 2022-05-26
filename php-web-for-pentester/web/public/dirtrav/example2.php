<?php 


if (!(isset($_GET['file'])))
	die();


$file = $_GET['file'];

if (!(strstr($file,"/var/www/files/")))
	die();

if (!is_file($file))
	die();

header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
header('Content-Disposition: inline; filename="' . basename($file) . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));

$handle = fopen($file, 'rb');

do {
$data = fread($handle, 8192);
if (strlen($data) == 0) {
break;
}
echo($data);
} while (true);

fclose($handle);
exit();


?>
