<?php
if (isset($_POST['submit']))
  {
    echo "Your First Name is:" .$_POST["FName"] . "<br/>";
    echo "Your Last Name is:" .$_POST["LName"] . "<br/>";
    echo "Your City is:" .$_POST["City"]."<br/>";
    echo "Your State is:" .$_POST["State"]."<br/>";
    echo "<br/>"; 
    echo "Your Message is:" .$_POST["Message"]; 
  } 
?>