<?php
$sur=$_POST['surname'];
$name=$_POST['name'];
$patr=$_POST['patronymic'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$dir=$_POST['directions'];
$city=$_POST['city'];
$plc=$_POST['places'];


$address='ezednev.poezdki@gmail.com';
$subject="Новый заказ от клиента: "."$sur"." $name"." $patr";
$message= "<h1>Заказ от клиента</h1><br><b>ФИО: </b>"."$sur "."$name "."$patr"."<br><b>Дата поездки: </b>"."$date"."<br> <b>Телефон для связи:</b> "."$phone"."<br> <b>Направление:</b> "."$dir"."<br> <b>Город ДНР:</b> "."$city"."<br> <b>Зарезервировано мест:</b> "."$plc";
$sendok = mail($address, $subject, $message, "Content-type:text/html; Charset=UTF-8\r\n");


if($sendok)
	{
        echo 'Выполняется перенаправление на предыдущую страницу...';
        echo '<script>alert("Ваш заказ оформлен. Вы будете перенаправлены на предыдущую страницу."); location.href= "/book.html";</script>';
	}

	else
	{
		"<b>Что-то пошло не так</b>";
	}
?>