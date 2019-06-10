<?php session_start() ?>
<?php header('Content-Type: text/html; charset= utf-8') ?>
<html>

<head>
    <meta charset="utf-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/link.css">
    <script type="text/javascript" src="jquery/jquery-1.6.4.js"></script>

</head>

<body>
    <div class="god">
        <ul id="gad">
            <li><a href="index.html"><i class="fa fa-home"></i>Главная</a></li>
            <li><a href="news.html"><i class="fa fa-th-list"></i>Новости</a></li>
            <li><a href="group.html"><i class="fa fa-cogs"></i>Группа</a>
                <ul>
                    <li><a href="history.html">История</a></li>
                    <li><a href="playlist.html">Плейлист</a></li>
                    <li><a href="clip.html">Клипы</a></li>
                    <li><a href="realese.html">Релизы</a></li>
                </ul>
            </li>
            <li><a href="team.html"><i class="fa fa-cogs"></i>Команда</a>
                <ul>
                    <li><a href="vocal.html">Вокал</a></li>
                    <li><a href="guitar.html">Гитара</a></li>
                    <li><a href="bas.html">Бас-гитара</a></li>
                    <li><a href="baraban.html">Барабаны</a></li>

                </ul>
            </li>
            <li><a href="contact.html"><i class="fa fa-envelope-open"></i>Контакты</a></li>
            <li><a href="sponsors.html"><i class="fa fa-envelope-open"></i>Спонсоры</a></li>
            <li><a href="video.html"><i class="fa fa-envelope-open"></i>Видео</a></li>
            <li><a href="tour.html"><i class="fa fa-envelope-open"></i>Тур</a></li>
        </ul>
    </div>


    <div class="main">
    <h1 align="center" style="color: white;">Личный кабинет</h1>

<?php require 'auto.php'; ?>

</br></br></br>

<h1 align='center' style='color: white;'>Связаться с нами:</h1>
<div align='center' class='formochk'>
    <form method=post id='myForm'>
        <div> <input type=text name=name placeholder="Введите ваше имя"></div>
        <div> <input type=text name=phon placeholder="8 900 777 66 55"></div>
        <div> <input type=text name=email placeholder="Введите Ваш E-mail"></div>
        <div class='formoch'>
            <textarea rows="7" cols="40" name="message"></textarea> <br />
        </div>
        <div><input name=knock type="submit" value="Отправить" /></div>
        </br>

        <br></br>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#myForm').submit(function() {
            var msg = $('#myForm').serialize();
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: msg,
                success: function(rez) {
                    $("#rt").html(rez);
                }
            });
            return false;
        });
    });
</script>
<div align='center' id='rt'> </div>
    </div>
</body>

</html>