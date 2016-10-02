<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "vaibhav.mehtaaa@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $comment = $_REQUEST['comment'];
  $subject =   "Important ! ". $name. " Wants to connect with you."
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>