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
	 <!--�����-->

	
	<div >
		
			<ul class='menu'>
				<li><a href='index.html'>�������</a></li>
				<li><a href='nursery.html'>� ���������</a></li>
				<li><a href='#'>�������</a></li>
				<li><a href='#'>�������� �����</a></li>
			</ul>	
	</div>	



	<div class='leftmenu'>
	<ul>
                     <li><a href='o porode.html'>� ������</a></li>
                     <li><a href='koty.html'>����</a></li>
                     <li><a href='koshka.html'>�����</a></li>
                     <li><a href='kotyta.html'>������</a></li>
                     <li><a href='na prerode.html'>���� ����� �� �������</a></li>
                     <li><a href='gallery.html'>��������</a></li>
                     <li><a href='veterenarn otdel.html'>������������ �����</a></li>
                     <li><a href='#'>��������</a></li>
                 </ul>	

	</div>
<div  class='content' >	
<!--����������� ����������� �����--><form id='forma' action='script.php'method='post'>
<h1>�������� �����</h1>
<p>�������� ������ ���� �����, �� ������� ��������� ��� ��� ���������, �����, ����������� � �.�.</p>
<p>��� ������������<br /><input type='text' name='name'></p>
<p>E-mail<br /><input type='text' name='email'></p>
<p>���������<br /><textarea name='mail' cols='40' rows='3'></textarea></p></p>
<p><input type='submit'></p></form><br /><br /></div>
<h1 style='width:500px; margin-left:50px;'>������ � ����� �������� �����:</h1>
";
 	
// ������������ � ��
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$database = 'gostevaja';
 
mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);

$r=mysql_query("SELECT * FROM kniga ORDER BY id DESC"); // ������� SQL ������, //���������� �� �������� ID
for($i=0; $i< mysql_num_rows($r); $i++) // ������� ���� ������� � �������
{
$f=mysql_fetch_array($r); // ������������ ��� ���������� �������, ��������� ������������� ������, ��������� ������ ��� ���
print "<table class='content'  id='zapici'><tr id='z1'><td>$f[1]<hr></td></tr><trid='z2'><td>$f[2]:</td></tr><tr><td>$f[4] <br></td></tr></table>

"; // ����� �������� � HTML, ��� $f[0], �������� ������� �������, $f[1] - �������� ������� � �.�. 
}
echo"
<div class='footer'>
     <img src='img/ggg.png' alt='' width='900' height='70' /><br />
         </div>
	</div>
</body></html>
"
?>
