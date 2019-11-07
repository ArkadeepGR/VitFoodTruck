<?php 
	if($_POST)
    {
 	$emailTo="arkadeepghoshroy@gmail.com";
	$subject=$_POST[subject];
	$body=$_POST[message];
	$header="From:$_POST[email]";
    
	if(mail($emailTo,$subject,$body,$header))
   		echo "<script type='text/javascript'>alert('Message Sent');</script>";
    else
      	echo "<script type='text/javascript'>alert('Message NOT Sent, Try Again.');</script>";
    } 
?>
