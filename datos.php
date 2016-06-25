<?php
//By SadFud
$to= $_POST['to'] ;
$subject = $_POST['asunto'] ;	
$message = $_POST['mensaje'] ;
$from = $_POST['cuenta_su'] ;	
$headers = "From:" .$from;	
$mail = mail($to,$subject,$message,$headers,$from);	
if($mail){echo "Email sent to" .$to;}?>