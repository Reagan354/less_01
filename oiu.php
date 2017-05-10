<?php
 $leftMenu = array (
    array('nadpis'=>'Главная', 'ssilka'=>'index.php'),
    array('nadpis'=>'О нас', 'ssilka'=>'about.php'),
    array('nadpis'=>'Контакты', 'ssilka'=>'contacts.php'),
    array('nadpis'=>'Таблица', 'ssilka'=>'table.php'),
    array('nadpis'=>'Калькулятор', 'ssilka'=>'calc.php'),
 )
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>массивы</title>
</head>

<body>


    <!-- Навигация -->
    <h2>Статическая переменная</h2>
        <!-- Меню -->
<?php    
function test(){
    static $a=0;
    echo $a++; 
 }

test();
test();
test();
     
?>            

        <!-- ------------Занимаемся по этому материалу!!!!
http://labs.org.ru/php-4/#__php_Break_Continue


 <table border= '1' width="300px">
    <tr>
        <th width="30%" align="center">№ п/п</th>
        <th align="center">Фамилия</th>  
    </tr>
    <tr>
        <td width="30%">1</td>
        <td>Иванов</td>
    </tr>
    <tr>
        <td width="30%">2</td>
        <td>Петров</td>
    </tr>
 </table>  -->

</body>

</html>