<?php 

try {



	$db=new PDO("mysql:host=localhost;dbname=bontesoft;charset=utf8",'root','12345678');
    //echo "bağlantı başarılı";
}



catch (PDOExpception $e) {



	echo $e->getMessage();

}





 ?>