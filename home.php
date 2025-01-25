<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
</head>
<?php
$user=$_POST['user'];
$ram=$_POST['ram'];
$cpu=$_POST['cpu'];
$hdd=$_POST['hdd'];

?>
<body>
<h1>GUIDING RIG</h1>
</body><?php echo "username:$user<br>RAM:$ram GB<br>CPU:intel/ryzen $cpu series<br>HDD:$hdd GB" ?>
<a href="index.php"><button>reset data</button></a>
<hr>
<h1> available game data </h1>

<div class="container">
	<label><div class="tiles" title="Assassins creed unity">
		<?php
		$r=8;
		$c=5;
		$h=55;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/acu.jpeg">
	</div></label>
	
	
	<label>

	<div class="tiles" title="Marvel's spiderman">
		<?php
		$r=16;
		$c=5;
		$h=60;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/sm.jpeg">
	</div></label>
	<label>
	<div class="tiles" title="Titanfall 2">
		<?php
		$r=4;
		$c=3;
		$h=50;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/tf2.jpeg">
	</div></label><label>
	<div class="tiles" title="Watch dogs">
		<?php
		$r=4;
		$c=3;
		$h=25;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/wd.jpg">
	</div></label><label>
	<div class="tiles" title="Watch Dogs 2">
		<?php
		$r=8;
		$c=3;
		$h=30;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/wd2.jpeg">
	</div></label>
	<label>
	<div class="tiles" title="Shadow of the Tomb Raider">
		<?php
		$r=8;
		$c=5;
		$h=55;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/sotr.jpeg">
	</div></label>
	<label>
	<div class="tiles" title="Mad Max">
		<?php
		$r=8;
		$c=5;
		$h=55;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>

		<img src="img/madmax.jpeg">
	</div></label>

	<label>
	<div class="tiles" title="Forza Horizon 5">
		
		<?php
		$r=8;
		$c=5;
		$h=55;
		if($ram>=$r&& $cpu>=$c && $hdd>=$h)
		{
			echo "<h3 class='green'>supported</h3>";
		}
		else
		{
			echo "<h3 class='red'>not supported</h3>";
		}

		?>
		
		<img src="img/forza.jpg">
	</div></label>
</div>
</body>
<style type="text/css">
	h1
	{

	}
	button
	{
		background-color: grey;
		color: white;
	}
	button:hover
	{
		transform: scale(1.2);
		cursor: pointer;
	}
	label:hover h3.green{
		background-color: green;
	}
	label:hover h3.red{
		background-color: red;
	}
	h3
	{
		position: absolute;
	}
	label:hover h3
	{
		background-color: blue;
		padding: 5px;
		margin: 10px;
		font-weight: 32;

		font-family: monospace;
	}
	label:hover {
		color: white;
		


	}
	h1
	{

	}
	label{
		color: transparent;
	}
	img.logo
	{
		width: 120px;
		height: 150px;
		animation-name: red;
		animation-duration: 5s;
	}
	@keyframes red{
		from{
			transform: rotate(360deg);
		}
	}
	
	img
	{
		width: 140px;
		height: 170px;
	}
	body
	{	color: white;
		background:url("bbg.gif");
		font-family: monospace;
		padding: 
		border: 
		margin:0;


	}
	.container
	{	height: 600px;
		padding: 0px;
		display: grid;
		position: relative;
		background: url("container wall.gif");
		grid-template-columns: repeat(4, 1fr);
	}
	.tiles
	{	overflow:hidden;
		border-radius: 5px;
		width: 140px;
		height: 170px;
		border: solid;
		margin: 5dp;
		background-color: white;
	}
	.tiles:hover
	{	transform: scale(1.02);
		border-radius: 15px;
		background-color: black;
	}

</style>
</html>