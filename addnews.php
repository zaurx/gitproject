<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Админ-панель</title>
</head>
<body>
<?php
    $host="mysql.hostinger.ru";
    $user="u166870678_db";
    $pass="opqewwp"; //установленный вами пароль
    $db_name="u166870678_db";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);
?>

<table>
<form action="" method="post">
    <tr>
        <td>Наименование:</td>
        <td><input type="text" name="Name"></td>
    </tr>
    <tr>
        <td>текст</td>
        <td><input type="text" name="text" size="3"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="добавить"></td>
    </tr>
</form>
</table>


<?php
if (isset($_POST["Name"])) {
    $sql = mysql_query("INSERT INTO `news` (`article`, `text`) 
                        VALUES ('".$_POST['Name']."','".$_POST['text']."')");
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}
?>










</body>