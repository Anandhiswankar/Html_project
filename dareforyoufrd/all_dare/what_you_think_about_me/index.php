
<?php

session_start();

$creater_name = $_GET["creater_name"];



$_SESSION["creater_name"] = $creater_name;

?>

<html>
    <head>
        <title> Slambook for <?php echo($creater_name);?> </title>
        <link rel="stylesheet" href="ind.css">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <div align="center">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="ind.php" method="POST" >
                        <h2 style="color:black;"> Slambook for <?php echo($creater_name);?></h2>
                       
                        <div align="left" class="shift_right">

                    <div class="form-group">
                        <h5>Name:</h5><br/>
                        <input type="text" name="sl1" class="form-control inpt" placeholder="Enter here (not Required)">
                    </div>
                    <div class="form-group">
                        <h5>my name in your contact list:</h5><br/>
                        <input type="text" name="sl2" class="form-control inpt" placeholder="Enter here" required>
                    </div>
                     
                    <div class="form-group">
                        <h5>mujhe kya mante ho:</h5><br/>
                        <input type="text" name="sl3" class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <h5>muzme kya acha lagta hai:</h5><br/>
                        <input type="text" name="sl4"class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <h5>How many % you love me:</h5><br/>
                        <input type="text" name="sl5"class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <h5>Give me one nick name:</h5><br/>
                        <input type="text" name="sl6"class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <h5>dedicate one song to me:</h5><br/>
                        <input type="text" name="sl7"class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    
                    <div class="form-group">
                        <h5>yaadgar lamha?</h5><br/>
                        <input type="text" name="sl8"class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    <div class="form-group">
                        <h5>Ek advice?</h5><br/>
                        <input type="text" name="sl9"class="form-control inpt" placeholder="Enter here" required>
                    </div>
                    
                   
                    <div class="form-group2" >
                        <label style="color:black;">write anything about me:</label><br/>
                        <input type="text" name="sl10"class="form-control2 inpt" placeholder="Enter here" required>
                    </div>
                   
                </div>
                <br/>
               
                    <input type="submit" name="submit" class="save_btn" value="Save"/>


                    <br/>
						<br/>
						<br/>
                  </form>
             </div>
        
        </div>
            </div>

            </div>
        
    
    </body>
</html>