<?php
session_start();

include("config.php");

$con= new mysqli(server,username,password,database);

if($con->connect_error)
{
	echo("<script>alert('Error');</script>");
	
}



$creater_name = $_GET["creater_name"];


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
	
<body>
	
	<div align="center">
	
		<div class="Top_name">
		<h2>Slambook 2020 reply</h2>
		</div>
		<br/>

		<?php
		
		$check_empty = "select * from chlone where code='$creater_name' ORDER BY id DESC";

$res = $con->query($check_empty);

if(mysqli_num_rows($res)>0)
{
	
	while($row=$res->fetch_assoc())
	{
		
		?>
		
		
		<div class="card_panel">
		<div class="card_panel_title">	
			<h3>Reply from <?php echo($row["sl1"]);?></h3>
		</div>
		<div class="card_body">
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
						<td><hr/></td>
						<td><hr/></td>
						</tr>
						
						<tr>
						<td class="q_tab">my name in your contact list:</td>
						<td><?php echo($row["sl2"]);?></td>
						</tr>
						
						
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
						
						<tr>
						<td class="q_tab">mujhe kya mante ho:</td>
						<td><?php echo($row["sl3"]);?></td>
						</tr>
						
						
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
						
							<tr>
						<td class="q_tab">muzme kya acha lagta hai:</td>
						<td><?php echo($row["sl4"]);?></td>
						</tr>
						
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
						
							<tr>
						<td class="q_tab">How many % you love me:</td>
						<td><?php echo($row["sl5"]);?></td>
						</tr>
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
						
							<tr>
						<td class="q_tab">Give me one nick name:</td>
						<td><?php echo($row["sl6"]);?></td>
						</tr>
						
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
							<tr>
						<td class="q_tab">dedicate one song to me:</td>
						<td><?php echo($row["sl7"]);?></td>
						</tr>
						
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
							<tr>
						<td class="q_tab">yaadgar lamha?</td>
						<td><?php echo($row["sl8"]);?></td>
						</tr>
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
							<tr>
						<td class="q_tab">Ek advice?</td>
						<td><?php echo($row["sl9"]);?></td>
						</tr>
						<tr>
						<td><hr/></td>
						<td><hr/></td>
						</tr>
							<tr>
						<td class="q_tab">write anything about me</td>
						<td><?php echo($row["sl10"]);?></td>
						</tr>
						
						
						
						
						
						
					</table>
					<br/>
					<hr/>
					<br/>
					<h3 style="color:#b224ef;">Dareforyou.webhostapp.com</h3>
					<br/>
					
				</div>
		</div>
		</div>
		
	<?php
		
	}
}
		?>
		
		
	</div>
	
</body>
</html>
