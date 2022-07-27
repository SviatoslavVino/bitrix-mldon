<?php
$fio=$_POST['fio'];
$phone=$_POST['phoneNum'];
$email=$_POST['mail'];
$text=$_POST['txt'];

if ($email=='')
	$email='(Не указано)';
	

$address='mldonrusite@gmail.com';
$subject="Обращение от клиента: "."$fio";
$message= "<p><b>Имя: </b>"."$fio"."</p> <p><b>E-mail: </b>"."$email"."<p><b>Телефон: </b>"."$phone"."</p><p><b>Текст: </b><br>"."$text"."</p>";
$sendok = mail($address, $subject, $message, "Content-type:text/html; Charset=UTF-8\r\n");


if($sendok)
	{
        echo 'Выполняется перенаправление на предыдущую страницу...';
        echo '<script>alert("Ваше сообщение успешно отправлено. Вы будете перенаправлены на предыдущую страницу."); location.href= "/contact.html";</script>';
	}

	else
	{
		"<b>Что-то пошло не так</b>";
	}
?>