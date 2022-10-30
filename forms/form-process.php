<!DOCTYPE html>
<html>
  <head>
     <title>A Web Page</title>
     <meta charset="utf-8"/>
  </head>
  <body>
     <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
       First Name:<br/>
       <input type="text" name="FName" /><br/>
       Last Name:<br/>
       <input type="text" name="LName" /><br/>
       City:<br/>
       <input type="text" name="City" /><br/>
       State:<br/> <input type="text" name="State" /><br/>
       Message:<br/> <textarea name="Message" cols="30" rows="5">
       </textarea><br/>
       <input type="submit" name="submit" value="Submit Data" />
     </form>
  </body>
</html>
Вивести ім'я кожного з полів форми разом із пов'язаним значенням можна за допомогою циклу foreach:

<?php
foreach($_REQUEST as $key => $value) {
  echo $key; echo ": " .$value; echo "<br/>"; 
}
?>