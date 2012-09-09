<html>
  <head>
    <script type="text/javascript">
	/*
	This function checks if input is empty or not
	Function validate()
	@author Rishabh
	*/
      function validate()
      {
        if(document.getElementById("slang").value=="" && document.getElementById("Description").value=="")
        {
          alert('You  left  both  the  fields  empty');
          exit;
        }
        if(document.getElementById("slang").value=="")
        {
          alert('You  left  the  "Slang"  Field  empty');
          exit;
        }
        if(document.getElementById("Description").value=="")
        {
          alert('You  left  the  "Description"  Field  empty');
          exit;
        }
        else
        {
          alert('Word Added.\n\nThanks for Your Support.');
        }
      }
    </script>
  </head>
  <body >
    <br/>
    <br/>
    <b>
      <font color="brown">
        Increase your Submission Chance
      </font>
    </b>
    <br/>
    <br/>
    <form method="post" name="slangadd">
      <b>
        Slang / Acronym: 
      </b>
      <br />
      
      <input type="text" name="Slang" id="slang"/>
      <br />
      <b>
        Stand for / Description :
      </b>
      <br />
      
      <input type="text" name="Description" id="Description"/>
      <br/>
      <br />
      <input type="submit" button style="background-color:lightblue;" value=" Add Slang " onclick="validate()">
    </form>
    
    <?php
$slang = $_POST['Slang'];
$descr = $_POST['Description'];
if((empty($slang)) || (empty($descr)))
//To exit when the input field is empty 
{
}
else
{   
$old_content = file_get_contents("slang_dictionary");
$newslang = "s/$slang/$descr/g" ;
$file= fopen("slang_dictionary",'w');                                                      
$content = $newslang."\n".$old_content;
fwrite($file,$content);
fclose("slang_dictionary");
}
?>
  </body>
</html>
<html>
	<head>
		<script type="text/javascript">
			function validate()
				{
					if(document.getElementById("slang").value=="" && document.getElementById("Description").value=="")
					{
						alert('You  left  both  the  fields  empty');
						exit;
					}
	if(document.getElementById("slang").value=="")
	{
		alert('You  left  the  "Slang"  Field  empty');
		exit;
	}
	if(document.getElementById("Description").value=="")
	{
		alert('You  left  the  "Description"  Field  empty');
		exit;
	}
	else
	{
		alert('Word Added.\n\nThanks for Your Support.');
	}
}
</script>
</head>
<body >
<br/><br/>
<b><font color="brown">Increase your Submission Chance</font></b><br/><br/>
<form method="post" name="slangadd">
<b>Slang / Acronym: </b><br /> <input type="text" name="Slang" id="slang"/><br />
<b>Stand for / Description :</b><br /> <input type="text" name="Description" id="Description"/><br/><br />
<input type="submit" button style="background-color:lightblue;" value=" Add Slang " onclick="validate()">
</form>

<?php
        $slang = $_POST['Slang'];
        $descr = $_POST['Description'];
        if((empty($slang)) || (empty($descr)))
                                                                       //To exit when the input field is empty 
        {
      	}
	else
	{   
        $old_content = file_get_contents("slang_dictionary");
        $newslang = "s/$slang/$descr/g" ;
        $file= fopen("slang_dictionary",'w');                                                      
        $content = $newslang."\n".$old_content;
        fwrite($file,$content);
        fclose("slang_dictionary");
        }
?>
</body>
</html>


