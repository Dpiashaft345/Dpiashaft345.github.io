
<?php 
	
	session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		
		$email = $_POST['email'];
	
		$descrition = $_POST['descrition'];

		
		
		if(!empty($email) && !empty($descrition))
		{

		
			
			$query = "insert into gorj (email,descriere) values ('$email','$descrition')";

			mysqli_query($con, $query);
			echo  '<center style="position:relative; top:73%;"> <h3 style="width: 350px; height: 35px;color:black;">Mesajul a fost trimis cu sucess!</h3></center>';

			
		}else
		{
			echo '<center style="position:relative; top:73%;"> <h3 style="width: 350px; height: 35px;color:black;">Informatiile introduse nu sunt valide!</h3></center>';
		}

		
	}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>

<body>

<br>
<br>
<br>
<br>

<img src="template1.png" style="position: absolute; width: 30%; offset-anchor: right center; top: 0px; left: 0px;">

<img src="template1.png" style="position: absolute; width: 30%; offset-anchor: left center; top: 0px; right: 0px; -webkit-transform: scaleX(-1);transform: scaleX(-1);">
<img src="template2.png" style="position: absolute; width: 30%;  bottom: 0px; right: 0px;">
<img src="template2.png" style="position: absolute; width: 30%;  bottom: 0px; left: 0px; -webkit-transform: scaleX(-1);transform: scaleX(-1);">


<center>
<h1>Contact</h1>
</center>



	<div id="box">
		
		<form method="post">
		
			
			<br>
            <br>
            <br>
            <br>
            
            <center>
			<input id="text" type="email" name="email" placeholder="email"><br><br>
            <br>
			<textarea id="textdesc" name="descrition" placeholder="mesaj max 300 de caractere"></textarea>
            <br>
            <br>
			<input id="button" type="submit" value="Trimite"><br><br>
</center>
			
		</form>
	</div>
</body>
</html>


<style>
	

    body{
    background: -webkit-gradient(linear, left top, left bottom, from(rgb(206, 206, 206)), to(rgb(254, 255, 234))) fixed;
}
	#text{
        border: 2px solid #00ff2a;
		
		height: 40px;
		
		padding: 4px;
		
       
		width: 80%;
        background: -webkit-gradient(linear, left top, left bottom, from(rgb(206, 206, 206)), to(rgb(254, 255, 234))) fixed;
		color:black;
		outline-style: none;
		outline: none;
		outline: 0;
        border: 4px;
border-style: solid;
border-radius: 6px;
 border-image: linear-gradient(to top, rgb(255, 150, 13), rgb(255, 226, 192)); 
 border-image-slice: 1; 
 -webkit-mask: 
     linear-gradient(#ffffff00 0 0) content-box, 
     linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor; 
          mask-composite: exclude; 
	}

	#textdesc{
        border: 2px solid #00ff2a;
		
		height: 200px;
	
		padding: 4px;

        max-width:90%;
        max-height:210px;
		width: 80%;
        background: -webkit-gradient(linear, left top, left bottom, from(rgb(206, 206, 206)), to(rgb(254, 255, 234))) fixed;
		color:black;
		outline-style: none;
		outline: none;
		outline: 0;
        border: 4px;
border-style: solid;
border-radius: 6px;
 border-image: linear-gradient(to top, rgb(255, 150, 13), rgb(255, 226, 192)); 
 border-image-slice: 1; 
 -webkit-mask: 
     linear-gradient(#ffffff00 0 0) content-box, 
     linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor; 
          mask-composite: exclude; 
	}


	#text:focus{

		box-shadow: 0px 0px 10px white;

	}

	#textdesc:focus{

box-shadow: 0px 0px 10px white;

}
	
	#button{
		padding: 10px;
		width: 130px;
	
		color: black;
		background: -webkit-gradient(linear, left top, left bottom, from(rgb(255, 195, 122)), to(rgb(255, 156, 36)));
		border: none;
        border-radius:5px;
		
	}

	#button:hover{
		box-shadow: 0px 0px 10px black;

	}

	#box{

        width: 35%; 
        margin:auto;
height: 45%; 
background: -webkit-gradient(linear, left top, left bottom, from(rgb(255, 253, 228)), to(rgb(252, 255, 194)));
border: 4px;
border-style: solid;
border-radius: 6px;
 border-image: linear-gradient(to top, rgb(255, 150, 13), rgb(255, 226, 192)); 
 border-image-slice: 1; 
 -webkit-mask: 
     linear-gradient(#ffffff00 0 0) content-box, 
     linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor; 
          mask-composite: exclude; 
	}


button {
background-color: transparent;
  color: #e8e8e8;
  border: none;
  width: 60px;
  position: absolute;
  right:40%;
  top:350px;
 
  font-weight: bold;
  font-style: oblique;  
  font-size: large;
 
}
button:hover{

	color: #00ff2a;

}



	</style>