<html>
    <head>
        
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Главная страница блога</title>
    </head>
    <body>
<div id="center_site">
	
	<div id="image_body">
    </div>
			
			
        <ul id="menu">
			<li><a href="index.php">
                
			<img src="resurces/images/home.png" height="12" width="12" alt=""/>&nbsp;Главная</a></li>
			<li><a href="#">Программирование</a>
                <ul>
					<li>
						<a href="javaProg.php">java программирование</a>			
					</li>
					<li>
						<a href="phpProg.php">php программирование</a>				
					</li>
				</ul>
            </li>
                                <li><a href="#">КОНТАКТЫ</a></li>
                                <li><a href="#">ГАЛЕРЕЯ</a></li>
		</ul>  
		
        <div id="rp_list" class="rp_list">
			<ul>
                <li>
					<div>
						<img src="resurces/images/left/user.jpg" alt=""/>
							<span class="rp_title"></span>
							<span class="rp_links">
							<!--<a target="_blank" href="#">Войти</a>-->
							<form action="registration.php">
							<input type="login" name="login">
							<input type="password" name="password">
							<input type="submit" value="войти" name="submit">
							</form>
							<a href="registration.php">Регистрация</a>
						</span>
					</div>
				</li>
			</ul>
		</div>
		
        <div id="main">
            <aside class="leftAside">
                <h3>Темы статей</h3>
                <ul>
                    <li><a href="#google">Как шутят IT компании</a></li>
                    
                </ul>
            </aside>
			
			
        </div>
		<section class="centerNews">  
		<?php
	mysql_connect ("mysql.hostinger.ru", "u166870678_db","opqewwp");//пишите свои настройки
	mysql_select_db("u166870678_db") or die (mysql_error());//и свою бд
	mysql_query('SET character_set_database = utf8'); 
	mysql_query ("SET NAMES 'utf8'");
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);
	if(isset($_POST['submit'])) {
	//проверяем, нет ли у нас пользователя с таким логином
	$query = mysql_query("SELECT COUNT(user_id) 
		FROM users WHERE 
		user_login='".mysql_real_escape_string($_POST['login'])."'");
	if(mysql_result($query, 0) > 0)  {
			$error = "Пользователь с таким логином уже есть";
	   }
			// Если нет, то добавляем нового пользователя
	  if(!isset($error) )   {
		$login = mysql_real_escape_string(trim(htmlspecialchars($_POST['login'])));
		// Убираем пробелы и хешируем пароль
		$password = md5(trim($_POST['password']));
		mysql_query("INSERT INTO users 
		SET user_login='".$login."', user_password='".$password."'");
		echo 'Вы успешно зарегистрировались с логином - '.$login;
		exit();
	}  else   {
	// если есть такой логин то говорим об этом
		 echo $error;
		}
	}
	//по умолчанию данные будут отправляться на этот же файл
	print <<< html
	<form method="POST">
		<input name="login" type="text"><br>
		<input name="password" type="password"><br>
		<input name="submit" type="submit" value="Зарегистрироваться">
	</form>
html;
?>
		</section>
        <footer>
            <div>
                <span>© 2015 При использовании материалов ссылка на источник обязательна. Все права защищены</span>
            </div>
        </footer>
	</div>
    </body>
</html>