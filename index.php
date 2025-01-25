<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
	<div class="box">
		<form method="post" action="home.php">
			<h1>
				GUIDING RIG
			</h1>
			<h2>game compatibilty testing site</h2>
			enter your name:
			<input type="text" name="user" required>
			<br>
			<u><br>enter your system specifications</u><br>
			CPU:  intel i3/ryzen 3
			<input type="radio" name="cpu" value="3" checked>
			  intel i5/ryzen 5
			<input type="radio" name="cpu" value="5">
			<br>RAM: 
			<select name="ram" >
				<option value="2">2gb</option>
				<option value="4">4gb</option>
				<option value="8">8gb</option>
				<option value="16">16gb</option>
				<option value="32">32gb</option>
				
			</select>
			<br>
			HDD:
			<input type="number" required name="hdd" placeholder="HDD space available">
			<br>
	<input type="submit" value="LETS GO">		
			<br>


		</form>
		
	</div>

</body>
</html>
<style type="text/css">

	.box{
		border-bottom: solid;
		border-top: solid;
		text-align: center;
		
		width: 400px;
		height: 335px;
		margin-top: 150px;
		margin-left: 400px;
		animation-name: show;
		animation-duration: 1s;
		border-color: whitesmoke;
		border-radius: 15px;
		overflow: hidden;
		
	}
	input[type='submit']
	{
		margin: 5px;
	}
	@keyframes show
	{
		from{
			height: 0px;
		}
	}
	body
	{
		font-family: cursive;
		font-size: 34;
		background-image: url("regz.gif");
		justify-content: center;
		color: ghostwhite;


	}
	input{
		margin: 5dp;

	}
	input[type="submit"]
	{
		background-color: blue;
		color: white;
		width: 150px;
		height: 40px;
		font-family: fantasy;
		border-radius: 15px;
	}
	

</style>