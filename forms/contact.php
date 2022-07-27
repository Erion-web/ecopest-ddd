<?php
if (isset ($_POST[ " submit "])){
  $name = $_POST[ 'name' ];
  $mailForm = $_POST[ 'mail'];
  $message = $POST[ "message ' ];
 

$mailTo = "thewebdevtutorials@gmail.com"
$headers= "From: ". $mailFrom;
$txt="You have a message".$name". \n\n".$message;
mail ($mailTo, $name, $txt, $headers) ;
header ("Location : index . html ?MessageSent ")
}
?>  