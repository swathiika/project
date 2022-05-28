<?php
$name =$_POST['name'];
$email =$_POST['email'];
$contact number =$_POST['number'];
$queries =$_POST['queries'];

$to="swathikaswathi397@gmail.com";

$subject="Mail from Skincare";

$txt="Name= ".$name.  "\r\n Email= " .$email.  "\r\n Contact number=" .$number. " \r\n Queries= ".$queries;
$headers= "From :skincareonline@gmail.com" . "\r\n" .
"CC:somebodyelse@example.com";

if($email!=NULL)
{
mail($to,$subject,$txt,$headers);
}

header("Location:Thankyou.html");
?>
