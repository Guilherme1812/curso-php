<?php 


$imagens = scandir("imagens");

$data = array();
foreach ($imagens as $img) {
	if(!in_array($img, array(".",".."))){
		$filename = "imagens". DIRECTORY_SEPARATOR. $img;
		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/php/dir/". str_replace("\\", "/",$filename);
		array_push($data, $info);
	}
}
echo json_encode($data);
 ?>