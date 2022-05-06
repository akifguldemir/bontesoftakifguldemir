<?php 

include 'baglan.php';

if (isset($_POST['bannerkaydet'])) {


	$uploads_dir = '../../image';
	@$tmp_name = $_FILES['banner_yol']["tmp_name"];
	@$name = $_FILES['banner_yol']["name"];
    //benzersiz bir ad tanımlaması yapıyorum.
	$benzersizsayi1=uniqid();
	$benzersizsayi2=uniqid();
	$benzersizsayi3=uniqid();
	$benzersizsayi4=uniqid();	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO banner SET
		banner_baslik=:banner_baslik,
		banner_icerik=:banner_icerik,
		banner_yol=:banner_yol
		");
	$insert=$kaydet->execute(array(
		'banner_baslik' => $_POST['banner_baslik'],
		'banner_icerik' => $_POST['banner_icerik'],
		'banner_yol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../production/index.php?durum=ok");

	} else {

		Header("Location:../production/index.php?durum=no");
	}




}

?>