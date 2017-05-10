<!-- Меню -->
<?php
    $leftMenu = array(
                  array('link' => 'Главная', 'href'=>'index.php'),
                  array('link' => 'О нас', 'href'=>'about.php'),
                  array('link' => 'Контакты', 'href'=>'contact.php'),
                  array('link' => 'Таблица', 'href'=>'table.php'),
                  array('link' => 'Калькулятор', 'href'=>'calc.php')

                );

?>
<?php
   define("COPYRIGHT", "Barcone Web Studio");
?>
<?php
 setlocale(LC_ALL, "russian");
 $day = strftime('%a');
 $date = strftime('%d');
 $mon = strftime('%b');
 $year = strftime('%Y');
 $day = iconv("windows-1251", "UTF-8", $day);
 $mon = iconv("windows-1251", "UTF-8", $mon);
?>
<!-- Конец меню -->
   <?php
    $hour = (int)strftime('%H');
    $welcome = '';
      if($hour>0 and $hour<6)
        $welcome = 'Доброй ночи';
      elseif($hour>6 and $hour<12)
        $welcome = 'Доброе утро';
   elseif($hour>12 and $hour<18)
         $welcome = 'Добрый день';
      elseif($hour>18 and $hour<23)
          $welcome = 'Добрый вечер';
      else
          $welcome = 'Доброй ночи';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>Сайт нашей школы</title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
			<span class="slogan">приходите к нам учиться</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!--Заголовок -->
			<h3><?php echo $welcome; ?>, гость!</h3>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<blockquote>
			<?php
			  include ("test.php");// Дата и время
			?>
			</blockquote>
			<h3>Зачем мы ходим в школу?</h3>
			<p>
			У нас каждую минуту что то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто то отвечает у доски,
			кто- то отчаянно зубрит перед контрольной пройденный материал, кому- то ставят "пятерку" за
			</p>
			<h3>Что такое ЕГЭ?</h3>
			<p>
			Абревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен".
			почему "единый"?Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud .
			</p>
			<p>
			Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostruadipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud sed do eiusmod te mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
			</p>	
			<!-- Область основного контента-->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
        <?php       
        echo "<ul>";
        foreach($leftMenu as $item){
            echo "<li>";
            echo "<a href='{$item['href']}'>{$item['link']}</a>";
            echo "</li>";
        }
        echo "</ul>";
			

        ?>
        </div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy;<?php echo COPYRIGHT ?>, <?php $year; ?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>