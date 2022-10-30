<?php
    if (isset ( $_POST ['submitB'] )) { 
	$valid_form = true;
	if ($_POST ['name'] == "") {
		echo "Введіть своє ім'я! ";
		$valid_form = false;
	} else {
		$name = $_POST ['name'];
	}
	if ($_POST ['uname'] == "") {
		echo "Введіть ім'я коритстувача! ";
		$valid_form = false;
	} else {
		$username = $_POST ['uname'];
	}
	if ($_POST ['pass'] == "") {
		echo "Введіть пароль! ";
		$valid_form = false;
	} elseif (strlen ( $_POST ['pass'] ) < 4) {
		echo "Пароль повинен містити щонайменше 4 символи! ";
		$valid_form = false;
	} else {
		$password = $_POST ['pass'];
	}
	if ($valid_form == true) { 
		echo "Вітаємо Вас, $username!";
	}
	$valid_form = false;
    }
?>

<!DOCTYPE html>
<html>
  <head>
     <title>A Web Page</title>
     <meta charset="utf-8"/>
  </head>
  <body>
     <form method="post" action="<?= $_SERVER['PHP_SELF']?>"/>
        Введіть ім'я: <input type="text" name="name"/><br/>
        Введіть логін: <input type="text" name="uname"/><br/>
        Введіть пароль (не менш ніж 4 символи): <input type="password" name="pass"/><br/>
        <input type="submit" name="submitB" value="Підтвердити"/>
     </form>
   </body>
</html>