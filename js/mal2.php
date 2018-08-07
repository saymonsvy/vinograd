<meta http-equiv="refresh" content="0; URL=./../js/snk.html">
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
if (isset($_POST['mal'])) {$mal = $_POST['mal']; if ($mal == '') {unset($mal);}}
if (isset($_POST['tem'])) {$tem = $_POST['tem']; if ($tem == '') {unset($tem);}}
$address = "saymonsvy@mail.ru";
$mes = "$tem \nИмя: $name \nНомер телефона: $tel \nEmail: $mal";
$email = "saymonsvy@mail.ru";
$send = mail ($address,"Заявка на расчет (МАСТЕР ПО ЖЕЛЕЗУ)",$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
?>