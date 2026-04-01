<?php
	session_start();
	$win = "true";

	if ( isset( $_POST['form-name'] ) ) {
		$theme = $_POST['form-name'];
	} else {
		$theme = 'Заявка с сайта 1001i1kuhnya.ru';
	}
	$name = $_POST['name'];	
	$tel = $_POST['tel'];
	
	
	$to      = 'vasilyev-r@mail.ru, vasilyev-r@yandex.ru, 1001_1@bk.ru';
	$subject = $theme;
	$message = "
		Имя: " . $name . "<br><br>
		Телефон: " . $tel . "<br><br>
	";
	
	$headers = "From: info@1001i1kuhnya.ru\r\n";
	$headers .= "Reply-To: info@1001i1kuhnya.ru\r\n";
	$headers .= "Return-Path: info@1001i1kuhnya.ru\r\n";
	$headers .= "CC: info@1001i1kuhnya.ru\r\n";
	$headers .= "BCC: info@1001i1kuhnya.ru\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	
	mail($to, $subject, $message, $headers);
	
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо, что обратились в мебельный магазин «1001 и 1 кухня». Мы свяжемся с Вами в ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
		
?>