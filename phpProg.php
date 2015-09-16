
<!DOCTYPE html>
<html>
    <head>
        
    
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>программирование на PHP</title>
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
						</span>
					</div>
				</li>
			</ul>
		</div>
		<!--
        <div id="rp_list" class="rp_list">
			<ul>
				<li>
					<div>
						<img src="resurces/images/left/glava.jpg" alt=""/>
						<span class="rp_title">Глава и правительство Чеченской Республики</span>
						<span class="rp_links">
							<a target="_blank" href="http://www.chechnya.gov.ru">Войти</a>
						</span>
					</div>
				</li>
				<li>
					<div>
						<img src="resurces/images/left/minkom.jpg" alt=""/>
						<span class="rp_title">Минкомсвязь России</span>
						<span class="rp_links">
							<a target="_blank" href="http://minsvyaz.ru/ru/">Войти</a>
						</span>
					</div>
				</li>				



                                    
				<li>                                        
					<div>
						<img src="resurces/images/left/portalchr1.jpg" alt=""/>
						<span class="rp_title">Портал государственных и муниципальных услуг Чеченской Республики</span>
						<span class="rp_links">
							<a target="_blank" href="http://pgu.gov-chr.ru/">Войти</a>
						</span>
					</div>
				
                </li>
                <li>
					<div>
						<img src="resurces/images/left/mtischr.jpg" alt=""/>
						<span class="rp_title">Министрество транспорта и связи Чеченской Республики</span>
						<span class="rp_links">
							<a target="_blank" href="http://www.mtischr.ru">Войти</a>
						</span>
					</div>
				</li>
			</ul>
		</div>
        -->
        <div id="main">
            <aside class="leftAside">
                <h3>Темы статей</h3>
                <ul>
                    <li><a href="#google">google</a></li>
                    <li><a href="#institut">институт развития</a></li>
                    <li><a href="#">Тема 3</a></li>
                    <li><a href="#">Тема 3</a></li>
                    
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