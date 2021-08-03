<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Portfolio</title>
</head>
<body>
<?php

	$name = "Nathaniel T. Villanueva";
	$bday = " Feb. 06, 1998";
	$age = "23 yrs old";
	$addr = "Pio del Pilar, Makati City";
	$wzod = "Aquarius";
	$czod = "Tiger";
	$schl = "University of Makati";
	$stat = "Graduate";
	$cour = "Information Technology Service Management";
	$musc = "Music";
	$cook = "Cooking";
	$anim = "Anime";
	$mang = "Manga / Manwha / Light Novels";
 ?>

 <style type="text/css">
 	.header{
 		background-color: black;
 		text-align: center;
 		color: white;
 		border: 10px solid;
 		border-color: white;
 	}
 	body{
 		background-color: dimgray;
 		padding: 20px;
 		font-size: 19px;
 	}
 	.main{
 		background-color: gray;
 		text-align: center;
 		padding: 20px;
 		color: white;
 		border: 3px solid;
 		border-color: white;
 	}.main b{
 		color: lightgray;
 	}
 	.col1{
 		background-color: lightgray;
 		text-align: left;
 		padding-left: 100px;
 		border: 3px solid;
 		border-color: white;
 	}
 	.col1 h2{
 		color: darkblue;
 	}
 	.col2{
 		background-color: lightgray;
 		text-align: right;
 		padding-right: 100px;
 		border: 3px solid;
 		border-color: white;
 	}
 	.col2 h2{
 		color: darkgreen;
 	}
 	.row{
 		background-color: gray;
 		padding: 20px;
 	}

 </style>

<div class="header">
	<h1>My Portfolio</h1>
</div>

<div class="main">
	<p><b>Name: </b><?php echo "$name"; ?></p>
	<p><b>Birthday: </b><?php echo "$bday"; ?></p>
	<p><b>Age: </b><?php echo "$age"; ?></p>
	<p><b>Address: </b><?php echo "$addr"; ?></p>
	<p><b>Western Zodiac: </b><?php echo "$wzod"; ?> &nbsp <b>Chinesse Zodiac: </b><?php echo "$czod"; ?></p>
</div>
<br>
<div class="row">
	<div class="col1">
		<h2>Education</h2>
		<p><b>School: </b><?php echo "$schl"; ?></p>
		<p><b>Level: </b><?php echo "$stat"; ?></p>
		<p><b>Course: </b><?php echo "$cour"; ?></p>	
	</div>
	<br>
	<div class="col2">
		<h2>Hobbies</h2>
		<ul style="list-style-type:none;" >
			<li><b><?php echo "$musc"; ?></b></li>
			<li><b><?php echo "$cook"; ?></b></li>
			<li><b><?php echo "$anim"; ?></b></li>	
			<li><b><?php echo "$mang"; ?></b></li>
		<ul>		
	</div>
</div>

</body>
</html>