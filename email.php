<html>
<head>
<script type="text/javascript">
function setFocus()
{
document.getElementById("name").focus();     
}
function val()
{
if(document.getElementById("field").value=="")
{
alert('You  left the Email Field  empty');
exit;
}
else
{
alert('Your Message has been Sent');
exit;
}
}
</script>
</head>
<body OnLoad="document.emailfill.email.focus();">
<br/><br/><br/><br/><br/><br/>

<?php
if($_POST['email'])
                {
                $email=$_POST['email'];
                }
//Email stuff
                                $content = file_get_contents("display.txt"); 
                                $subject = "Message From Slang Translator";
                                $message = "".$content;
                                $from = "rishabhjain.2202@gmail.com";
                                $headers = "From:" . $from;
                                $mailConfirm=mail($email,$subject,$message,$headers);
                                                                      
?>

<form method="post" name="emailfill"><br/><br/>
Enter the Email-id: <br/><br/><input type="email" name="email" id="field"><br/><br/>
<input type="submit" style="background-color:lightblue;" onclick=val();>
</form>
<br/><br/><br/><br/>
<a href="/slangtranslator/slangtranslator.php">Compose New Message</a>


</body>
</html>

