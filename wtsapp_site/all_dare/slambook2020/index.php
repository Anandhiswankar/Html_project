<?php
session_start();
?>
<html>
<head>

<title>Slambook 2020</title>
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="../../css/main.css"/>
	

</head>

	<style>
	
		.Top_name
		{
			color:white;
			margin-top:10px;
		}
		
		.card_panel
		{
			background-color:white;
			border-radius: 20px;
			width:80%;
			margin-top:10%;
			
		}
		
		.input_name
		{
			padding: 5px;
			width:80%;
			border-radius: 20px 5px 20px 5px;
			text-align: center;
			color:white;
			
		}
		
		
		.card_panel_title
		{
			color:#b224ef;
		}
		
		.input_name::placeholder
		{
			color: white;
			text-align: center;
		}
		
		
		@media only screen and (min-device-width:770px)
		{
			.card_panel
		{
			width: 30%;
		}
		}
		
		#panel_1
		{
			display:block;
		}
		
		#panel_2
		{
			display:block;
		}
		
		.token_style
		{
			border-radius: 20px;
		}
		
		
		.label_about
		{
			color:white;
			text-decoration: none;
			background-color:rgba(255,255,255,0.40);
			border-radius: 10px 5px 10px 5px;
			width: 100px;
			padding: 5px;
			text-align: center;
			border: 1px solid white;
			font-size: 20px;
		}
	</style>
	
<body>
	
	<div align="center">
	
		<div class="Top_name">
		<h3>Slambook 2020</h3>
		</div>
		<br/>
		
		
		
		<br/>
		
		
			
			<div class="card_panel" id=" panel_1">
			<div class="card_panel_title">
				<h4>Enter Your Name</h4>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="creater_name" placeholder="Enter Your Name" required/>
					<br/><br/>
						<input type="submit" name="submit_name" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
			
		
		
		<?php
		
		if(isset($_GET["submit_name"]))
		{
			$_SESSION["creater_name"]=$_GET["creater_name"];
			
			
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_2">
			<div class="card_panel_title">
				<h4>Question</h4>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q1" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q1" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
		<?php
		
		if(isset($_GET["submit_q1"]))
		{
			$_SESSION["q1"]=$_GET["q1"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_3">
			<div class="card_panel_title">
				<h4>Question 2</h4>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q2" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q2" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
		<?php
		
		if(isset($_GET["submit_q2"]))
		{
			$_SESSION["q2"]=$_GET["q2"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		document.getElementById(" panel_3").style.display="none";
		</script>
		
		<div class="card_panel" id=" panel_4">
			<div class="card_panel_title">
				<h4>Answer</h4>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<?php echo($_SESSION["creater_name"]);?>
					<br/>
					<?php echo($_SESSION["q1"]);?>
					<br/>
					<?php echo($_SESSION["q2"]);?>
					<br/>
				</div>
			</div>
			
		
		<?php
			session_unset();
		   session_destroy();
		}
		
		?>
		
		
	</div>
	
</body>
</html>
