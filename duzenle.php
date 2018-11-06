<?php 
require_once "baglan.php"; 



$bilgisor=$db->prepare("SELECT * From bilgi where bilgi_id=:bilgi_id");
$bilgisor->execute(array(

	'bilgi_id' => $_POST['bilgi_id']


));

$bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);

//echo $bilgicek['bilgi_ad'];

$array=array(

	"bilgi_ad" => $bilgicek['bilgi_ad'],
	"bilgi_soyad" => $bilgicek['bilgi_soyad']

);

echo $json=json_encode($array);


?>