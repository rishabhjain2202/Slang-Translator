<html>
<head> 
<link rel="Shortcut Icon" href="Images/favicon.ico">
<title>Slang Translator</title>                                                                                   
<style>                                                   

 
 #main                                                     
 {
  border:black thin solid;                               
  width:1335px;
  height:auto;
  position:relative;
  background-color:#FFFFCC;
  }

 #title
 {
  border:red thin solid none;
  width:1335px;
  height:100px;
  position:relative;
  background-color:#009989;
 }

 #logo
 {
  border:red thin solid none;
  width:160px;
  height:80px;
  position:relative;
  float:left;
  margin-top:10px;
  margin-left:25px;
 }

 #logo img
 {
  width:160px;
  height:80px;
 }

 #header
 {
  border:red thin solid none;
  width:900px;
  height:80px;
  position:relative;
  float:left;
  margin-top:10px;
  font-family:Verdana;
  color:white;
  font-size:25px;
  }

 #logos
 {
  border:red thin solid none;
  width:160px;
  height:80px;
  position:relative;
  float:right;
  margin-top:10px;
  margin-right:10px;
 }

 #logos img
 {
  width:160px;
  height:80px;
 }

  #middle
 {
  border:green thin solid none;
  width:1335px;
  height:500px;
  position:relative;
 }

 #Typemessage
 {
  border:red thin solid none;
  width:380px;
  height:500px;
  position:relative;
  float:left;
 }
 
 #middlepart
 {
  border:green thin solid none;
  width:400px;
  height:500px;
  position:relative;
  float:left;
 }

 
 #slangadd
 {
  border:red thin solid none;
  width:380px;
  height:390px;
  position:relative;
  float:left;
 }

 #logoss
 {
  border:red thin solid none;
  width:400px;
  height:80px;
  position:relative;
  float:center;
  margin-top:20px;
  margin-right:5px;
 }

 #logoss img
 {
  width:160px;
  height:80px;
 }
 
 #Disclaimer
 {
  border:red thin solid none;
  width:400px;
  height:500px;
  position:relative;
  float:left;
  position:relative;
  animation:myfirst 20s infinite;
  animation-direction:alternate;
  /* Firefox */
  -moz-animation:myfirst 20s infinite;
  -moz-animation-direction:alternate;
  /* Safari and Chrome */
  -webkit-animation:myfirst 20s infinite;
  -webkit-animation-direction:alternate;
  }

  @keyframes myfirst
  {
  0%   {left:0px; top:0px;}
  25%  {left:25px; top:0px;}
  50%  {left:25px; top:25px;}
  75%  {left:0px; top:25px;}
  100% {left:0px; top:0px;}
  } 
  @-moz-keyframes myfirst /* Firefox */
  {
  0%   {left:0px; top:0px;}
  25%  {left:25px; top:0px;}
  50%  {left:25px; top:25px;}
  75%  {left:0px; top:25px;}
  100% {left:0px; top:0px;}
  }
  @-webkit-keyframes myfirst /* Safari and Chrome */
  {
  0%   {left:0px; top:0px;}
  25%  {left:45px; top:0px;}
  50%  {left:45px; top:45px;}
  75%  {left:0px; top:45px;}
  100% {left:0px; top:0px;}
  }
 }
 
 #footer
 {
  border:black thin solid none;
  width:1325px;
  height:20px;
  position:relative;
 }

</style>
</head>
<center>
<body style="background-color:#000000">

   <div id="main">
                <div id="title">
	 		<div id="logo">
			<img src="Images/sms.png"/>
			</div>
			
			<div id="header">
			<p><strong>Sending an 'SMS' is actually Easy </strong></p>
			</div>
			
			<div id="logos">
			<img src="Images/slang.png"/>
          		</div>
	        </div>
	
	
         	<div id="middle">
			<div id="Typemessage">
                        <?
                        include_once ("email.php");
			?>
			</div>

                       <div id="middlepart">
                        <div id="logoss">
			<img src="Images/newslang.png"/>
          		</div>	        			
			<div id="slangadd">
                        <?
                        include_once ("addslang.php");
			?>
		        </div>
                       </div>
			
			<div id="Disclaimer">
                        <?
                        include_once ("authormessage.html");
			?>
			</div>
	         </div>
	
	        <hr/>
		<div id="footer">
                        <?
                        include_once ("footer.html");
			?>
		</div>
  </div>
</body>
</center>
</html>
