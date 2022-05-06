<?php 

include 'baglan.php';

if (isset($_POST['bannerkaydet'])) {


	$uploads_dir = '../../image';
	@$tmp_name = $_FILES['banner_yol']["tmp_name"];
	@$name = $_FILES['banner_yol']["name"];
    //benzersiz bir ad tanımlaması yapıyorum.
    $benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
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
if ($_GET['bannersil']=="ok") {


	
	$sil=$db->prepare("DELETE from banner where banner_id=:banner_id");
	$kontrol=$sil->execute(array(
		'banner_id' => $_GET['banner_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['banner_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/index.php?durum=ok");

	} else {

		Header("Location:../production/index.php?durum=no");
	}

}

if (isset($_POST['bannerduzenle'])) {



	if($_FILES['banner_yol']["size"] > 0)  { 


		$uploads_dir = '../../image';
		@$tmp_name = $_FILES['banner_yol']["tmp_name"];
		@$name = $_FILES['banner_yol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	    $duzenle=$db->prepare("UPDATE banner SET
		banner_baslik=:banner_baslik,
		banner_icerik=:banner_icerik,
		banner_yol=:banner_yol
        WHERE banner_id={$_POST['banner_id']}");

        $update=$duzenle->execute(array(
            'banner_baslik' => $_POST['banner_baslik'],
            'banner_icerik' => $_POST['banner_icerik'],
            'banner_yol' => $refimgyol
        ));
		

		$banner_id=$_POST['banner_id'];

		if ($update) {
            //eski yol siliniyor
			$resimsilunlink=$_POST['banner_yol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/banner-duzenle.php?banner_id=$banner_id&durum=ok");

		} else {

			Header("Location:../production/banner-duzenle.php?durum=no");
		}



	} else {

        $duzenle=$db->prepare("UPDATE banner SET
		banner_baslik=:banner_baslik,
		banner_icerik=:banner_icerik
        WHERE banner_id={$_POST['banner_id']}");

	
        $update=$duzenle->execute(array(
            'banner_baslik' => $_POST['banner_baslik'],
            'banner_icerik' => $_POST['banner_icerik']
        ));

		$banner_id=$_POST['banner_id'];

		if ($update) {

            Header("Location:../production/banner-duzenle.php?banner_id=$banner_id&durum=ok");
            


		} else {

            Header("Location:../production/banner-duzenle.php?durum=no");

		}
	}

}
?>