<?php
    include("users.php");

    $loginErr = "";
    $passErr = "";
    if (isset ($_POST ['submitB'])) { 
        $valid_form = true;
        if ($_POST ['login'] == "") {
            $loginErr = "Введіть своє ім'я! ";
            $valid_form = false;
        } else {
            $login = $_POST ['login'];
        }
        if ($_POST ['pass'] == "") {
            $passErr = "Введіть пароль! ";
            $valid_form = false;
        } elseif (strlen ( $_POST ['pass'] ) < 4) {
            $passErr = "Пароль повинен містити щонайменше 4 символи! ";
            $valid_form = false;
        } else {
            $password = $_POST ['pass'];
        }
        if ($valid_form) {
            $current_user = [
                $login => $password
            ];
            $logins = array_intersect_key($current_user, $users);

            if ($logins && $users[$login] == $password){
                header("Location: user.php?login=$login");
            } else{
                echo "<h1>We can't find this user!</h1>";
            }
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
     <form method="POST" action="<?= $_SERVER['PHP_SELF']?>"/>
        Введіть login: <input type="text" name="login"/><?= $loginErr ?><br/>
        Введіть пароль (не менш ніж 4 символи): <input type="password" name="pass"/><?= $passErr ?><br/>
        <input type="submit" name="submitB" value="Підтвердити"/>
     </form>
   </body>
</html>