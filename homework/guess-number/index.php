<?php

$n = $_POST['num'];
$count = 0; // Кількість спроб
$text = ""; // Текст підсказки
$nameErr = ""; // Повідомлення про помилку

if (isset($_POST['Clear'])) { // Якщо натиснута кнопка 'Clear'
    unset($_POST); // Видалення массиву $_POST
    $count = 0;
    $text = "";
    $nameErr = "";
    header("Location:".$_SERVER['PHP_SELF']); // Перечитуємо ту ж саму сторінку
    exit; // Выход
  }

if (isset($_POST['Submit'])) { // Якщо натиснута кнопка 'Submit'
  $count = $_POST['hidden'] + 1;// Збільшуємо лічильник на 1

  if (empty($_POST["my_number"])) { // Якщо нічого не ввели
    $nameErr = "Число обов'язкове для введення!";
  } else {
    $my_number = trim($_POST["my_number"]);// Видаляємо зайві прогалини

    // перевірка, чи міститься лише число
    if (!preg_match("/^[1-8]$/", $my_number)) {
      $nameErr = "Дозволяється лише число від 1 до 8!";
    }
  }
  if ($nameErr === "") { // Якщо не було помилки
    $text = $count."|";
    if ($my_number > $n)
      $text .= "Занадто багато!";
    elseif ($my_number < $n) {
      $text .= "Замало!";
    } else {
      $text .= "Точно! Вгадано з $count спроби!<br/>";
    }
  }
}

echo $n;

?>

<p>Вгадай число от 1 до 8:</p>
<form action="<?= $_SERVER['PHP_SELF']?>" name="myform" method="POST">
  <?= $text ?><br/>
  <input type="text" name="my_number" size="5"><?= $nameErr ?><br/>
  <input type="hidden" name="hidden" size="50" value="<?= $count ?>">
  <input name="Submit" type="submit" value="Відправити"><br/>
  <input name="Clear" type="submit" value="Заново">
  <input type="hidden" name="num" size="50" value="<?= rand(1, 8) ?>">
</form>