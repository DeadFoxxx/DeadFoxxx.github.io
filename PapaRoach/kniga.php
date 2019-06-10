<?php header('Content-Type: text/html; charset= utf-8')?>
<?php
echo "
<head>
    <meta charset='utf-8'>
    <title>Контакты</title>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/link.css'>

</head>

<body>
    <div class='god'>
        <ul id='gad'>
            <li><a href='index.html'><i class='fa fa-home'></i>Главная</a></li>
            <li><a href='news.html'><i class='fa fa-th-list'></i>Новости</a></li>
            <li><a href='group.html'><i class='fa fa-cogs'></i>Группа</a>
                <ul>
                    <li><a href='history.html'>История</a></li>
                    <li><a href='playlist.html'>Плейлист</a></li>
                    <li><a href='clip.html'>Клипы</a></li>
                    <li><a href='realese.html'>Релизы</a></li>
                </ul>
            </li>
            <li><a href='team.html'><i class='fa fa-cogs'></i>Команда</a>
                <ul>
                    <li><a href='vocal.html'>Вокал</a></li>
                    <li><a href='guitar.html'>Гитара</a></li>
                    <li><a href='bas.html'>Бас-гитара</a></li>
                    <li><a href='baraban.html'>Барабаны</a></li>

                </ul>
            </li>
            <li><a href='contact.html'><i class='fa fa-envelope-open'></i>Контакты</a></li>
            <li><a href='sponsors.html'><i class='fa fa-envelope-open'></i>Спонсоры</a></li>
            <li><a href='video.html'><i class='fa fa-envelope-open'></i>Видео</a></li>
            <li><a href='tour.html'><i class='fa fa-envelope-open'></i>Тур</a></li>
        </ul>
    </div>


    <div class='main'>
       
<h2 align='center'>Гостевая книга</h2>
	<p align='center' style='font-size: 25px; color: white;'>Заполнив данные поля формы, вы сможете отправить нам своё сообщение, отзыв, комментарий и т.п.</p>
</br>

<form id='forma' action='script.php' method='post'>
<table align='center' class='kniga1' style='color: white;'>
<tr>
<td>Имя пользователя</td><td><input type='text' name='name'></td>
</tr>

<tr>
<td>E-mail<br /></td><td><input type='email' name='email'></td>
</tr>

<tr>
<td>Сообщение</td><td><textarea name='mail' cols='22' rows='3'></textarea></td>
</tr>

<tr>
<td><input type='submit'></td>
</tr>
</table>
</form>
</center>


</br></br></br>
<h1 style='color: white;' align='center'>Записи в нашей гостевой книге:</h1>
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
print " <table align='center' class='kniga2' style='color: white;'><tr id='z1'><td>$f[1]<hr></td></tr><trid='z2'><td>$f[2]:</td></tr></br></br><tr><td>$f[4] <br></td></tr></table></br>

"; // Вывод значений в HTML, где $f[0], значение первого столбца, $f[1] - значение второго и т.д. 
}
echo"
</div>

</body>
"
?>
