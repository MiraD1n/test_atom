<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Блокировка поля</title>
  <script>
   function agreeForm(f) {
    // Если поставлен флажок, снимаем блокирование кнопки
    if (f.agree.checked) f.autor_t.disabled = 0
    // В противном случае вновь блокируем кнопку
    else f.autor_t.disabled = 1
   }
  </script>
 </head>
 <body>
<?php ## Вывод содержимого таблицы catalogs
if (isset ($_REQUEST['JQL'])){

}
?>
<pre>

*тип обьекта - выпадающий список
*текст - поле
*проект TD/APPTRD - радиобаттон
*статус открыт/закрыт - чекбокс
</pre>
<form action="<?= $_SERVER['SCRIPT_NAME']?>" method="get">
<h4>*кто создал - поле+выпадающий список</h4>
  <select name="autor">
    <option [value1=""] [selected]></option>
    <option [value1="Хубиев"]>Хубиев</option>
    <option [value1="Полищук"]>Полищук</option>
  </select>
  <input type="text" name="autor_t" cols="30" rows="4" disabled>
  <input type="checkbox" name="agree" onclick="agreeForm(this.form)">
  <input type="submit" name="AUTOR" value="AUTOR">
  </form>

<form action="<?= $_SERVER['SCRIPT_NAME']?>" method="get">
<h4>*кто коментировал - поле+выпадающий список</h4>
    <select name="autor_k">
      <option [value1=""] [selected]></option>
      <option [value1="Хубиев"]>Хубиев</option>
      <option [value1="Полищук"]>Полищук</option>
    </select>
    <input type="text" name="autor_kk" [value=""]>
    <input type="checkbox" name="agree" onclick="agreeForm(this.form)">
    <input type="submit" name="coment" value="COMENT">
    </form>
    
<form action="<?= $_SERVER['SCRIPT_NAME']?>" method="get">
<h4>*промежуток времени - разделенные поля год месяц день время</h4>
<input type="text" name="day" cols="30" rows="4" disabled>
<input type="text" name="month" [value=""]>
<input type="text" name="year" [value=""]>

  <input type="checkbox" name="1" value="test">ONE</br>
  <input type="submit" name="JQL" value="JQL">
</form>
<pre>
<?php
  print_r($_GET);
?>
</pre>
</body>
</html>
