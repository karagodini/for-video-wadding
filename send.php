<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "7213486174:AAHcumBKJskEYroe8QJ6uR2kRJo9ihv5uVg";

//Сюда вставляем chat_id
$chat_id = "-486319246";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $lastname = ($_POST['lastname']);
    $firstname = ($_POST['firstname']);
    $yes = ($_POST['yes']);
    $no = ($_POST['no']);
    $visky = ($_POST['visky']);
    $vodka = ($_POST['vodka']);
    $konyak = ($_POST['konyak']);
    $vino = ($_POST['vino']);
    $shampanskoe = ($_POST['shampanskoe']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Фамилия:' => $lastname,
        'Имя:' => $firstname,
        'Я приду:' => $yes,
        'Я не приду:' => $no,
        'Виски:' => $visky,
        'Водка:' => $vodka,
        'Коньяк:' => $konyak,
        'Вино:' => $vino,
        'Шампанское:' => $shampanskoe
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Будем рады вас видеть');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
    }
}

?>