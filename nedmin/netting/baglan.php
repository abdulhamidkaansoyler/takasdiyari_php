<?php 


try {



	$db=new PDO("mysql:host=localhost;dbname=gitti2;charset=utf8",'root','110115ahs');

	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOExpception $e) {



	echo $e->getMessage();

}



 ?>