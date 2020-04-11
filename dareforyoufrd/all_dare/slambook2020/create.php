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
			box-shadow: 8px 10px 25px black;
			border:1px solid #b224ef;
		}
		
		.input_name
		{
			padding: 5px;
			width:80%;
			border-radius: 10px 5px 10px 5px;
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
		
		
		.start_btn
		{
			padding:10px;
		}
	</style>
	
<body>
	
	<div align="center">
	
		<div class="Top_name">
		<h2>Slambook 2020</h2>
		</div>
		<br/>
		
		
		
		<br/>
		
		
		
			<div class="card_panel" id=" panel_1">
			<div class="card_panel_title">
				<h3>Enter Your Name</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="creator_name" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_creator" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		
		
		
		<?php
		
		if(isset($_GET["submit_creator"]))
		{
			
			$creater_name = $_GET["creator_name"];
		
			?>
		
		
			<div class="card_panel" id=" panel_2">
			<div class="card_panel_title">
				<br/>
				<h4>Your Slambook 2020 Created</h4>
			</div>
				<br/>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<a href="whatsapp://send?text=https://link.com" data-action="share/whatsapp/share">
					<button class="style_btn lin_color_left"> Share With Your Friend</button></a>	
					<br/>
					<br/>
					<hr/>
					<div class="card_panel_title">
				<br/>
				<h4>Thanks</h4>
			</div>
					<br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		

	
		
	</div>
	
</body>
</html>
