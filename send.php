<?php
	$name=$_POST['name'];
	$tel=$_POST['phone'];
	$summ=$_POST['check'];
	$to="nficner@mail.ru, vgol1206@yandex.ru  ";
//ruLocation:header(' thanks.php');
	$subject= "Заявка_с_сайта_www.yuristi.online";
	$subject= "";
	$massage = "
	Имя: ".htmlspecialchars($name). "<br>
	Телефон:".htmlspecialchars($tel)."<br>
	Сумма:".$summ."<br>";
	$headers = "from: Заявка_с_сайта_www.yuristi.online \r\nContent-type:text/html; charset=utf-8 \r\n";
	mail($to, $subject, $massage, $headers);
    print "cообщение отправлено";
   
 
 
	exit();


?>


