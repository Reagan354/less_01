<?php 
$cols = 10;
$rows = 10;
?>
<?php
 $leftMenu=array(
    array('link'=>'Главная', 'href'=>'index.php'),
    array('link'=>'О нас', 'href'=>'about.php'),
    array('link'=>'Контакты', 'href'=>'contacts.php'),
    array('link'=>'Таблица', 'href'=>'table.php'),
    array('link'=>'Калькулятор', 'href'=>'calc.php'),
 );

?>
 
<?php
   function drawMenu($leftMenu, $vertical=true){  
       $style='';
       if(!$vertical)
           $style="style='display:inline;margin-right:15px'";
   echo "<ul>";
foreach($leftMenu as $item){
   echo "<li$style>";    
   echo "<a href='{$item['href']}'>{$item['link']}</a>"; 
}  echo "</li>"; 
   echo "</ul>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>Таблица умножения</title>
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
			<!-- Заголовок -->
			<h1>Таблица умножения</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<form action=''>
				<label>Количество колонок: </label><br />
				<input name='cols' type='text' value="" /><br />
				<label>Количество строк: </label><br />
				<input name='rows' type='text' value="" /><br />
				<label>Цвет: </label><br />
				<input name='color' type='text' value="" /><br /><br />
				<input type='submit' value='Создать' />
			</form>
			<!-- Таблица -->
            <?php  
            echo "<table border='1' width='300px'>";
            for($tr=1; $tr<=$rows; $tr++){
                echo "<tr>";
                for($td=1; $td<=$cols; $td++){
                    if($tr==1 or $td==1)
                        echo "<th style='background:yellow'>" . $tr * $td . "</th>";
                    else
                        echo "<td>" . $tr * $td . "</td>";
                }
                echo "</tr>";
            }    
            echo "</table>";     
            ?>
			<!-- Таблица -->
			<!-- Область основного контента -->
		</div>
		<div id="nav"> 
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
<?php			
  drawMenu($leftMenu);
?>            
			<!-- Меню -->
	 	</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
<?php			
  drawMenu($leftMenu, false );
?>  
        <hr>			
			&copy; <?php echo COPYRIGHT ?>, <?php $year; ?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>