
<!DOCTYPE html>
<html>
    <head>
        
    
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Главная страница блога</title>
		<title>Главная страница блога2</title>
		<title>Главная страница блога3</title>
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
							
							<?php
	mysql_connect ("mysql.hostinger.ru", "u166870678_db","opqewwp");
	mysql_select_db("u166870678_db") or die (mysql_error());
	mysql_query('SET character_set_database = utf8'); 
	mysql_query ("SET NAMES 'utf8'");
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);
	session_start();
if (isset($_POST['login']) && isset($_POST['password'])){
	$login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
	$password = md5(trim($_POST['password']));
    $query = "SELECT user_id, user_login
            FROM users
            WHERE user_login= '$login' AND user_password = '$password'
            LIMIT 1";
    $sql = mysql_query($query) or die(mysql_error());
    if (mysql_num_rows($sql) == 1) {
        $row = mysql_fetch_assoc($sql);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['user_login'] = $row['user_login'];
		setcookie("CookieMy", $row['user_login'], time()+60*60*24*10);
		
   }
    else {
		header("Location: mylogin.html"); 
    }
}
if (isset($_SESSION['user_id'])){
	echo htmlspecialchars($_SESSION['user_login'])." <br />"."Вы авторизованы <br />
	Т.е. мы проверили сессию и можем открыть доступ к определенным данным";
	
} else {
	$login = '';
	if (isset($_COOKIE['CookieMy'])){
		$login = htmlspecialchars($_COOKIE['CookieMy']);
	}
	print <<< 	html
<form action="index.php" method="POST">
		Логин <input name="login" type="text" value = $login><br>
		Пароль <input name="password" type="password"><br>
		<input name="submit" type="submit" value="Войти">
	</form>
html;
}
?>
							
							
							
							
							
							
							<!--<a href="registration.php">Регистрация</a>-->
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
		<section class="centerNews">  
			<article>
							<?php
					mysql_connect("mysql.hostinger.ru", "u166870678_db", "opqewwp") or die (mysql_error ());
					mysql_select_db("u166870678_db") or die(mysql_error());
					$strSQL = "SELECT * FROM news";
					$rs = mysql_query($strSQL);
					while($row = mysql_fetch_array($rs)) {
					  echo $row['article'] . "<br />";
					  echo $row['text'] . "<br />";
					  echo $row['date'] . "<br />";
					  }
					mysql_close();
					?>
					</span>
                </div>
			</article>  
		</section>
			
        </div>
        <footer>
            <div>
                <span>© 2015 При использовании материалов ссылка на источник обязательна. Все права защищены</span>
            </div>
        </footer>
	</div>
    </body>
</html>