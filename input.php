<?php
if(isset($_POST["fio"]) && isset($_POST["email"]) && isset($_POST["phone"]) 
    && isset($_POST["info"]) && isset($_FILES["file"])) 
{
    $fio = htmlentities($_POST["fio"]);
    $email = htmlentities($_POST["email"]);
    $phone = htmlentities($_POST["phone"]);
    $info = htmlentities($_POST["info"]);
    $file = $_FILES["file"];
    $file = $file['name'];
    $output ="
    <!DOCTYPE html>
    <html>
    <head>
    <title>Обработанные данные</title>
    <link rel='stylesheet' href='css/style.css'>

    </head>
        <body>
        <div class='form-container'>
            <div class='form-output'>
                <div style='font-size:30px;' class='form-inner'>
                    Вас зовут:<p> $fio</p>
                </div>
                <div style='font-size:30px;' class='form-inner'>
                    Ваш email:<p> $email</p>
                </div>
                <div style='font-size:30px;' class='form-inner'>
                    Ваш телефон:<p> $phone</p> 
                </div>
                <div  style='font-size:30px;' class='form-inner'>
                    Информация об ошибке:<p> $info</p> 
                </div>
                <div style='font-size:30px;' class='form-inner'>
                    Скриншот ошибки:<p> $file</p>
                </div>
            </div>
        </div>
        </body>
    </html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>