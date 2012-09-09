<html>
<head>
<title>Slang Translator</title>
<script type="text/javascript">
function re()
{
if(document.getElementById("text2").value=="")
{
alert('Fill the "Compose Message"  Field');
window.location="slangtranslator.php";
}
else
{
window.location="slangtranslator2.php";
}
}
function valid()
{
if(document.getElementById("text1").value=="")
{
alert('You  left the "Compose Message"  Field  empty');
exit;
}
}
</script>
</head>
<body>

  <?php
  $var = $_POST['message'];                                    //To put the user input into file 
  $infile = fopen("message.txt", "w");
  fwrite($infile, $var); 
  fclose($infile); 
  
  shell_exec('sh replace.sh');                               //To execute the script for replacing the words
  
  $content = file_get_contents("display.txt"); 
  ?>          
  
        <br/><b>COMPOSE YOUR MESSAGE :</b>
	<form method="post" name="message">
	<textarea name="message" id="text1" rows="11" cols="38" ><?php echo $var ;?></textarea><br/>
	<input type="submit" style="background-color:lightblue;" value="Translate Message" onclick="valid();">
	</form>
          
  
        <b>YOU ENTERED THE MESSAGE :</b>
        <form method="post" name="confirm" >
	<textarea name="msg" rows="11" cols="38" id="text2" readonly="readonly"><?php echo $content ;?></textarea><br/>
	<input type="button" button style="background-color:lightblue;" name="Confirm" value="Send Message " onclick="re();"><br/>
	</form>
        
   
  
</body>
</html>


