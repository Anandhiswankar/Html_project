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
		
		<?php
		
		$creater_name ="";
		
		if($_GET["creater_name"]!="")
		{
			$creater_name = $_GET["creater_name"];
			$_SESSION["creater_name"] = $creater_name;
		}
		
		?>
		
			
			<div class="card_panel" id=" panel_1">
			<div class="card_panel_title">
				<h3>Start Slambook 2020</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
						<div class="card_panel_title">
				<label>Creator name</label>
			</div>
					<input class="input_name right_side_color_lin" type="text" name="creater_name" style="font-size: 20px;" value="<?php echo($creater_name);?>" placeholder="Creater name" disabled required/>
					<br/><br/>
						<input type="submit" name="submit_start" value="Start" class="style_btn lin_color_left start_btn"/>
						</form>
					<br/>
				</div>
			</div>
			
		
		
		<?php
		
		if(isset($_GET["submit_start"]))
		{
			
			
			
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_2">
			<div class="card_panel_title">
				<h3>Im Your?</h3>
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
				<h3>U Call me ?</h3>
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
				<h3>Best in me ?</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q3" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q3" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
			
		<?php
		
		if(isset($_GET["submit_q3"]))
		{
			$_SESSION["q3"]=$_GET["q3"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		document.getElementById(" panel_3").style.display="none";
		document.getElementById(" panel_4").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_5">
			<div class="card_panel_title">
				<h3>Bad in me ?</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q4" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q4" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
		<?php
		
		if(isset($_GET["submit_q4"]))
		{
			$_SESSION["q4"]=$_GET["q4"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		document.getElementById(" panel_3").style.display="none";
		document.getElementById(" panel_4").style.display="none";
		document.getElementById(" panel_5").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_6">
			<div class="card_panel_title">
				<h3>My personality ?</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q5" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q5" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
		<?php
		
		if(isset($_GET["submit_q5"]))
		{
			$_SESSION["q5"]=$_GET["q5"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		document.getElementById(" panel_3").style.display="none";
		document.getElementById(" panel_4").style.display="none";
		document.getElementById(" panel_5").style.display="none";
		document.getElementById(" panel_6").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_7">
			<div class="card_panel_title">
				<h3>Best Moment with me ?</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q6" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q6" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
		
			
		<?php
		
		if(isset($_GET["submit_q6"]))
		{
			$_SESSION["q6"]=$_GET["q6"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		document.getElementById(" panel_3").style.display="none";
		document.getElementById(" panel_4").style.display="none";
		document.getElementById(" panel_5").style.display="none";
		document.getElementById(" panel_6").style.display="none";
		document.getElementById(" panel_7").style.display="none";
		</script>
		
			<div class="card_panel" id=" panel_8">
			<div class="card_panel_title">
				<h3>Any advice ?</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					<form method="get">
					<input class="input_name right_side_color_lin" type="text" name="q7" placeholder="Enter here.." required/>
					<br/><br/>
						<input type="submit" name="submit_q7" value="Start" class="style_btn lin_color_left"/>
						</form>
					<br/><br/>
				</div>
			</div>
		
		<?php
		}
		
		?>
		
		
		

<?php
		
		if(isset($_GET["submit_q7"]))
		{
			$_SESSION["q7"]=$_GET["q7"];
			?>
		<script>
		document.getElementById(" panel_1").style.display="none";
		document.getElementById(" panel_2").style.display="none";
		document.getElementById(" panel_3").style.display="none";
		document.getElementById(" panel_4").style.display="none";
		document.getElementById(" panel_5").style.display="none";
		document.getElementById(" panel_6").style.display="none";
		document.getElementById(" panel_7").style.display="none";
		document.getElementById(" panel_8").style.display="none";
		</script>
		
		<div class="card_panel" id=" panel_9">
			<div class="card_panel_title">
				<br/>
				<h4><?php echo($_SESSION["creater_name"]);?> slambook 2020 reply</h4>
			</div>
			<br/>
				<hr/>
			
			<style>
			.table_panel
				{
					width: 90%;
					
					color:#b224ef;
				}
				
				.ans_tab
				{
					
				}
				
				.q_tab
				{
					color:black;
				}
				
			</style>
		
				<div class="card_panel_body">
					
					<br/>
					<table class="table_panel">
					<tr>
						<th style="color: black; float: left;">
						Question
						</th>
						<th>
						Answer
						</th>
						</tr>
						
						<tr>
						<td class="q_tab" >im your:</td>
						<td class="ans_tab"><?php echo($_SESSION["q1"]);?></td>
						</tr>
						
						<tr>
						<td class="q_tab">U call me:</td>
						<td class="ans_tab"><?php echo($_SESSION["q2"]);?></td>
						</tr>
						
						<tr>
						<td class="q_tab">Best in me:</td>
						<td class="ans_tab"><?php echo($_SESSION["q3"]);?></td>
						</tr>
						
						<tr>
						<td class="q_tab">Bad in me:</td>
						<td class="ans_tab"><?php echo($_SESSION["q4"]);?></td>
						</tr>
						
						<tr>
						<td class="q_tab">My personality:</td>
						<td class="ans_tab"><?php echo($_SESSION["q5"]);?></td>
						</tr>
						
						
						<tr>
						<td class="q_tab">Best Moment:</td>
						<td class="ans_tab"><?php echo($_SESSION["q6"]);?></td>
						</tr>
						
						
						<tr>
						<td class="q_tab">Any Advice:</td>
						<td class="ans_tab"><?php echo($_SESSION["q7"]);?></td>
						</tr>
						
					</table>
					<br/>
					<hr/>
					<br/>
					<h3 style="color:#b224ef;">Dareforyou.webhostapp.com</h3>
					<br/>
					
				</div>
			</div>
			
		
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
		<div class="card_panel" id=" panel_9">
			<div class="card_panel_title">
				<h3>Create Your Dare now</h3>
			</div>
				<hr/>
				<div class="card_panel_body">
					<br/>
					
					<a href="../../index.html"><button class="style_btn lin_color_left">Create Now in DareFouYou</button></a>
						
					<br/>
					<br/>
					<hr/>
					<h3>More Amazing dare</h3>
					<br/>
				</div>
			</div>
		
		<?php
			//session_unset();
		   //session_destroy();
		}
		
		?>

		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
	</div>
	
</body>
</html>
