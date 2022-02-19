<?php 

$formText =  trim(htmlspecialchars(stripslashes($_POST['text'])));       // deleting spaces from start and end of our post variable by using trim() function                                
$formEmail =  trim(htmlspecialchars(stripslashes($_POST['email'])));     // detecting special chars by using htmlspecialchars() function and striping all slashes by stripslashes() function
$header    = "contact from my personal page";                            // our message title
$myEmail = "hayrapetyan2203@gmail.com";                                  // email adress, to whom we send message. Here you have to write your email. 
$send = mail($myEmail, $header, $formText, "Content-type:text/plain; charset = UTF-8\r\nFrom:$formEmail");  // sending mail by using php's mail() function.
 ?>