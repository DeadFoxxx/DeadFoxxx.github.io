<?php
echo "
<head>
	<meta charset='UTF-8'>
	<title>Angel Eyes</title>
	<link rel='stylesheet' type='text/css' href='../css/main.css'>
</head>
<body style='background-color:#dbac76;'>
	<div id='block'>

	<header>

	</header>
	 <!--шапка-->

	
	<div >
		
			<ul class='menu'>
				<li><a href='index.html'>Главная</a></li>
				<li><a href='nursery.html'>О питомнике</a></li>
				<li><a href='#'>Новости</a></li>
				<li><a href='#'>Гостевая книга</a></li>
			</ul>	
	</div>	



	<div class='leftmenu'>
	<ul>
                     <li><a href='o porode.html'>О породе</a></li>
                     <li><a href='koty.html'>Коты</a></li>
                     <li><a href='koshka.html'>Кошки</a></li>
                     <li><a href='kotyta.html'>Котята</a></li>
                     <li><a href='na prerode.html'>Наши кошки на природе</a></li>
                     <li><a href='gallery.html'>Галлерея</a></li>
                     <li><a href='veterenarn otdel.html'>Ветеринарный отдел</a></li>
                     <li><a href='#'>Контакты</a></li>
                 </ul>	

	</div>
<div  class='content' >	
<!--Подключение обработчика формы--><form id='forma' action='script.php'method='post'>
<h1>Гостевая книга</h1>
<p>Заполнив данные поля формы, вы сможете отправить нам своё сообщение, отзыв, комментарий и т.п.</p>
<p>Имя пользователя<br /><input type='text' name='name'></p>
<p>E-mail<br /><input type='text' name='email'></p>
<p>Сообщение<br /><textarea name='mail' cols='40' rows='3'></textarea></p></p>
<p><input type='submit'></p></form><br /><br /></div>
<h1 style='width:500px; margin-left:50px;'>Записи в нашей гостевой книге:</h1>
";
 	
// Подключаемся к БД
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$database = 'gostevaja';
 
mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);

$r=mysql_query("SELECT * FROM kniga ORDER BY id DESC"); // Создаем SQL запрос, //сортировка по убыванию ID
for($i=0; $i< mysql_num_rows($r); $i++) // Перебор всех записей в таблице
{
$f=mysql_fetch_array($r); // Обрабатывает ряд результата запроса, возвращая ассоциативный массив, численный массив или оба
print "<table class='content'  id='zapici'><tr id='z1'><td>$f[1]<hr></td></tr><trid='z2'><td>$f[2]:</td></tr><tr><td>$f[4] <br></td></tr></table>

"; // Вывод значений в HTML, где $f[0], значение первого столбца, $f[1] - значение второго и т.д. 
}
echo"
<div class='footer'>
     <img src='img/ggg.png' alt='' width='900' height='70' /><br />
         </div>
	</div>
</body></html>
"
?>
