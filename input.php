<?php
$file = $_FILES["file"];
$file_send = $file["name"];
if(isset($_POST["fio"]) && isset($_POST["email"]) && isset($_POST["phone"]) 
    && isset($_POST["info"]) && isset($_FILES["file"]) && $file['size'] < 1*1024*1024) {
    
    $message = 'ФИО: ' . $_POST["fio"] . ' ';
    $message .= 'Email: ' . $_POST['email'] . ' ';
    $message .= 'Телефон: ' . $_POST['phone'] . ' ';
    $message .= 'Информация об ошибке: ' . $_POST['info'] . ' ';
    $message .= 'Скриншот ошибки: ' . $file_send . ' ';
    
    $mailTo = "dmitry1ie@mail.ru"; // Ваш e-mail
    $subject = "Информация об ошибке"; 
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@test.site <info@test.site>\r\n";//почта с хоста
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Спасибо, ".$_POST['fio'].", мы свяжемся с вами в самое ближайшее время!";
        print_r($_FILES["file"]);
    } else {
        echo "Сообщение не отправлено!"; 
    }
}else
{   
   echo "Введенные данные некорректны";
}
?>